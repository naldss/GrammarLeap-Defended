<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosHunterController;
use App\Http\Controllers\SentenceFixerController;
use App\Http\Controllers\TenseChallengeController;
use App\Http\Controllers\SentenceSorterController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ClassicStudyController;
use App\Http\Controllers\VerifyEmailController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


Route::get('/nlp', function(){
    return view('trial-nlp');
});

Auth::routes(['verify' => true]);

// Protect routes to verified users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::post('/missions/complete/{MissionId}', [MissionController::class, 'completeMission'])->name('missions.complete');
    Route::post('/missions/complete/claim/{MissionId}', [MissionController::class, 'addPointsFromClaimPoints'])->name('claimpoints');

    Route::post('/update-game-stats-PosHunter', [PosHunterController::class, 'updateGameStats'])->name('update-game-stats-PosHunter');
    Route::post('/update-game-stats-SentenceFixer', [SentenceFixerController::class, 'updateGameStats'])->name('update-game-stats-SentenceFixer');
    Route::post('/update-game-stats-TenseChallenge', [TenseChallengeController::class, 'updateGameStats'])->name('update-game-stats-TenseChallenge');
    Route::post('/update-game-stats-SentenceSorter', [SentenceSorterController::class, 'updateGameStats'])->name('update-game-stats-SentenceSorter');

    Route::get('/POS-Hunter', [PosHunterController::class, 'show'])->name('pos-hunter');
    Route::get('/sentence-fixer', [SentenceFixerController::class, 'show'])->name('sentencefixer');
    Route::get('/tense-challenge', [TenseChallengeController::class, 'show'])->name('tensechallenge');
    Route::get('/sentence-sorter', [SentenceSorterController::class, 'show'])->name('sentencesorter');


    Route::get('/classicstudy', [ClassicStudyController::class, 'show'])->name('classicstudy');
    Route::get('/pretest', [ClassicStudyController::class, 'preTest'])->name('pretest');
    Route::get('/posttest', [ClassicStudyController::class, 'postTest'])->name('posttest');
    Route::get('/classicstudytopic{id}', [ClassicStudyController::class, 'showTopic'])->name('classicstudytopic');
    Route::post('/update-user-exercise', [ClassicStudyController::class, 'updateUserExercise'])->name('update-user-exercise');
    Route::post('/update-pretest', [ClassicStudyController::class, 'updatePretest'])->name('update-pretest');
    Route::post('/update-posttest', [ClassicStudyController::class, 'updatePosttest'])->name('update-posttest');



    // Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/games', [HomeController::class, 'games'])->name('games');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email'); // Default verification notice
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
    ->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', [VerifyEmailController::class, 'resend'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');







