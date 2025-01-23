<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TenseChallengeSentence;

class TenseChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sentences = [
            [
                'sentence' => 'She writes letters every day.',
                'difficulty' => 'easy',
            ],
            [
                'sentence' => 'He is walking to school.',
                'difficulty' => 'easy',
            ],
            [
                'sentence' => 'They ate dinner together.',
                'difficulty' => 'easy',
            ],
            [
                'sentence' => 'I will help you tomorrow.',
                'difficulty' => 'easy',
            ],
            [
                'sentence' => 'The children were playing in the yard.',
                'difficulty' => 'mid',
            ],
            [
                'sentence' => 'She had cooked dinner before we arrived.',
                'difficulty' => 'mid',
            ],
            [
                'sentence' => 'We have been learning English for three years.',
                'difficulty' => 'mid',
            ],
            [
                'sentence' => 'He will have left by the time we arrive.',
                'difficulty' => 'mid',
            ],
            [
                'sentence' => 'I had been reading the book all morning.',
                'difficulty' => 'mid',
            ],
            [
                'sentence' => 'By next year, she will have been teaching for a decade.',
                'difficulty' => 'hard',
            ],
            [
                'sentence' => 'The train will be arriving at the station soon.',
                'difficulty' => 'hard',
            ],
            [
                'sentence' => 'He will have been practicing piano for two hours by then.',
                'difficulty' => 'hard',
            ],
            [
                'sentence' => 'We had been waiting for an hour when the bus finally came.',
                'difficulty' => 'hard',
            ],
            [
                'sentence' => 'She has been writing her thesis for several weeks.',
                'difficulty' => 'hard',
            ],

        ];

        foreach ($sentences as $sentence) {
            TenseChallengeSentence::create($sentence);
        }
    }
}
