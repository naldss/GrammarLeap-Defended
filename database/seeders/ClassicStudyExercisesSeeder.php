<?php

namespace Database\Seeders;

use App\Models\ClassicStudyExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassicStudyExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            [
                'topic_id' => 1,
                'question' => "Which of the following is a common noun?",
                'answer1' => 'Dog',
                'answer2' => 'Paris',
                'answer3' => 'John',
                'answer4' => 'Apple',
                'correct' => 'Dog'
            ],
            [
                'topic_id' => 1,
                'question' => "Which of these is a countable noun?",
                'answer1' => 'Rice',
                'answer2' => 'Water',
                'answer3' => 'Apple',
                'answer4' => 'Music',
                'correct' => 'Apple'
            ],
            [
                'topic_id' => 1,
                'question' => "What type of noun is 'book'?",
                'answer1' => 'Concrete Noun',
                'answer2' => 'Abstract Noun',
                'answer3' => 'Countable Noun',
                'answer4' => 'Collective Noun',
                'correct' => 'Concrete Noun'
            ],
            [
                'topic_id' => 1,
                'question' => "Which sentence contains a plural noun?",
                'answer1' => 'The boy reads a book.',
                'answer2' => 'The dogs are playing outside.',
                'answer3' => 'The girl is running.',
                'answer4' => 'The man walks to work.',
                'correct' => 'The dogs are playing outside.'
            ],
            [
                'topic_id' => 1,
                'question' => "Which of the following is a proper noun?",
                'answer1' => 'School',
                'answer2' => 'Car',
                'answer3' => 'Paris',
                'answer4' => 'Girl',
                'correct' => 'Paris'
            ],
            [
                'topic_id' => 2,
                'question' => "What is the primary function of a pronoun?",
                'answer1' => 'To take the place of a noun',
                'answer2' => 'To show possession',
                'answer3' => 'To describe a person',
                'answer4' => 'To ask a question',
                'correct' => 'To take the place of a noun'
            ],
            [
                'topic_id' => 2,
                'question' => "Which of the following is a personal pronoun?",
                'answer1' => 'Him',
                'answer2' => 'This',
                'answer3' => 'Many',
                'answer4' => 'Which',
                'correct' => 'Him'
            ],
            [
                'topic_id' => 2,
                'question' => "Which of these is an example of a possessive pronoun?",
                'answer1' => 'He',
                'answer2' => 'My',
                'answer3' => 'His',
                'answer4' => 'They',
                'correct' => 'His'
            ],
            [
                'topic_id' => 2,
                'question' => "What is the purpose of a reflexive pronoun?",
                'answer1' => 'To emphasize the subject',
                'answer2' => 'To replace a noun in a sentence',
                'answer3' => 'To show ownership',
                'answer4' => 'To indicate that the subject and object are the same',
                'correct' => 'To indicate that the subject and object are the same'
            ],
            [
                'topic_id' => 2,
                'question' => "Which of these is a relative pronoun?",
                'answer1' => 'Who',
                'answer2' => 'Mine',
                'answer3' => 'This',
                'answer4' => 'It',
                'correct' => 'Who'
            ],
            [
                'topic_id' => 3,
                'question' => "Which of the following is an example of an action verb?",
                'answer1' => 'She sings beautifully.',
                'answer2' => 'She is.',
                'answer3' => 'She was a teacher.',
                'answer4' => 'She had been.',
                'correct' => 'She sings beautifully.'
            ],
            [
                'topic_id' => 3,
                'question' => "What is the function of a linking verb in a sentence?",
                'answer1' => 'To show action.',
                'answer2' => 'To connect the subject to a complement.',
                'answer3' => 'To express possibility.',
                'answer4' => 'To show a completed action.',
                'correct' => 'To connect the subject to a complement.'
            ],
            [
                'topic_id' => 3,
                'question' => "Which of the following sentences contains a helping (auxiliary) verb?",
                'answer1' => 'He writes every day.',
                'answer2' => 'They have been studying for hours.',
                'answer3' => 'She is the teacher.',
                'answer4' => 'He plays soccer.',
                'correct' => 'They have been studying for hours.'
            ],
            [
                'topic_id' => 3,
                'question' => "Which sentence is in the present continuous tense?",
                'answer1' => 'She writes an email.',
                'answer2' => 'She wrote an email.',
                'answer3' => 'She is writing an email.',
                'answer4' => 'She will write an email.',
                'correct' => 'She is writing an email.'
            ],
            [
                'topic_id' => 3,
                'question' => "Which of the following sentences uses the past perfect tense?",
                'answer1' => 'She had eaten before I arrived.',
                'answer2' => 'She eats every day.',
                'answer3' => 'She was eating lunch.',
                'answer4' => 'She will have eaten by noon.',
                'correct' => 'She had eaten before I arrived.'
            ],
            [
                'topic_id' => 4,
                'question' => "What is the main function of an adjective?",
                'answer1' => 'Modifies verbs',
                'answer2' => 'Modifies nouns or pronouns',
                'answer3' => 'Modifies adverbs',
                'answer4' => 'Modifies sentences',
                'correct' => 'Modifies nouns or pronouns'
            ],
            [
                'topic_id' => 4,
                'question' => "Which of these words is an example of a descriptive adjective?",
                'answer1' => 'Quickly',
                'answer2' => 'Smart',
                'answer3' => 'Under',
                'answer4' => 'Many',
                'correct' => 'Smart'
            ],
            [
                'topic_id' => 4,
                'question' => "Which adjective would answer the question, 'How many?'",
                'answer1' => 'Tall',
                'answer2' => 'Several',
                'answer3' => 'Bright',
                'answer4' => 'Beautiful',
                'correct' => 'Several'
            ],
            [
                'topic_id' => 4,
                'question' => "Which of the following is a demonstrative adjective?",
                'answer1' => 'This',
                'answer2' => 'His',
                'answer3' => 'Their',
                'answer4' => 'A',
                'correct' => 'This'
            ],
            [
                'topic_id' => 4,
                'question' => "What type of adjective is used to show possession?",
                'answer1' => 'Interrogative adjective',
                'answer2' => 'Demonstrative adjective',
                'answer3' => 'Possessive adjective',
                'answer4' => 'Quantitative adjective',
                'correct' => 'Possessive adjective'
            ],
            [
                'topic_id' => 5,
                'question' => "Which of the following is an example of an adverb of manner?",
                'answer1' => 'She sings beautifully.',
                'answer2' => 'She sings fast.',
                'answer3' => 'She is talented.',
                'answer4' => 'She is quiet.',
                'correct' => 'She sings beautifully.'
            ],
            [
                'topic_id' => 5,
                'question' => "Which of the following is an example of an adverb of place?",
                'answer1' => 'Always',
                'answer2' => 'Quickly',
                'answer3' => 'Inside',
                'answer4' => 'Sometimes',
                'correct' => 'Inside'
            ],
            [
                'topic_id' => 5,
                'question' => "Which of these is an adverb of frequency?",
                'answer1' => 'Never',
                'answer2' => 'Loudly',
                'answer3' => 'Beautifully',
                'answer4' => 'Near',
                'correct' => 'Never'
            ],
            [
                'topic_id' => 5,
                'question' => "Which sentence contains an adverb of time?",
                'answer1' => 'She sings beautifully.',
                'answer2' => 'They arrive every day at 9 AM.',
                'answer3' => 'The kids are playing outside.',
                'answer4' => 'I enjoy reading.',
                'correct' => 'They arrive every day at 9 AM.'
            ],
            [
                'topic_id' => 5,
                'question' => "Which of the following is NOT an adverb?",
                'answer1' => 'Often',
                'answer2' => 'Never',
                'answer3' => 'Beautiful',
                'answer4' => 'Quickly',
                'correct' => 'Beautiful'
            ],
            [
                'topic_id' => 6,
                'question' => "Which of these sentences contains a preposition?",
                'answer1' => 'The dog is sleeping.',
                'answer2' => 'He ran to the store.',
                'answer3' => 'She is happy.',
                'answer4' => 'I sing songs.',
                'correct' => 'He ran to the store.'
            ],
            [
                'topic_id' => 6,
                'question' => "Which of these is a preposition of time?",
                'answer1' => 'In',
                'answer2' => 'Across',
                'answer3' => 'Behind',
                'answer4' => 'During',
                'correct' => 'During'
            ],
            [
                'topic_id' => 6,
                'question' => "Which preposition is used to show place?",
                'answer1' => 'By',
                'answer2' => 'Across',
                'answer3' => 'Before',
                'answer4' => 'Between',
                'correct' => 'Between'
            ],
            [
                'topic_id' => 6,
                'question' => "Which sentence uses a compound preposition?",
                'answer1' => 'The cat is on the roof.',
                'answer2' => 'The car is parked near the house.',
                'answer3' => 'He is going inside the building.',
                'answer4' => 'She went out of the room.',
                'correct' => 'She went out of the room.'
            ],
            [
                'topic_id' => 6,
                'question' => "What type of preposition is used in the sentence: 'I did it because of him'?",
                'answer1' => 'Preposition of place',
                'answer2' => 'Preposition of manner',
                'answer3' => 'Preposition of time',
                'answer4' => 'Preposition of cause',
                'correct' => 'Preposition of cause'
            ],
            [
                'topic_id' => 7,
                'question' => "Which of the following is a coordinating conjunction?",
                'answer1' => 'for',
                'answer2' => 'because',
                'answer3' => 'although',
                'answer4' => 'neither',
                'correct' => 'for'
            ],
            [
                'topic_id' => 7,
                'question' => "Which of the following is a subordinating conjunction?",
                'answer1' => 'and',
                'answer2' => 'but',
                'answer3' => 'because',
                'answer4' => 'or',
                'correct' => 'because'
            ],
            [
                'topic_id' => 7,
                'question' => "Which of these is a correlative conjunction?",
                'answer1' => 'for',
                'answer2' => 'both ... and',
                'answer3' => 'because',
                'answer4' => 'when',
                'correct' => 'both ... and'
            ],
            [
                'topic_id' => 7,
                'question' => "Which conjunction is used in the sentence: 'I will either stay home ___ go to the
               gym'?",
                'answer1' => 'for',
                'answer2' => 'or',
                'answer3' => 'but',
                'answer4' => 'and',
                'correct' => 'or'
            ],
            [
                'topic_id' => 7,
                'question' => "What is the function of the conjunction 'or' in the sentence 'You can have coffee or
               tea'?",
                'answer1' => 'Condition',
                'answer2' => 'Choice',
                'answer3' => 'Cause',
                'answer4' => 'Contrast',
                'correct' => 'Choice'
            ],
            [
                'topic_id' => 8,
                'question' => "What is the primary purpose of an interjection?",
                'answer1' => 'To describe actions in a sentence',
                'answer2' => 'To express strong emotions or reactions',
                'answer3' => 'To link clauses or phrases',
                'answer4' => 'To modify nouns',
                'correct' => 'To express strong emotions or reactions'
            ],
            [
                'topic_id' => 8,
                'question' => "Which of the following is an example of an interjection?",
                'answer1' => 'Quickly',
                'answer2' => 'And',
                'answer3' => 'Wow!',
                'answer4' => 'Beautiful',
                'correct' => 'Wow!'
            ],
            [
                'topic_id' => 8,
                'question' => "In which type of writing are interjections more commonly used?",
                'answer1' => 'Formal writing',
                'answer2' => 'Informal writing',
                'answer3' => 'Scientific reports',
                'answer4' => 'Poetry only',
                'correct' => 'Informal writing'
            ],
            [
                'topic_id' => 8,
                'question' => "Which interjection is often used to get someone’s attention?",
                'answer1' => 'Hey!',
                'answer2' => 'Alas!',
                'answer3' => 'Bravo!',
                'answer4' => 'Ouch!',
                'correct' => 'Hey!'
            ],
            [
                'topic_id' => 8,
                'question' => "What is an onomatopoeic interjection?",
                'answer1' => 'An interjection that mimics sounds',
                'answer2' => 'An interjection that shows excitement',
                'answer3' => 'An interjection that expresses sadness',
                'answer4' => 'An interjection that links clauses',
                'correct' => 'An interjection that mimics sounds'
            ],
            [
                'topic_id' => 9,
                'question' => "Which of these sentences is a declarative sentence?",
                'answer1' => '"What time is the meeting?"',
                'answer2' => '"Please close the window."',
                'answer3' => '"The sun rises in the east."',
                'answer4' => '"How are you?"',
                'correct' => '"The sun rises in the east."'
            ],
            [
                'topic_id' => 9,
                'question' => "What punctuation mark is used at the end of an interrogative sentence?",
                'answer1' => 'Period (.)',
                'answer2' => 'Exclamation mark (!)',
                'answer3' => 'Comma (,)',
                'answer4' => 'Question mark (?)',
                'correct' => 'Question mark (?)'
            ],
            [
                'topic_id' => 9,
                'question' => "Which of the following is an imperative sentence?",
                'answer1' => '"The dog is barking loudly."',
                'answer2' => '"Please bring me a glass of water."',
                'answer3' => '"What time does the bus arrive?"',
                'answer4' => '"I love reading books."',
                'correct' => '"Please bring me a glass of water."'
            ],
            [
                'topic_id' => 9,
                'question' => "What punctuation mark should be used at the end of an exclamatory sentence?",
                'answer1' => 'Period (.)',
                'answer2' => 'Question mark (?)',
                'answer3' => 'Exclamation mark (!)',
                'answer4' => 'Comma (,)',
                'correct' => 'Exclamation mark (!)'
            ],
            [
                'topic_id' => 9,
                'question' => "What punctuation mark is used at the end of an imperative sentence?",
                'answer1' => 'Question mark (?)',
                'answer2' => 'Period (.) or Exclamation mark (!)',
                'answer3' => 'Colon (:)',
                'answer4' => 'Comma (,)',
                'correct' => 'Period (.) or Exclamation mark (!)'
            ],
            [
                'topic_id' => 10,
                'question' => "Which punctuation mark is used to indicate strong emotion or excitement?",
                'answer1' => 'Period',
                'answer2' => 'Question Mark',
                'answer3' => 'Exclamation Point',
                'answer4' => 'Semicolon',
                'correct' => 'Exclamation Point'
            ],
            [
                'topic_id' => 10,
                'question' => "What is the correct punctuation mark to use at the end of the sentence: 'How are
               you today'?",
                'answer1' => 'Period',
                'answer2' => 'Question Mark',
                'answer3' => 'Exclamation Point',
                'answer4' => 'Semicolon',
                'correct' => 'Question Mark'
            ],
            [
                'topic_id' => 10,
                'question' => "Which punctuation mark is used to end a declarative sentence?",
                'answer1' => 'Period',
                'answer2' => 'Question Mark',
                'answer3' => 'Exclamation Point',
                'answer4' => 'Comma',
                'correct' => 'Period'
            ],
            [
                'topic_id' => 10,
                'question' => "When should you use a semicolon?",
                'answer1' => 'To separate independent clauses without a conjunction',
                'answer2' => 'To end a sentence',
                'answer3' => 'To introduce a quote',
                'answer4' => 'To separate items in a list',
                'correct' => 'To separate independent clauses without a conjunction'
            ],
            [
                'topic_id' => 10,
                'question' => "How do you properly use a colon?",
                'answer1' => 'To introduce a list or explanation',
                'answer2' => 'To separate two independent clauses',
                'answer3' => 'To end a sentence',
                'answer4' => 'To indicate possession',
                'correct' => 'To introduce a list or explanation'
            ],
            [
                'topic_id' => 11,
                'question' => "The first word in a direct quote should be:",
                'answer1' => 'Always in lowercase',
                'answer2' => 'Always in uppercase',
                'answer3' => 'Capitalized if it begins the sentence',
                'answer4' => 'Capitalized if it\'s a proper noun',
                'correct' => 'Capitalized if it begins the sentence'
            ],
            [
                'topic_id' => 11,
                'question' => "Which of the following should be capitalized?",
                'answer1' => 'professor smith',
                'answer2' => 'Professor Smith',
                'answer3' => 'professor Smith',
                'answer4' => 'professor smith',
                'correct' => 'Professor Smith'
            ],
            [
                'topic_id' => 11,
                'question' => "Which of these is a proper noun?",
                'answer1' => 'lake',
                'answer2' => 'mountain',
                'answer3' => 'Eiffel Tower',
                'answer4' => 'tree',
                'correct' => 'Eiffel Tower'
            ],
            [
                'topic_id' => 11,
                'question' => "Which sentence is capitalized correctly?",
                'answer1' => '"we will go to the park tomorrow."',
                'answer2' => '"We will go to the park tomorrow."',
                'answer3' => '"We will go to the park Tomorrow."',
                'answer4' => '"We will Go to the park tomorrow."',
                'correct' => '"We will go to the park tomorrow."'
            ],
            [
                'topic_id' => 11,
                'question' => "What is the rule for capitalizing the pronoun 'I'?",
                'answer1' => 'It should always be capitalized.',
                'answer2' => 'It is capitalized when it starts a sentence.',
                'answer3' => 'It is capitalized when it refers to a specific person.',
                'answer4' => 'It is never capitalized.',
                'correct' => 'It should always be capitalized.'
            ],
            [
                'topic_id' => 12,
                'question' => "Which sentence uses correct subject-verb agreement?",
                'answer1' => 'The dogs barks loudly.',
                'answer2' => 'The dog bark loudly.',
                'answer3' => 'The dog barks loudly.',
                'answer4' => 'The dogs barking loudly.',
                'correct' => 'The dog barks loudly.'
            ],
            [
                'topic_id' => 12,
                'question' => "The committee (approve/approves) the new policies every month.",
                'answer1' => 'approve',
                'answer2' => 'approves',
                'answer3' => 'are approving',
                'answer4' => 'have approved',
                'correct' => 'approves'
            ],
            [
                'topic_id' => 12,
                'question' => "Each of the students (has/have) completed the assignment.",
                'answer1' => 'has',
                'answer2' => 'have',
                'answer3' => 'are having',
                'answer4' => 'was',
                'correct' => 'has'
            ],
            [
                'topic_id' => 12,
                'question' => "The team (run/runs) out onto the field together.",
                'answer1' => 'run',
                'answer2' => 'runs',
                'answer3' => 'is running',
                'answer4' => 'has run',
                'correct' => 'runs'
            ],
            [
                'topic_id' => 12,
                'question' => "Either John or his friends (is/are) going to the game.",
                'answer1' => 'is',
                'answer2' => 'are',
                'answer3' => 'has',
                'answer4' => 'have',
                'correct' => 'are'
            ],
            [
                'topic_id' => 13,
                'question' => "In 'The teacher, along with her students, is preparing for the test,' what is the
               subject?",
                'answer1' => 'teacher',
                'answer2' => 'students',
                'answer3' => 'teacher and students',
                'answer4' => 'preparing',
                'correct' => 'teacher'
            ],
            [
                'topic_id' => 13,
                'question' => "Identify the subject in the sentence: 'Here are the keys you requested.'",
                'answer1' => 'Here',
                'answer2' => 'are',
                'answer3' => 'keys',
                'answer4' => 'requested',
                'correct' => 'keys'
            ],
            [
                'topic_id' => 13,
                'question' => "What is the subject in 'The box of old photos is in the attic'?",
                'answer1' => 'box',
                'answer2' => 'photos',
                'answer3' => 'attic',
                'answer4' => 'old',
                'correct' => 'box'
            ],
            [
                'topic_id' => 13,
                'question' => "What is the subject in the sentence: 'The results of the survey were surprising.'",
                'answer1' => 'results',
                'answer2' => 'survey',
                'answer3' => 'were',
                'answer4' => 'surprising',
                'correct' => 'results'
            ],
            [
                'topic_id' => 13,
                'question' => "In the sentence, 'The dog, along with the cats, was in the yard,' what is the
               subject?",
                'answer1' => 'dog',
                'answer2' => 'in',
                'answer3' => 'was',
                'answer4' => 'yard',
                'correct' => 'dog'
            ],
            [
                'topic_id' => 14,
                'question' => "Identify the subject in the sentence: 'The cat sleeps on the mat.'",
                'answer1' => 'sleeps',
                'answer2' => 'mat',
                'answer3' => 'The cat',
                'answer4' => 'on',
                'correct' => 'The cat'
            ],
            [
                'topic_id' => 14,
                'question' => "What is the predicate in the sentence: 'Birds chirp loudly in the morning'?",
                'answer1' => 'Birds',
                'answer2' => 'chirp loudly in the morning',
                'answer3' => 'loudly',
                'answer4' => 'in the morning',
                'correct' => 'chirp loudly in the morning'
            ],
            [
                'topic_id' => 14,
                'question' => "Identify the complete predicate in the sentence: 'The students finished their project
               early.'",
                'answer1' => 'The students',
                'answer2' => 'finished',
                'answer3' => 'finished their project early',
                'answer4' => 'their project early',
                'correct' => 'finished their project early'
            ],
            [
                'topic_id' => 14,
                'question' => "What is the simple subject in the sentence: 'A group of friends went to the beach'?",
                'answer1' => 'A group',
                'answer2' => 'friends',
                'answer3' => 'went',
                'answer4' => 'the beach',
                'correct' => 'A group'
            ],
            [
                'topic_id' => 14,
                'question' => "Which part of this sentence is the compound subject? 'The teacher and her
               students are planning a field trip.'",
                'answer1' => 'teacher',
                'answer2' => 'her students',
                'answer3' => 'teacher and students',
                'answer4' => 'planning',
                'correct' => 'teacher and students'
            ],
            [
                'topic_id' => 15,
                'question' => "Which of the following is an example of an independent clause?",
                'answer1' => 'If you study hard',
                'answer2' => 'Although it rained',
                'answer3' => 'She smiled',
                'answer4' => 'When I was young',
                'correct' => 'She smiled'
            ],
            [
                'topic_id' => 15,
                'question' => "What is the main function of a dependent clause?",
                'answer1' => 'To express a complete thought',
                'answer2' => 'To modify a noun or pronoun',
                'answer3' => 'To provide additional information or context to an independent clause',
                'answer4' => 'To act as the subject of a sentence',
                'correct' => 'To provide additional information or context to an independent clause'
            ],
            [
                'topic_id' => 15,
                'question' => "Which of the following is an adjective clause?",
                'answer1' => 'She bought the dress that she liked.',
                'answer2' => 'He will arrive when the meeting starts.',
                'answer3' => 'I don’t know who called me.',
                'answer4' => 'I can’t decide whether to go or not.',
                'correct' => 'She bought the dress that she liked.'
            ],
            [
                'topic_id' => 15,
                'question' => "Which of the following is a noun clause?",
                'answer1' => 'Whoever arrives first will get the prize.',
                'answer2' => 'The cat that I adopted is playful.',
                'answer3' => 'We went to the store after we finished school.',
                'answer4' => 'She explained why she was late.',
                'correct' => 'Whoever arrives first will get the prize.'
            ],
            [
                'topic_id' => 15,
                'question' => "What is the role of a noun clause in a sentence?",
                'answer1' => 'It modifies a noun or pronoun',
                'answer2' => 'It provides extra information about a verb',
                'answer3' => 'It acts as a noun in the sentence',
                'answer4' => 'It connects two independent clauses',
                'correct' => 'It acts as a noun in the sentence'
            ],
            [
                'topic_id' => 16,
                'question' => "Which of the following is a prepositional phrase?",
                'answer1' => 'In the morning',
                'answer2' => 'Running fast',
                'answer3' => 'To go home',
                'answer4' => 'Playing the piano',
                'correct' => 'In the morning'
            ],
            [
                'topic_id' => 16,
                'question' => "Which of the following is a gerund phrase?",
                'answer1' => 'Walking to the store',
                'answer2' => 'To walk to the store',
                'answer3' => 'Walked to the store',
                'answer4' => 'Walking very fast',
                'correct' => 'Walking to the store'
            ],
            [
                'topic_id' => 16,
                'question' => "In the sentence 'He enjoys reading books,' what is the gerund phrase?",
                'answer1' => 'He',
                'answer2' => 'Enjoys',
                'answer3' => 'Reading books',
                'answer4' => 'Books',
                'correct' => 'Reading books'
            ],
            [
                'topic_id' => 16,
                'question' => "Which of the following is an example of a participial phrase?",
                'answer1' => 'To run quickly',
                'answer2' => 'Running down the street',
                'answer3' => 'On the roof',
                'answer4' => 'To go home',
                'correct' => 'Running down the street'
            ],
            [
                'topic_id' => 16,
                'question' => "Which of the following sentences contains an infinitive phrase?",
                'answer1' => 'She went to the park.',
                'answer2' => 'They like to play soccer.',
                'answer3' => 'I saw him yesterday.',
                'answer4' => 'We are waiting.',
                'correct' => 'They like to play soccer.'
            ],
            [
                'topic_id' => 17,
                'question' => "What is a complex sentence?",
                'answer1' => 'A sentence with two or more independent clauses.',
                'answer2' => 'A sentence with one independent clause and one or more dependent clauses.',
                'answer3' => 'A sentence with only dependent clauses.',
                'answer4' => 'A sentence with no clauses.',
                'correct' => 'A sentence with one independent clause and one or more dependent clauses.'
            ],
            [
                'topic_id' => 17,
                'question' => "Which sentence is a complex sentence?",
                'answer1' => '"I went home, and I went to bed."',
                'answer2' => '"If it rains, we will cancel the picnic."',
                'answer3' => '"The dog barks loudly."',
                'answer4' => '"They are happy and content."',
                'correct' => '"If it rains, we will cancel the picnic."'
            ],
            [
                'topic_id' => 17,
                'question' => "In a complex sentence, what role does a dependent clause play?",
                'answer1' => 'It expresses a complete thought and can stand alone.',
                'answer2' => 'It adds additional information but cannot stand alone.',
                'answer3' => 'It is a main clause in the sentence.',
                'answer4' => 'It contains only the subject.',
                'correct' => 'It adds additional information but cannot stand alone.'
            ],
            [
                'topic_id' => 17,
                'question' => "Which of these sentences contains a dependent clause?",
                'answer1' => '"We went to the park."',
                'answer2' => '"I like apples."',
                'answer3' => '"Although it was late, he kept working."',
                'answer4' => '"They slept."',
                'correct' => '"Although it was late, he kept working."'
            ],
            [
                'topic_id' => 17,
                'question' => "Which of these is an independent clause?",
                'answer1' => '"Although I like apples"',
                'answer2' => '"Because he was late"',
                'answer3' => '"He finished his homework"',
                'answer4' => '"When the sun sets"',
                'correct' => '"He finished his homework"'
            ],
            [
                'topic_id' => 18,
                'question' => "In the sentence \"If he studies, he will pass the exam,\" which verb tense is used in
               the dependent clause?",
                'answer1' => 'Present Tense',
                'answer2' => 'Past Tense',
                'answer3' => 'Future Tense',
                'answer4' => 'Present Perfect Tense',
                'correct' => 'Present Tense'
            ],
            [
                'topic_id' => 18,
                'question' => "In the sentence \"When she finished her homework, she went to bed,\" which tense
               is used in the dependent clause?",
                'answer1' => 'Present Tense',
                'answer2' => 'Past Tense',
                'answer3' => 'Future Tense',
                'answer4' => 'Present Perfect Tense',
                'correct' => 'Past Tense'
            ],
            [
                'topic_id' => 18,
                'question' => "Which tense is used in the dependent clause when describing a condition that is
               true in the present or future?",
                'answer1' => 'Present Tense',
                'answer2' => 'Past Tense',
                'answer3' => 'Future Tense',
                'answer4' => 'Present Perfect Tense',
                'correct' => 'Present Tense'
            ],
            [
                'topic_id' => 18,
                'question' => "What verb tense is used in the main clause of the sentence \"If you study hard, you
               will pass the test\"?",
                'answer1' => 'Present Tense',
                'answer2' => 'Past Tense',
                'answer3' => 'Future Tense',
                'answer4' => 'Present Perfect Tense',
                'correct' => 'Future Tense'
            ],
            [
                'topic_id' => 18,
                'question' => "Which verb tense combination indicates an action that will be completed in the
               future before another future action?",
                'answer1' => 'Future Tense + Present Tense',
                'answer2' => 'Future Perfect Tense + Future Tense',
                'answer3' => 'Present Tense + Past Tense',
                'answer4' => 'Past Tense + Present Perfect Tense',
                'correct' => 'Future Perfect Tense + Future Tense'
            ],
            [
                'topic_id' => 19,
                'question' => "Which of the following sentences uses the Future Continuous Tense correctly?",
                'answer1' => 'She will be teaching at 3 p.m.',
                'answer2' => 'She will teach at 3 p.m.',
                'answer3' => 'She is teaching at 3 p.m.',
                'answer4' => 'She taught at 3 p.m.',
                'correct' => 'She will be teaching at 3 p.m.'
            ],
            [
                'topic_id' => 19,
                'question' => "In the sentence \"I will be reading when you arrive,\" which verb tense is used in the
               dependent clause?",
                'answer1' => 'Present Continuous',
                'answer2' => 'Present Perfect',
                'answer3' => 'Future Continuous',
                'answer4' => 'Past Continuous',
                'correct' => 'Future Continuous'
            ],
            [
                'topic_id' => 19,
                'question' => "Choose the correct sentence using the Future Continuous Tense:",
                'answer1' => 'I will be reading when you arrive.',
                'answer2' => 'I will read when you arrive.',
                'answer3' => 'I read when you arrive.',
                'answer4' => 'I will reading when you arrive.',
                'correct' => 'I will be reading when you arrive.'
            ],
            [
                'topic_id' => 19,
                'question' => "What is the correct verb tense for this complex sentence: \"I will be eating dinner
               when they arrive\"?",
                'answer1' => 'Future Continuous',
                'answer2' => 'Future Perfect',
                'answer3' => 'Present Continuous',
                'answer4' => 'Past Continuous',
                'correct' => 'Future Continuous'
            ],
            [
                'topic_id' => 19,
                'question' => "Which of the following sentences contains a Future Continuous Tense?",
                'answer1' => 'I will be working on my project at 6 p.m.',
                'answer2' => 'I work on my project at 6 p.m.',
                'answer3' => 'I will work on my project at 6 p.m.',
                'answer4' => 'I worked on my project at 6 p.m.',
                'correct' => 'I will be working on my project at 6 p.m.'
            ],
            [
                'topic_id' => 20,
                'question' => "Which of the following is the correct past tense of the verb \"go\"?",
                'answer1' => 'Go',
                'answer2' => 'Gone',
                'answer3' => 'Went',
                'answer4' => 'Going',
                'correct' => 'Went'
            ],
            [
                'topic_id' => 20,
                'question' => "Choose the correct past participle of the verb \"take.\"",
                'answer1' => 'Took',
                'answer2' => 'Taked',
                'answer3' => 'Taken',
                'answer4' => 'Taking',
                'correct' => 'Taken'
            ],
            [
                'topic_id' => 20,
                'question' => "Which of these is the correct past tense of the verb \"eat\"?",
                'answer1' => 'Eat',
                'answer2' => 'Ate',
                'answer3' => 'Eaten',
                'answer4' => 'Eating',
                'correct' => 'Ate'
            ],
            [
                'topic_id' => 20,
                'question' => "Which of these is the correct past participle of \"run\"?",
                'answer1' => 'Ran',
                'answer2' => 'Run',
                'answer3' => 'Runned',
                'answer4' => 'Running',
                'correct' => 'Run'
            ],
            [
                'topic_id' => 20,
                'question' => "What is the future tense form of the verb \"speak\"?",
                'answer1' => 'Spoke',
                'answer2' => 'Speaks',
                'answer3' => 'Speaking',
                'answer4' => 'Will speak',
                'correct' => 'Will speak'
            ],
        ];


        foreach ($exercises as $exercise) {
            ClassicStudyExercise::create($exercise);
        }
    }
}
