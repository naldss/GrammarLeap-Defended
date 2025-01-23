<?php

namespace App\Http\Controllers;
use App\Models\TenseChallengeSentence;
use App\Models\UserStatsTenseChallenge;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TenseChallengeController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";
            $user_id = $user->id;

            // Retrieve the difficulty from the request, default to 'medium' if not provided
            $difficulty = $request->input('difficulty', 'easy');

            // Query sentences based on the selected difficulty and order them randomly
            $sentences = TenseChallengeSentence::query()
                ->where('difficulty', $difficulty)  // Filter by difficulty level
                ->inRandomOrder()
                ->limit(3)
                ->get();

            // $sentences = TenseChallengeSentence::query()->inRandomOrder()->limit(3)->get();



            return view('games.tensechallenge', compact('sentences', 'name', 'user_id', 'difficulty'));
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
        $userStats = UserStatsTenseChallenge::firstOrCreate(
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
