<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mission;


class MissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = [
            [
                'title' => 'Complete a Classic Study Exercise',
                'description' => 'Earn +20 points on all games by completing one Classic Study Exercise.',
                'points' => 20,
            ],
            [
                'title' => 'POS Hunter 100% Score Challenge',
                'description' => 'Earn +20 points on POS Hunter by scoring 100% on 1 of your games.',
                'points' => 20,
            ],
            [
                'title' => 'Sentence Builder 100% Score Challenge',
                'description' => 'Earn +20 points on Sentence Builder by scoring 100% on 1 of your games.',
                'points' => 20,
            ],
            [
                'title' => 'Tense Challenge obtain 100% Score',
                'description' => 'Earn +20 points on Tense Challenge by scoring 100% on 1 of your games.',
                'points' => 20,
            ],
            [
                'title' => 'Obtain 100% Score in Sentence Sorter',
                'description' => 'Earn +20 points on Sentence Sorter by scoring 100% on 1 of your games.',
                'points' => 20,
            ],
        ];

        foreach ($missions as $mission) {
            Mission::create($mission);
        }
    }
}
