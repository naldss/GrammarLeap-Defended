<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show Registration Form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'sex' => 'required|in:male,female',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'birthdate' => $request->birthdate,
            'sex' => $request->sex,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->sendEmailVerificationNotification();

        Auth::login($user);

        return redirect()->route('home');
    }


    // new register for beta
    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'fname' => 'required|string|max:255',
    //         'lname' => 'required|string|max:255',
    //         'birthdate' => 'required|date',
    //         'sex' => 'required|in:male,female',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('register')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Ensure the AUTO_INCREMENT is set to 1000 if it's less
    //     $maxId = DB::table('users')->max('id');
    //     if ($maxId < 1000) {
    //         DB::statement('ALTER TABLE users AUTO_INCREMENT = 1000');
    //     }

    //     // Create the user
    //     $user = User::create([
    //         'fname' => $request->fname,
    //         'lname' => $request->lname,
    //         'birthdate' => $request->birthdate,
    //         'sex' => $request->sex,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     $user->sendEmailVerificationNotification();

    //     Auth::login($user);

    //     return redirect()->route('home');
    // }






















    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to dashboard or home after login
            return redirect()->route('home');
        }

        return redirect()->route('login')
            ->withErrors(['error' => 'ⓘ Invalid Credentials'])->withInput();
    }

    // Log out the user
    public function logout()
    {
        Auth::logout();

        // Redirect to the homepage after logout
        return redirect()->route('home');
    }
}