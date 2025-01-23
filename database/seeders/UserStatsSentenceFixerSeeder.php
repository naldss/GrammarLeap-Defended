<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserStatsSentenceFixer;

class UserStatsSentenceFixerSeeder extends Seeder
{
    public function run()
    {
        for ($id = 1000; $id < 1021; $id++) { // Assuming 21 users starting from ID 1000
            UserStatsSentenceFixer::create([
                'user_id' => $id,
                'total_points' => rand(1, 199), // Random total points, maximum of 199
                'numOfGames' => rand(5, 20),   // Random number of games played
                'numOfWins' => rand(3, 15),    // Random number of wins
                'numOfLosses' => rand(1, 10),  // Random number of losses
            ]);
        }

        // for ($i = 20; $i < 30; $i++) {
        //     UserStatsSentenceFixer::create([
        //         'user_id' => $i,
        //         'total_points' => rand(50, 500),
        //         'numOfGames' => rand(5, 20),
        //         'numOfWins' => rand(3, 15),
        //         'numOfLosses' => rand(1, 10),
        //     ]);
        // }
    }
}
