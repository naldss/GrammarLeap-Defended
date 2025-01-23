<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function showProgress()
    {
        $userId = Auth::id();

        // Fetch points from the stats table(s) or calculate total points
        $totalPoints = \App\Models\UserStatsPosHunter::where('user_id', $userId)->sum('total_points');

        // Calculate the level and progress for the next level
        $level = floor($totalPoints / 200); // Every 200 points = 1 level
        $currentLevelPoints = $totalPoints % 200; // Points toward the next level
        $progressPercentage = ($currentLevelPoints / 200) * 100; // Progress bar percentage

        return view('progress', compact('totalPoints', 'level', 'currentLevelPoints', 'progressPercentage'));
    }
}
