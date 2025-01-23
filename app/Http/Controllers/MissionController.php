<?php

// app/Http/Controllers/MissionController.php

namespace App\Http\Controllers;
use App\Models\UserMission;
use Carbon\Carbon;
use Auth;
use App\Models\UserStatsPosHunter;
use App\Models\UserStatsSentenceFixer;
use App\Models\UserStatsTenseChallenge;
use App\Models\UserStatsSentenceSorter;

class MissionController extends Controller
{
    public function completeMission($MissionId)
    {
        $user = Auth::user();
        $userMission = UserMission::where('mission_id', $MissionId)
            ->where('date', Carbon::today())
            ->where('user_id', $user->id)  // Filter by user ID
            ->firstOrFail();


        $userMission->update(['completed' => true]);

        return redirect()->back()->with('status', 'Mission completed!');
    }

    public function addPointsFromClaimPoints($MissionId)
    {
        $user = Auth::user();
        $userMission = UserMission::where('mission_id', $MissionId)
            ->where('date', Carbon::today())
            ->where('user_id', $user->id)
            ->firstOrFail();

        // Initialize variables for stats tables
        $userStatPosHunter = null;
        $userStatSentenceFixer = null;
        $userStatTenseChallenge = null;
        $userStatSentenceSorter = null;

        // Add points based on the mission ID
        switch ($userMission->mission_id) {
            case 1: // Add to all stats tables
                $userStatPosHunter = UserStatsPosHunter::firstOrCreate(['user_id' => $user->id]);
                $userStatSentenceFixer = UserStatsSentenceFixer::firstOrCreate(['user_id' => $user->id]);
                $userStatTenseChallenge = UserStatsTenseChallenge::firstOrCreate(['user_id' => $user->id]);
                $userStatSentenceSorter = UserStatsSentenceSorter::firstOrCreate(['user_id' => $user->id]);

                $userStatPosHunter->total_points += 20;
                $userStatSentenceFixer->total_points += 20;
                $userStatTenseChallenge->total_points += 20;
                $userStatSentenceSorter->total_points += 20;
                break;

            case 2: // Add to PosHunter stats
                $userStatPosHunter = UserStatsPosHunter::firstOrCreate(['user_id' => $user->id]);
                $userStatPosHunter->total_points += 20;
                break;

            case 3: // Add to SentenceFixer stats
                $userStatSentenceFixer = UserStatsSentenceFixer::firstOrCreate(['user_id' => $user->id]);
                $userStatSentenceFixer->total_points += 20;
                break;

            case 4: // Add to TenseChallenge stats
                $userStatTenseChallenge = UserStatsTenseChallenge::firstOrCreate(['user_id' => $user->id]);
                $userStatTenseChallenge->total_points += 20;
                break;

            case 5: // Add to SentenceSorter stats
                $userStatSentenceSorter = UserStatsSentenceSorter::firstOrCreate(['user_id' => $user->id]);
                $userStatSentenceSorter->total_points += 20;
                break;

            default:
                return response()->json(['status' => 'error', 'message' => 'Invalid mission ID'], 400);
        }

        // Update mission as claimed
        $userMission->update(['claimed' => true]);

        // Save updated stats if applicable
        $userStatPosHunter?->save();
        $userStatSentenceFixer?->save();
        $userStatTenseChallenge?->save();
        $userStatSentenceSorter?->save();

        return response()->json(['status' => 'success']); // Return success response
    }


    // public function addPointsFromClaimPoints($MissionId)
    // {
    //     $user = Auth::user();
    //     $userMission = UserMission::where('mission_id', $MissionId)
    //         ->where('date', Carbon::today())
    //         ->where('user_id', $user->id)  // Filter by user ID
    //         ->firstOrFail();

    //     $userStatPosHunter = UserStatsPosHunter::where('user_id', $user->id)->firstOrFail();
    //     $userStatSentenceFixer = UserStatsSentenceFixer::where('user_id', $user->id)->firstOrFail();
    //     $userStatTenseChallenge = UserStatsTenseChallenge::where('user_id', $user->id)->firstOrFail();
    //     $userStatSentenceSorter = UserStatsSentenceSorter::where('user_id', $user->id)->firstOrFail();

    //     // Check the mission ID and add points accordingly
    //     if ($userMission->mission_id == 1) {
    //         $userStatPosHunter->total_points += 20;
    //         $userStatSentenceFixer->total_points += 20;
    //         $userStatTenseChallenge->total_points += 20;
    //         $userStatSentenceSorter->total_points += 20;

    //     } elseif ($userMission->mission_id == 2) {
    //         $userStatPosHunter->total_points += 20;

    //     } elseif ($userMission->mission_id == 3) {
    //         $userStatSentenceFixer->total_points += 20;

    //     } elseif ($userMission->mission_id == 4) {
    //         $userStatTenseChallenge->total_points += 20;

    //     } elseif ($userMission->mission_id == 5) {
    //         $userStatSentenceSorter->total_points += 20;
    //     }

    //     $userMission->update(['claimed' => true]);

    //     // Save the updated user points
    //     $userStatPosHunter->save();
    //     $userStatSentenceFixer->save();
    //     $userStatTenseChallenge->save();
    //     $userStatSentenceSorter->save();

    //     return response()->json(['status' => 'success']); // Return success response
    // }


    // public function addPointsFromClaimPoints($MissionId)
    // {
    //     $user = Auth::user();
    //     $userMission = UserMission::where('mission_id', $MissionId)
    //         ->where('date', Carbon::today())
    //         ->where('user_id', $user->id)  // Filter by user ID
    //         ->firstOrFail();

    //     $userId = Auth::id();

    //     // Check the mission ID and add points accordingly
    //     if ($userMission->mission_id == 1) {
    //         // $user->SB_total += 20;
    //         $userMission->update(['claimed' => true]);
    //     } elseif ($userMission->mission_id == 2) {
    //         $user->PosH_total += 20;
    //         $userMission->update(['claimed' => true]);
    //     } elseif ($userMission->mission_id == 3) {
    //         $user->SB_total += 20;
    //         $userMission->update(['claimed' => true]);
    //     } elseif ($userMission->mission_id == 4) {
    //         $user->TC_total += 20;
    //         $userMission->update(['claimed' => true]);
    //     } elseif ($userMission->mission_id == 5) {
    //         $user->SS_total += 20;
    //         $userMission->update(['claimed' => true]);
    //     }

    //     // Save the updated user points
    //     $user->save();

    //     return response()->json(['status' => 'success']); // Return success response
    // }
}
