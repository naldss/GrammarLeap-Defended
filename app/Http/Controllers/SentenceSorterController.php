<?php

namespace App\Http\Controllers;
use App\Models\SentenceSorterSentence;
use App\Models\UserStatsSentenceSorter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SentenceSorterController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";
            $user_id = $user->id;

            // Retrieve the difficulty from the request, default to 'medium' if not provided
            $difficulty = $request->input('difficulty', 'easy');



            // $types = ['declarative', 'interrogative', 'imperative', 'exclamatory'];

            $sentences = collect();

            // Determine the number of sentences to retrieve based on difficulty
            switch ($difficulty) {
                case 'easy':
                    $numSentences = rand(2, 3);
                    break;
                case 'mid':
                    $numSentences = rand(5, 6);
                    break;
                case 'hard':
                    $numSentences = rand(8, 9);
                    break;
                default:
                    $numSentences = 3; // Default to 3 sentences if difficulty is not recognized
            }

            $sentencesForType = SentenceSorterSentence::where('difficulty', $difficulty)  // Filter by difficulty level
                ->inRandomOrder()
                ->take($numSentences)
                ->get();

            $sentences = $sentences->merge($sentencesForType);

            // Retrieve sentences based on the determined number and difficulty
            // foreach ($types as $type) {
            //     $sentencesForType = SentenceSorterSentence::where('type', $type)
            //         ->where('difficulty', $difficulty)  // Filter by difficulty level
            //         ->inRandomOrder()
            //         ->take($numSentences)
            //         ->get();

            //     $sentences = $sentences->merge($sentencesForType);
            // }

            return view('games.sentencesorter', compact('name', 'sentences', 'user_id'));
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
        $userStats = UserStatsSentenceSorter::firstOrCreate(
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
}
