<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // $users = [
        //     ['id' => 20, 'fname' => 'John', 'lname' => 'Doe', 'birthdate' => '1990-01-01', 'sex' => 'male', 'email' => 'john.doe@example.com', 'password' => Hash::make('password')],
        //     ['id' => 21, 'fname' => 'Jane', 'lname' => 'Smith', 'birthdate' => '1992-02-02', 'sex' => 'male', 'email' => 'jane.smith@example.com', 'password' => Hash::make('password')],
        //     ['id' => 22, 'fname' => 'Alice', 'lname' => 'Johnson', 'birthdate' => '1995-03-03', 'sex' => 'male', 'email' => 'alice.johnson@example.com', 'password' => Hash::make('password')],
        //     ['id' => 23, 'fname' => 'Bob', 'lname' => 'Brown', 'birthdate' => '1988-04-04', 'sex' => 'male', 'email' => 'bob.brown@example.com', 'password' => Hash::make('password')],
        //     ['id' => 24, 'fname' => 'Charlie', 'lname' => 'Davis', 'birthdate' => '1993-05-05', 'sex' => 'male', 'email' => 'charlie.davis@example.com', 'password' => Hash::make('password')],
        //     ['id' => 25, 'fname' => 'Diana', 'lname' => 'Evans', 'birthdate' => '1997-06-06', 'sex' => 'male', 'email' => 'diana.evans@example.com', 'password' => Hash::make('password')],
        //     ['id' => 26, 'fname' => 'Ethan', 'lname' => 'Franklin', 'birthdate' => '1994-07-07', 'sex' => 'male', 'email' => 'ethan.franklin@example.com', 'password' => Hash::make('password')],
        //     ['id' => 27, 'fname' => 'Grace', 'lname' => 'Green', 'birthdate' => '1996-08-08', 'sex' => 'male', 'email' => 'grace.green@example.com', 'password' => Hash::make('password')],
        //     ['id' => 28, 'fname' => 'Henry', 'lname' => 'Harris', 'birthdate' => '1991-09-09', 'sex' => 'male', 'email' => 'henry.harris@example.com', 'password' => Hash::make('password')],
        //     ['id' => 29, 'fname' => 'Isla', 'lname' => 'Ivy', 'birthdate' => '1998-10-10', 'sex' => 'male', 'email' => 'isla.ivy@example.com', 'password' => Hash::make('password')],
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }

        $users = [];
        $names = [
            ['lname' => 'Borabien', 'fname' => 'Rhiana Mae'],
            ['lname' => 'Singian', 'fname' => 'Kaith'],
            ['lname' => 'Bunog', 'fname' => 'Breon Rhai'],
            ['lname' => 'Concejero', 'fname' => 'Darvin Kian'],
            ['lname' => 'Rufino', 'fname' => 'Akisha Nicole'],
            ['lname' => 'Rosales', 'fname' => 'Frances Briele'],
            ['lname' => 'Gonzales', 'fname' => 'Chloe'],
            ['lname' => 'Torres', 'fname' => 'Lil Wayne'],
            ['lname' => 'Aicelle', 'fname' => 'Jane'],
            ['lname' => 'Therenze', 'fname' => 'Nilelec'],
            ['lname' => 'Tuazon', 'fname' => 'Renbell'],
            ['lname' => 'Saleny', 'fname' => 'Baby Princess'],
            ['lname' => 'Mark', 'fname' => 'Joseph'],
            ['lname' => 'Nacu', 'fname' => 'Pepito'],
            ['lname' => 'Falcis', 'fname' => 'Ghel Anne'],
            ['lname' => 'Ocampo', 'fname' => 'Jeraiza Nicole'],
            ['lname' => 'Gueco', 'fname' => 'John Gabriel'],
            ['lname' => 'Elson', 'fname' => 'Malen'],
            ['lname' => 'Lusong', 'fname' => 'Krista'],
            ['lname' => 'Dela Cruz', 'fname' => 'Krista'],
            ['lname' => 'Sales', 'fname' => 'Michael Jr.'],
        ];

        $currentYear = 2025;
        $id = 1000;

        foreach ($names as $name) {
            // Generate a random birthdate for Grade 7 students (11-12 years old)
            $birthYear = $currentYear - rand(11, 12);
            $birthMonth = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
            $birthDay = str_pad(rand(1, 28), 2, '0', STR_PAD_LEFT); // Simplified to avoid invalid dates
            $birthdate = "$birthYear-$birthMonth-$birthDay";

            // Generate email from name
            $email = strtolower(str_replace(' ', '', $name['fname'] . '.' . $name['lname'])) . '@gmail.com';

            // Add user to array
            $users[] = [
                'id' => $id++,
                'fname' => $name['fname'],
                'lname' => $name['lname'],
                'birthdate' => $birthdate,
                'sex' => rand(0, 1) ? 'male' : 'female', 
                'email' => $email,
                'password' => Hash::make('password'),
            ];
        }

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
