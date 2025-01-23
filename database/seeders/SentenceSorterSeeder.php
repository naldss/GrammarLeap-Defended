<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SentenceSorterSentence;

class SentenceSorterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sentences = [
            // Difficulty Level 'easy'
            ['sentence' => 'The cat sleeps.', 'type' => 'declarative', 'difficulty' => 'easy'],
            ['sentence' => 'What is this?', 'type' => 'interrogative', 'difficulty' => 'easy'],
            ['sentence' => 'Close the door.', 'type' => 'imperative', 'difficulty' => 'easy'],
            ['sentence' => 'Wow!', 'type' => 'exclamatory', 'difficulty' => 'easy'],
            ['sentence' => 'She reads.', 'type' => 'declarative', 'difficulty' => 'easy'],
            ['sentence' => 'How are you?', 'type' => 'interrogative', 'difficulty' => 'easy'],
            ['sentence' => 'Turn off the light.', 'type' => 'imperative', 'difficulty' => 'easy'],
            ['sentence' => 'Oh no!', 'type' => 'exclamatory', 'difficulty' => 'easy'],
            ['sentence' => 'He writes.', 'type' => 'declarative', 'difficulty' => 'easy'],
            ['sentence' => 'Can you help?', 'type' => 'interrogative', 'difficulty' => 'easy'],

            // Difficulty Level 'mid'
            ['sentence' => 'The river flows through the valley.', 'type' => 'declarative', 'difficulty' => 'mid'],
            ['sentence' => 'Why did you leave early?', 'type' => 'interrogative', 'difficulty' => 'mid'],
            ['sentence' => 'Bring me the newspaper.', 'type' => 'imperative', 'difficulty' => 'mid'],
            ['sentence' => 'Hooray! We won the game!', 'type' => 'exclamatory', 'difficulty' => 'mid'],
            ['sentence' => 'She painted a beautiful picture.', 'type' => 'declarative', 'difficulty' => 'mid'],
            ['sentence' => 'What are your plans for tomorrow?', 'type' => 'interrogative', 'difficulty' => 'mid'],
            ['sentence' => 'Please finish your homework.', 'type' => 'imperative', 'difficulty' => 'mid'],
            ['sentence' => 'Yikes! That’s a big spider!', 'type' => 'exclamatory', 'difficulty' => 'mid'],
            ['sentence' => 'They are preparing for the trip.', 'type' => 'declarative', 'difficulty' => 'mid'],
            ['sentence' => 'When will you arrive?', 'type' => 'interrogative', 'difficulty' => 'mid'],

            // Difficulty Level 'hard'
            ['sentence' => 'The resplendent mountains loomed majestically in the far-off horizon.', 'type' => 'declarative', 'difficulty' => 'hard'],
            ['sentence' => 'Who might be the illustrious author of this tome?', 'type' => 'interrogative', 'difficulty' => 'hard'],
            ['sentence' => 'Convey the architectural schematics posthaste.', 'type' => 'imperative', 'difficulty' => 'hard'],
            ['sentence' => 'Astounding! What an extraordinary exhibition of talent!', 'type' => 'exclamatory', 'difficulty' => 'hard'],
            ['sentence' => 'The erudite scientist elucidated groundbreaking hypotheses.', 'type' => 'declarative', 'difficulty' => 'hard'],
            ['sentence' => 'For what reason did the empirical investigation falter?', 'type' => 'interrogative', 'difficulty' => 'hard'],
            ['sentence' => 'Tender your comprehensive report prior to the meridian.', 'type' => 'imperative', 'difficulty' => 'hard'],
            ['sentence' => 'Heavens! That is beyond the bounds of credulity!', 'type' => 'exclamatory', 'difficulty' => 'hard'],
            ['sentence' => 'The philharmonic orchestra rendered a bewitching symphony.', 'type' => 'declarative', 'difficulty' => 'hard'],
            ['sentence' => 'By what mechanism does this contrivance operate?', 'type' => 'interrogative', 'difficulty' => 'hard'],
        ];
        foreach ($sentences as $sentence) {
            SentenceSorterSentence::create($sentence);
        }
    }
}
