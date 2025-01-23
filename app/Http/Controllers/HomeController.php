<?php

namespace App\Http\Controllers;
use App\Models\UserStatsPosHunter;
use App\Models\UserStatsSentenceFixer;
use App\Models\UserStatsTenseChallenge;
use App\Models\UserStatsSentenceSorter;
use Carbon\Carbon;
use App\Models\Mission;
use App\Models\UserMission;
use App\Models\ClassicStudyExercise;
use App\Models\ClassicStudyTopic;
use App\Models\UserExercise;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            return view('pages.home', compact('name'));
        } else {
            return redirect()->route('login');
        }
    }

    public function dashboard(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            $userId = Auth::id();

            // Get all topics for total count
            $totalTopics = ClassicStudyTopic::count(); // Total number of topics

            // Get the number of completed exercises by the user
            $completedExercises = UserExercise::where('user_id', $user->id)->count(); // Completed exercises count

            // Calculate completion percentage
            $completionPercentage = 0;
            if ($totalTopics > 0) {
                $completionPercentage = ($completedExercises / $totalTopics) * 100;
            }


            // Fetch points from the stats table(s) or calculate total points
            $totalPointsposhunter = UserStatsPosHunter::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelposhunter = floor($totalPointsposhunter / 200); // Every 200 points = 1 level
            $currentLevelPointsposhunter = $totalPointsposhunter % 200; // Points toward the next level
            $progressPercentageposhunter = ($currentLevelPointsposhunter / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointssentencefixer = UserStatsSentenceFixer::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelsentencefixer = floor($totalPointssentencefixer / 200); // Every 200 points = 1 level
            $currentLevelPointssentencefixer = $totalPointssentencefixer % 200; // Points toward the next level
            $progressPercentagesentencefixer = ($currentLevelPointssentencefixer / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointstensechallenge = UserStatsTenseChallenge::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $leveltensechallenge = floor($totalPointstensechallenge / 200); // Every 200 points = 1 level
            $currentLevelPointstensechallenge = $totalPointstensechallenge % 200; // Points toward the next level
            $progressPercentagetensechallenge = ($currentLevelPointstensechallenge / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointssentencesorter = UserStatsSentenceSorter::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelsentencesorter = floor($totalPointssentencesorter / 200); // Every 200 points = 1 level
            $currentLevelPointssentencesorter = $totalPointssentencesorter % 200; // Points toward the next level
            $progressPercentagesentencesorter = ($currentLevelPointssentencesorter / 200) * 100; // Progress bar percentage


            $today = Carbon::today();

            // Retrieve today's missions for the user
            $userMissions = UserMission::where('user_id', $userId)
                ->where('date', $today)
                ->with('mission')
                ->get();

            // If no missions are found for today, assign new ones
            if ($userMissions->isEmpty()) {
                $missions = Mission::all();
                foreach ($missions as $mission) {
                    UserMission::create([
                        'user_id' => $userId,
                        'mission_id' => $mission->id,
                        'completed' => false,
                        'date' => $today,
                    ]);
                }

                // Reload the missions after assignment
                $userMissions = UserMission::where('user_id', $userId)
                    ->where('date', $today)
                    ->with('mission')
                    ->get();
            }



            return view('pages.dashboard.dashboard', compact(
                'user',
                'name',
                'totalPointsposhunter',
                'levelposhunter',
                'currentLevelPointsposhunter',
                'progressPercentageposhunter',

                'totalPointssentencefixer',
                'levelsentencefixer',
                'currentLevelPointssentencefixer',
                'progressPercentagesentencefixer',

                'totalPointstensechallenge',
                'leveltensechallenge',
                'currentLevelPointstensechallenge',
                'progressPercentagetensechallenge',

                'totalPointssentencesorter',
                'levelsentencesorter',
                'currentLevelPointssentencesorter',
                'progressPercentagesentencesorter',

                'userMissions',
                'completionPercentage'
            ));
        } else {
            return redirect()->route('login');
        }
    }

    public function games(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            $userId = Auth::id();

            // Fetch points from the stats table(s) or calculate total points
            $totalPointsposhunter = UserStatsPosHunter::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelposhunter = floor($totalPointsposhunter / 200); // Every 200 points = 1 level
            $currentLevelPointsposhunter = $totalPointsposhunter % 200; // Points toward the next level
            $progressPercentageposhunter = ($currentLevelPointsposhunter / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointssentencefixer = UserStatsSentenceFixer::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelsentencefixer = floor($totalPointssentencefixer / 200); // Every 200 points = 1 level
            $currentLevelPointssentencefixer = $totalPointssentencefixer % 200; // Points toward the next level
            $progressPercentagesentencefixer = ($currentLevelPointssentencefixer / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointstensechallenge = UserStatsTenseChallenge::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $leveltensechallenge = floor($totalPointstensechallenge / 200); // Every 200 points = 1 level
            $currentLevelPointstensechallenge = $totalPointstensechallenge % 200; // Points toward the next level
            $progressPercentagetensechallenge = ($currentLevelPointstensechallenge / 200) * 100; // Progress bar percentage


            // Fetch points from the stats table(s) or calculate total points
            $totalPointssentencesorter = UserStatsSentenceSorter::where('user_id', $userId)->sum('total_points');

            // Calculate the level and progress for the next level
            $levelsentencesorter = floor($totalPointssentencesorter / 200); // Every 200 points = 1 level
            $currentLevelPointssentencesorter = $totalPointssentencesorter % 200; // Points toward the next level
            $progressPercentagesentencesorter = ($currentLevelPointssentencesorter / 200) * 100; // Progress bar percentage


            // Retrieve top 10 players with names for each game category
            $posHunter = UserStatsPosHunter::select('users.fname', 'users.lname', 'user_stats_poshunter.total_points') // Use correct table name
                ->join('users', 'users.id', '=', 'user_stats_poshunter.user_id') // Correct join
                ->orderBy('user_stats_poshunter.total_points', 'desc') // Correct order by field
                ->take(10)
                ->get()
                ->map(function ($user) {
                    $user->name = "{$user->fname} {$user->lname}"; // Combine first name and last name
                    return $user;
                });


            $sentenceFixer = UserStatsSentenceFixer::select('users.fname', 'users.lname', 'user_stats_sentencefixer.total_points')
                ->join('users', 'users.id', '=', 'user_stats_sentencefixer.user_id')
                ->orderBy('user_stats_sentencefixer.total_points', 'desc')
                ->take(10)
                ->get()
                ->map(function ($user) {
                    $user->name = "{$user->fname} {$user->lname}"; // Combine first name and last name
                    return $user;
                });

            $tenseChallenge = UserStatsTenseChallenge::select('users.fname', 'users.lname', 'user_stats_tensechallenge.total_points')
                ->join('users', 'users.id', '=', 'user_stats_tensechallenge.user_id')
                ->orderBy('user_stats_tensechallenge.total_points', 'desc')
                ->take(10)
                ->get()
                ->map(function ($user) {
                    $user->name = "{$user->fname} {$user->lname}"; // Combine first name and last name
                    return $user;
                });

            $sentenceSorter = UserStatsSentenceSorter::select('users.fname', 'users.lname', 'user_stats_sentencesorter.total_points')
                ->join('users', 'users.id', '=', 'user_stats_sentencesorter.user_id')
                ->orderBy('user_stats_sentencesorter.total_points', 'desc')
                ->take(10)
                ->get()
                ->map(function ($user) {
                    $user->name = "{$user->fname} {$user->lname}"; // Combine first name and last name
                    return $user;
                });


            return view('pages.games.games', compact(
                'user',
                'name',
                'posHunter',
                'sentenceFixer',
                'tenseChallenge',
                'sentenceSorter',

                'totalPointsposhunter',
                'levelposhunter',
                'currentLevelPointsposhunter',
                'progressPercentageposhunter',

                'totalPointssentencefixer',
                'levelsentencefixer',
                'currentLevelPointssentencefixer',
                'progressPercentagesentencefixer',

                'totalPointstensechallenge',
                'leveltensechallenge',
                'currentLevelPointstensechallenge',
                'progressPercentagetensechallenge',

                'totalPointssentencesorter',
                'levelsentencesorter',
                'currentLevelPointssentencesorter',
                'progressPercentagesentencesorter',
            ));
        } else {
            return redirect()->route('login');
        }
    }
}
