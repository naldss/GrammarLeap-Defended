<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SentenceFixerSentence;
use App\Models\UserStatsSentenceFixer;
use Illuminate\Support\Facades\Auth;

class SentenceFixerController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";
            $user_id = $user->id;

            // Retrieve the difficulty from the request, default to 'medium' if not provided
            $difficulty = $request->input('difficulty', 'medium');

            // Query sentences based on the selected difficulty and order them randomly
            $sentences = SentenceFixerSentence::query()
                ->where('difficulty', $difficulty)  // Filter by difficulty level
                ->inRandomOrder()
                ->limit(3)
                ->get();

            $corruptedSentences = [];

            foreach ($sentences as $index => $sentence) {
                $corruptedSentences[$index] = $this->corruptSentence($sentence->sentence, 'medium');
            }

            return view('games.sentencefixer', compact('sentences', 'name', 'corruptedSentences', 'user_id'));
        } else {
            return redirect()->route('home');
        }
    }

    public function updateGameStats(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'points' => 'required|integer|min:0',
            'win' => 'required|boolean', // true for win, false for loss
        ]);

        // Find the user's stats or create a new one if it doesn't exist
        $userStats = UserStatsSentenceFixer::firstOrCreate(
            ['user_id' => $validatedData['user_id']],
            ['total_points' => 0, 'numOfGames' => 0, 'numOfWins' => 0, 'numOfLosses' => 0]
        );

        // Update the stats
        $userStats->total_points += $validatedData['points'];
        $userStats->numOfGames += 1;
        if ($validatedData['win']) {
            $userStats->numOfWins += 1;
        } else {
            $userStats->numOfLosses += 1;
        }
        $userStats->save();

        return response()->json([
            'message' => 'User stats updated successfully.',
            'data' => $userStats,
        ]);
    }

    function corruptSentence($sentence, $difficulty)
    {
        $corruptionFactor = [
            'easy' => 0.25,
            'medium' => 0.5,
            'hard' => 0.75
        ];

        $corruptionLevel = $corruptionFactor[$difficulty] ?? 0.5; // Default to medium if invalid difficulty

        // Corrupt capitalizations
        $words = explode(' ', $sentence);
        foreach ($words as &$word) {
            if (rand(0, 100) / 100 < $corruptionLevel) { // Apply corruption based on level
                $chars = str_split($word);
                foreach ($chars as &$char) {
                    if (ctype_alpha($char) && rand(0, 1)) {
                        $char = rand(0, 1) ? strtoupper($char) : strtolower($char);
                    }
                }
                $word = implode('', $chars);
            }
        }
        $corruptedSentence = implode(' ', $words);

        // Corrupt punctuations
        $punctuations = [',', '.', '!', '?'];
        $corruptedSentence = preg_replace_callback('/[.,!?]/', function ($match) use ($punctuations, $corruptionLevel) {
            return rand(0, 100) / 100 < $corruptionLevel ? $punctuations[array_rand($punctuations)] : $match[0];
        }, $corruptedSentence);

        // Add random punctuations to the end of the sentence
        if (rand(0, 100) / 100 < $corruptionLevel) {
            $randomPunctuation = $punctuations[array_rand($punctuations)];
            $corruptedSentence .= $randomPunctuation;
        }

        return $corruptedSentence;
    }

}
