<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosHunterSentence;
use App\Models\UserStatsPosHunter;
use Auth;

class PosHunterController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";
            $user_id = $user->id;

            // Get the selected difficulty (default to 'easy' if not selected)
            $difficulty = $request->input('difficulty', 'easy');

            // Query the PosHunterSentence based on difficulty and randomly order them
            $sentences = PosHunterSentence::query()
                ->where('difficulty', $difficulty) // Filter by difficulty level
                ->inRandomOrder() // Randomize the order
                ->limit(3) // Limit to 3 sentences
                ->get();

            return view('games.pos-hunter', compact('sentences', 'name', 'user_id'));
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
        $userStats = UserStatsPosHunter::firstOrCreate(
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
