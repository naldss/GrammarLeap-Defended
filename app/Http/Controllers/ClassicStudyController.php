<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassicStudyExercise;
use App\Models\ClassicStudyTopic;
use App\Models\UserExercise;
use App\Models\UserTest;
use Illuminate\Support\Facades\Auth;

class ClassicStudyController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            $userTest = UserTest::firstOrCreate(
                ['user_id' => $user->id]  // Check if a UserTest with this user_id exists
            );

            $allTopicFoundational = ClassicStudyTopic::where('level', '1')->get();
            $allTopicProficiency = ClassicStudyTopic::where('level', '2')->get();
            $allTopicAdvanced = ClassicStudyTopic::where('level', '3')->get();

            $userExercise = UserExercise::where('user_id', $user->id);

            // Get all topics for total count
            $totalTopics = ClassicStudyTopic::count(); // Total number of topics

            // Get the number of completed exercises by the user
            $completedExercises = UserExercise::where('user_id', $user->id)->count(); // Completed exercises count

            // Calculate completion percentage
            $completionPercentage = 0;
            if ($totalTopics > 0) {
                $completionPercentage = ($completedExercises / $totalTopics) * 100;
            }

            $allExercise = ClassicStudyExercise::all();

            return view('pages.classicstudy.classicstudy', compact('user', 'name', 'userExercise', 'userTest', 'completionPercentage', 'allTopicFoundational', 'allTopicProficiency', 'allTopicAdvanced', 'allExercise'));
        } else {
            return redirect()->route('login');
        }
    }

    public function showTopic($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            $topicId = $id;

            $topicRows = ClassicStudyTopic::where('topic_id', $id)->get();

            // $userExercise = UserExercise::where('user_id', $user->id)->where('topic_id', $id)->first();



            // Find or create the user's exercise record
            $userExercise = UserExercise::firstOrCreate(
                [
                    'user_id' => $user->id,
                    'topic_id' => $id, // Corrected field name to `topic_id`
                ],
                [
                    'score' => 0 // Default score if a new record is created
                ]
            );





            $topicExerciseItems = ClassicStudyExercise::where('topic_id', $id)->get();

            return view('pages.classicstudy.showTopic', compact('user', 'userExercise', 'topicId', 'name', 'topicRows', 'topicExerciseItems'));
        } else {
            return redirect()->route('login');
        }
    }

    public function updateUserExercise(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'topicId' => 'required|integer|exists:classic_study_topics,id',
            'score' => 'required|integer', // Ensuring score is required and an integer
        ]);

        // Find or create the user's exercise record
        $userExercise = UserExercise::firstOrCreate(
            [
                'user_id' => $validatedData['user_id'],
                'topic_id' => $validatedData['topicId'], // Corrected field name to `topic_id`
            ],
            [
                'score' => 0 // Default score if a new record is created
            ]
        );

        // Update the score
        $userExercise->score = $validatedData['score']; // Corrected to use validated score
        $userExercise->save();

        return response()->json(['success' => 'Game stats updated successfully']);
    }

    public function preTest()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            // $topicExerciseItems = ClassicStudyExercise::all();

            // $topicExerciseItems = ClassicStudyExercise::all()->groupBy('topic_id')->map(function ($items) {
            //     return $items->random(2); // Take only the first 2 items for each topic_id
            // });

            $topicExerciseItems = ClassicStudyExercise::all()
                ->groupBy('topic_id')
                ->flatMap(function ($items) {
                    return $items->random(min(2, $items->count())); // Ensure at most 2 items are taken
                })
                ->values()
                ->toArray(); // Convert to a 2D array


            $userTest = UserTest::where('user_id', $user->id)->first();

            $isPostTest = false;

            return view('pages.classicstudy.test', compact('user', 'name', 'topicExerciseItems', 'userTest', 'isPostTest'));
        } else {
            return redirect()->route('login');
        }
    }


    public function postTest()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = "{$user->fname} {$user->lname}";

            $topicExerciseItems = ClassicStudyExercise::all()
                ->groupBy('topic_id')
                ->flatMap(function ($items) {
                    return $items->random(min(2, $items->count())); // Ensure at most 2 items are taken
                })
                ->values()
                ->toArray(); // Convert to a 2D array


            $userTest = UserTest::where('user_id', $user->id)->first();

            $isPostTest = true;

            return view('pages.classicstudy.test', compact('user', 'name', 'topicExerciseItems', 'userTest', 'isPostTest'));
        } else {
            return redirect()->route('login');
        }
    }


    public function updatePretest(Request $request)
    {
        $validatedData = $request->validate([
            'score' => 'required|integer',
        ]);

        // Find or create the user's exercise record
        // $userPretest = UserTest::where('user_id', Auth::user()->id)->first();

        // Find or create the user's exercise record
        $userPretest = UserTest::firstOrCreate(
            ['user_id' => Auth::user()->id], // Search condition
            ['user_id' => Auth::user()->id]  // Default attributes if not found
        );

        // Update the score
        $userPretest->pretest_taken = 1;
        $userPretest->pretest_score = $validatedData['score']; // Corrected to use validated score
        $userPretest->save();

        return response()->json(['success' => 'Game stats updated successfully']);
    }

    public function updatePosttest(Request $request)
    {
        $validatedData = $request->validate([
            'score' => 'required|integer',
        ]);

        // Find or create the user's exercise record
        $userPosttest = UserTest::firstOrCreate(
            ['user_id' => Auth::user()->id], // Search condition
            ['user_id' => Auth::user()->id]  // Default attributes if not found
        );

        // Update the score
        $userPosttest->posttest_taken = 1;
        $userPosttest->posttest_score = $validatedData['score']; // Corrected to use validated score
        $userPosttest->save();

        return response()->json(['success' => 'Game stats updated successfully']);
    }

}
