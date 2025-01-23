<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassicStudyTopic;

class ClassicStudyTopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "Part of Speech: Nouns",
                "sub_title" => "",
                "definition" => <<<EOD
        A noun is one of the most fundamental parts of speech in English. It is a word that represents a person, place, thing, idea, or concept. Nouns are essential for constructing sentences because they typically serve as the subject or object of a sentence.
        EOD
            ],

            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Nouns",
                "definition" => <<<EOD
        Nouns can be categorized into several different types. Here are some of the main categories:

        - Common Nouns
        These refer to general people, places, or things and are not capitalized unless they begin a sentence.
        Examples: dog, city, book, teacher

        - Proper Nouns
        These refer to specific names of people, places, organizations, or things, and are always capitalized.
        Examples: John, Paris, Google, The Mona Lisa

        - Concrete Nouns
        These refer to things that can be physically touched or seen.
        Examples: table, tree, car, dog

        - Abstract Nouns
        These refer to ideas, concepts, qualities, or emotions that cannot be seen or touched.
        Examples: love, freedom, happiness, time

        - Countable Nouns
        These refer to things that can be counted and have a singular and plural form.
        Examples: cat (singular), cats (plural), book (singular), books (plural)

        - Uncountable Nouns
        These refer to things that cannot be counted or do not have a plural form. They often refer to things that are seen as a whole or mass.
        Examples: water, air, sugar, information

        - Collective Nouns
        These refer to groups of people or things considered as a single unit.
        Examples: team, family, flock, herd

        - Compound Nouns
        These are formed by combining two or more words to create a new noun.
        Examples: toothbrush, bedroom, swimming pool, high school

        - Possessive Nouns
        These show ownership or possession and are formed by adding an apostrophe and an "s" (or just an apostrophe for plural nouns) to the noun.
        Examples: John's book, the dog's tail, the company's logo
        EOD
            ],
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Functions of Nouns in Sentences",
                "definition" => <<<EOD
        Nouns can serve different functions in sentences, including:

        1. Subject of the Sentence - The noun that performs the action of the verb.

        2. Object of the Sentence - The noun that receives the action of the verb. There are two types of objects:
        • Direct Object - The noun that directly receives the action of the verb.
        • Indirect Object - The noun that receives the direct object.

        3. Object of a Preposition - The noun that follows a preposition and completes its meaning.

        4. Predicate Noun - The noun that follows a linking verb and renames or describes the subject.
        EOD
            ],
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Noun Gender",
                "definition" => <<<EOD
        Some nouns have a grammatical gender, where they are classified as masculine, feminine, or neuter. This is more common in languages like Spanish and French, but in English, it is mainly seen with specific terms for male and female animals or professions.

        Examples: 
        • Masculine - actor, king, bull
        • Feminine - actress, queen, cow
        • Neuter - table, book, car (inanimate objects typically have a neuter gender)
        EOD
            ],
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Noun Plurals",
                "definition" => <<<EOD
        Nouns can have different plural forms depending on their spelling and structure. Some common plural forms include:
        • Regular: book → books, apple → apples
        • Irregular: child → children, mouse → mice
        EOD
            ],
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Noun Phrases",
                "definition" => <<<EOD
        A noun phrase is a group of words that functions in a sentence as a single noun. It typically consists of a noun and its modifiers, such as adjectives, determiners, and other nouns.

        Examples:
        • The quick brown fox
        • A beautiful painting
        • My friend's car
        EOD
            ],
            [
                "topic_id" => 1,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
        Nouns are crucial building blocks in English grammar. Whether referring to tangible objects, abstract concepts, or collective groups, nouns help convey meaning and structure sentences. Understanding the different types of nouns and their functions allows us to use language more effectively in both written and spoken communication.
        EOD
            ],



            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "Part of Speech: Pronouns",
                "sub_title" => "",
                "definition" => <<<EOD
        Pronouns are words used to take the place of nouns in a sentence. Instead of repeating a noun multiple times, we can use pronouns to make sentences less repetitive and more efficient. Pronouns serve a variety of functions depending on the type and the role they play in a sentence.
        EOD
            ],
            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Pronouns",
                "definition" => <<<EOD
        Pronouns can be categorized into several different types based on their function and usage. Here are some of the main categories:
        
        • Personal Pronouns - These refer to specific people or things and can change form based on their role in a sentence.
        
        First Person: Refer to the speaker (I, me, my, mine, we, our, ours).
        Second Person: Refer to the person being spoken to (you, your, yours).
        Third Person: Refer to someone or something being talked about (he, she, it, him, her, his, hers, its, they, them, their, theirs).

        • Demonstrative Pronouns - These point to specific people or things and indicate their relative position in space or time.
        Examples: this, that, these, those

        • Interrogative Pronouns - These are used to ask questions and seek information about people or things.
        Examples: who, whom, whose, which, what

        • Relative Pronouns - These connect dependent clauses to independent clauses and introduce relative clauses.
        Examples: who, whom, whose, which, that

        • Indefinite Pronouns - These refer to non-specific people or things and do not have a specific antecedent.
        Examples: all, another, any, anybody, anyone, anything, both, each, either, everybody, everyone, everything, few, many, neither, nobody, none, no one, nothing, one, several, some, somebody, someone, something

        • Reflexive Pronouns - These refer back to the subject of the sentence and are used to emphasize the action of the verb.
        Examples: myself, yourself, himself, herself, itself, ourselves, yourselves, themselves

        • Reciprocal Pronouns - These indicate an action that is done by two or more people to each other.
        Examples: each other, one another

        • Intensive Pronouns - These are used to emphasize a preceding noun or pronoun.
        Examples: myself, yourself, himself, herself, itself, ourselves, yourselves, themselves
        EOD
            ],
            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "",
                "sub_title" => "Functions of Pronouns in Sentences",
                "definition" => <<<EOD
        Pronouns can serve different functions in sentences, including:

        1. Subject of the Sentence - The pronoun that performs the action of the verb.
        Example: They are going to the movies. (Here, they is the subject.)

        2. Object of the Sentence - The pronoun that receives the action of the verb. There are two types of objects:
        Example: I saw him at the park. (Here, him is the object of the verb 'saw')

        3. Object of a Preposition - The pronoun that follows a preposition and completes its meaning.
        Example: The book is for her. (Here, her is the object of the preposition 'for')

        4. Possessive Pronouns - These show ownership or possession and do not require an apostrophe.
        Example: That is mine. (Here, mine is a possessive pronoun.)

        5. Reflexive Pronouns - These refer back to the subject of the sentence and are used to emphasize the action of the verb.
        Example: She hurt herself. (Here, herself is a reflexive pronoun.)
        EOD
            ],
            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "",
                "sub_title" => "Pronoun Agreement",
                "definition" => <<<EOD
        Pronouns must agree in number, gender, and person with the noun they replace:
        
        • Number - Singular pronouns should replace singular nouns, and plural pronouns should replace plural nouns.
        Example: The dog wagged its tail. (Here, the singular pronoun 'its' agrees with the singular noun 'dog')

        • Gender - Pronouns must match the gender of the noun they refer to (masculine, feminine, or neutral).
        Example: The girl was tired. She went to bed early. (The pronoun she refers to the feminine noun girl.)

        • Person - Pronouns should match the person of the noun they replace (first, second, or third person).
        Example: I am going to the store. (Here, the first-person pronoun 'I' matches the first-person noun 'I')
        EOD
            ],
            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "",
                "sub_title" => "Avoiding Ambiguity with Pronouns",
                "definition" => <<<EOD
        Pronouns can sometimes create ambiguity in sentences if it is unclear what or whom they are referring to. To avoid confusion, make sure the pronoun has a clear antecedent (the noun it replaces) and that the reference is unambiguous.

        Ambiguous: John told Tom that he was going to the store. (Who is going to the store?)
        Clear: John told Tom that Tom was going to the store. (Here, the pronoun 'Tom' has a clear antecedent.)
        EOD
            ],
            [
                "topic_id" => 2,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
        Pronouns are versatile and essential elements of English grammar that help make sentences more concise and efficient. By replacing nouns and reducing repetition, pronouns contribute to clearer and more effective communication. Understanding the different types of pronouns and their functions allows us to use language more effectively in both written and spoken contexts.
        EOD
            ],

            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "Part of Speech: Verbs",
                "sub_title" => "",
                "definition" => <<<EOD
        A verb is a word that expresses action, occurrence, or existence. Verbs are a central part of every sentence because they describe what the subject of the sentence is doing, what is happening to it, or its state of being. Without a verb, a sentence would not be complete.
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Verbs",
                "definition" => <<<EOD
        Verbs can be categorized into several different types based on their function and usage. Here are some of the main categories:

        • Action Verbs - These describe physical or mental actions that a subject performs.
        Examples: run, jump, think, believe (physical actions), love, hate, understand, remember (mental actions)

        • Linking Verbs - These connect the subject of a sentence to a subject complement, which describes or renames the subject.
        Examples: be, seem, become, appear
        Example: She is a doctor. (The linking verb "is" connects the subject "she" to the complement "doctor.")
        Example: The sky looks beautiful. ("Looks" is a linking verb connecting the subject "sky" to the adjective "beautiful.")

        • Helping Verbs - These work with the main verb to express tense, mood, or voice. Common auxiliary verbs include: be, do, have, can, may, will, shall, must, should, would, could, might, ought to, etc.
        Example: She has finished her homework. ("Has" is a helping verb that, combined with "finished," expresses the present perfect tense.)
        Example: They will go to the store. ("Will" is the helping verb indicating future tense.)

        • Modal Verbs - These express possibility, necessity, ability, or permission.
        Examples: can, could, may, might, must, shall, should, will, would

        Can – Expresses ability or permission.
        Example: She can swim. (ability)
        Example: Can I leave early today? (permission)
        Must – Expresses necessity or obligation.
        Example: You must finish your homework. (necessity)
        Might – Expresses possibility.
        Example: She might go to the party later. (possibility)
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Transisitive and Intransitive Verbs",
                "definition" => <<<EOD
        Transitive Verbs require a direct object to complete their meaning. A transitive verb needs to act on something.
        Example: She kicked the ball. ("Kicked" is a transitive verb, and "ball" is its direct object.)

        Intransitive Verbs do not require a direct object. The action expressed by the verb does not pass to an object.
        Example: He sleeps peacefully. ("Sleeps" is intransitive; it does not need an object.)
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Regular and Irregular Verbs",
                "definition" => <<<EOD
        Regular Verbs follow a standard pattern when forming their past tense and past participles. Typically, regular verbs add -ed to the base form to create the past tense.
        Example: walk (base) → walked (past)
        
        Irregular Verbs do not follow the regular pattern. Their past forms vary and need to be memorized.
        Example: go (base) → went (past)
        Example: eat (base) → ate (past)
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Verb Tenses",
                "definition" => <<<EOD
        Verb Tenses indicate the time of an action or state of being. English has several tenses, including:

        1. Present Tense - Describes actions happening now or regularly.
        • Simple Present: I walk to school. (describes an action that happens regularly or a general fact)
        • Present Continuous: I am walking to school. (describes an action happening now)
        • Present Perfect: I have walked to school. (describes an action that happened at an unspecified time in the past and has relevance to the present)
        • Present Perfect Continuous: I have been walking to school. (describes an action that started in the past and is still in progress)
        
        2. Past Tense - Describes actions that have already happened.
        • Simple Past: I walked to school. (describes an action that occurred in the past)
        • Past Continuous: I was walking to school. (describes an action that was in progress in the past)
        • Past Perfect: I had walked to school. (describes an action that happened before another action in the past)
        • Past Perfect Continuous: I had been walking to school. (describes an action that was in progress before another action in the past)

        3. Future Tense - Describes actions that will happen in the future.
        • Simple Future: I will walk to school. (describes an action that will happen in the future)
        • Future Continuous: I will be walking to school. (describes an action that will be in progress at a specific time in the future)
        • Future Perfect: I will have walked to school. (describes an action that will be completed before a specific time in the future)
        • Future Perfect Continuous: I will have been walking to school. (describes an action that will be in progress up until a specific time in the future)
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Verb Agreement",
                "definition" => <<<EOD
        Verbs must agree with their subjects in number and person. This means that the form of the verb changes based on whether the subject is singular or plural and whether it is first, second, or third person.
        
        • Singular Subjects - Use singular verbs.
        Example: She walks to school. (The singular subject "she" agrees with the singular verb "walks.")

        • Plural Subjects - Use plural verbs.
        Example: They walk to school. (The plural subject "they" agrees with the plural verb "walk.")

        • Compound Subjects - When two or more subjects are joined by "and," use a plural verb.
        Example: John and Mary walk to school. (The compound subject "John and Mary" agrees with the plural verb "walk.")

        • Indefinite Pronouns - Some indefinite pronouns are always singular (e.g., everyone, each), while others are always plural (e.g., both, few). Some can be singular or plural depending on the context (e.g., all, some).
        Example: Everyone is invited to the party. (The singular indefinite pronoun "everyone" agrees with the singular verb "is.")
        Example: Both are going to the party. (The plural indefinite pronoun "both" agrees with the plural verb "are.")
        EOD
            ],
            [
                "topic_id" => 3,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
        Verbs are essential components of English grammar that convey actions, states, and occurrences. Understanding the different types of verbs, their functions, and how they change with tense and agreement is crucial for constructing clear and effective sentences. Mastery of verbs allows for more precise and dynamic communication in both written and spoken language.
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "Part of Speech: Adjectives",
                "sub_title" => "",
                "definition" => <<<EOD
        Adjectives are words that describe or modify nouns and pronouns by providing additional information about their qualities, characteristics, or attributes. They help make sentences more vivid, interesting, and specific by adding details that paint a clearer picture for the reader or listener.
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Adjectives",
                "definition" => <<<EOD
        Adjectives can be categorized into several different types based on their function and usage. Here are some of the main categories:

        • Descriptive Adjectives - These describe the qualities or characteristics of a noun.
        Examples: happy, sad, tall, short, blue, red

        • Quantitative Adjectives - These indicate the quantity or amount of a noun.
        Examples: some, many, few, several, all, no

        • Demonstrative Adjectives - These point to specific nouns and indicate their relative position in space or time.
        Examples: this, that, these, those

        • Possessive Adjectives - These show ownership or possession.
        Examples: my, your, his, her, its, our, their

        • Interrogative Adjectives - These are used to ask questions about nouns.
        Examples: which, what, whose

        • Indefinite Adjectives - These refer to non-specific nouns.
        Examples: any, each, every, either, neither, some, few, many

        • Proper Adjectives - These are derived from proper nouns and are always capitalized.
        Examples: American (from America), Shakespearean (from Shakespeare)

        • Compound Adjectives - These are formed by combining two or more words, usually with a hyphen.
        Examples: well-known, high-quality, full-time

        • Comparative and Superlative Adjectives - These indicate degrees of comparison.
        Comparative: taller, more interesting, less expensive
        Superlative: tallest, most interesting, least expensive

        • Possessive Adejectives - These show ownership or possession.
        Examples: my, your, his, her, its, our, their
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "",
                "sub_title" => "Other Adjective Forms",
                "definition" => <<<EOD
        In English, when multiple adjectives are used together to modify a noun, they generally follow a specific order. The usual order of adjectives is:
        1. Quantity or number (e.g., two, many, few)
        2. Opinion (e.g., beautiful, lovely, interesting)
        3. Size (e.g., small, big, tall)
        4. Age (e.g., old, young, ancient)
        5. Shape (e.g., round, square, triangular)
        6. Color (e.g., red, blue, green)
        7. Proper adjective (origin) (e.g., American, Asian, British)
        8. Material (e.g., wooden, metallic, plastic)
        9. Purpose or qualifier (e.g., cooking, sleeping, writing)

        For example, "two large round red wooden tables":
        - Quantity: two
        - Size: large
        - Shape: round
        - Color: red
        - Material: wooden
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "",
                "sub_title" => "Adjective Phrases",
                "definition" => <<<EOD
        An adjective phrase is a group of words that functions as a single adjective to modify a noun or pronoun. It typically consists of an adjective and any modifiers or complements that provide additional information about the noun.

        Example: "The car is in very good condition."
        In this case, "in very good condition" is an adjective phrase, and "very good condition" is modifying the noun "car."
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "",
                "sub_title" => "Comparing Adjectives with Adverbs",
                "definition" => <<<EOD
        Adjectives and adverbs are both used to modify other words, but they serve different purposes and modify different parts of speech.

        Adjectives modify nouns and pronouns, providing more information about their qualities or characteristics.
        Example: She has a beautiful dress. (The adjective "beautiful" modifies the noun "dress.")

        Adverbs modify verbs, adjectives, or other adverbs, providing more information about how, when, where, or to what extent something happens.
        Example: She sings beautifully. (The adverb "beautifully" modifies the verb "sings.")
        Example: He is very tall. (The adverb "very" modifies the adjective "tall.")
        Example: She runs quite quickly. (The adverb "quite" modifies the adverb "quickly.")
        EOD
            ],
            [
                "topic_id" => 4,
                "level" => 1,
                "title" => "",
                "sub_title" => "Key Points to Remember",
                "definition" => <<<EOD
        • Adjectives modify nouns or pronouns.
        • They help to answer questions like What kind?, How many?, Which one?, and How much?
        • The order of adjectives in a sentence usually follows a specific pattern.
        • There are different types of adjectives, including descriptive, quantitative, possessive, demonstrative, and interrogative.
        
        By understanding how adjectives work, you can make your sentences more descriptive, engaging, and clear. Adjectives help paint a picture in the reader's mind by providing additional details about the things you're talking about.
        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "Part of Speech: Adverbs",
                "sub_title" => "",
                "definition" => <<<EOD
        Adverbs are words that modify verbs, adjectives, or other adverbs by providing more information about how, when, where, or to what extent something happens. They help to clarify the meaning of a sentence and make it more specific, interesting, or precise.
        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Adverbs",
                "definition" => <<<EOD
        Adverbs can be categorized into several different types based on their function and usage. Here are some of the main categories:
        • Adverbs of Manner - These describe how an action is performed.
        Examples: quickly, slowly, carefully, loudly
        Example: She sings beautifully. (The adverb "beautifully" describes how she sings.)

        • Adverbs of Time - These indicate when an action occurs.
        Examples: now, later, yesterday, tomorrow
        Example: He will arrive tomorrow. (The adverb "tomorrow" indicates when he will arrive.)

        • Adverbs of Place - These indicate where an action occurs.
        Examples: here, there, everywhere, nowhere
        Example: She looked everywhere for her keys. (The adverb "everywhere" indicates where she looked.)

        • Adverbs of Frequency - These indicate how often an action occurs.
        Examples: always, never, often, sometimes
        Example: He always eats breakfast. (The adverb "always" indicates how often he eats breakfast.)

        • Adverbs of Degree - These indicate the intensity or degree of an action, adjective, or another adverb.
        Examples: very, quite, almost, too
        Example: She is very tired. (The adverb "very" modifies the adjective "tired.")

        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Functions of Adverbs in Sentences",
                "definition" => <<<EOD
        Adverbs can serve different functions in sentences, including:

        1. Modifying Verbs - Adverbs can provide more information about how, when, where, or to what extent an action is performed.
        Example: She runs quickly. (The adverb "quickly" modifies the verb "runs" by describing how she runs.)

        2. Modifying Adjectives - Adverbs can intensify or qualify adjectives.
        Example: The movie was very interesting. (The adverb "very" modifies the adjective "interesting" by indicating the degree of interest.)

        3. Modifying Other Adverbs - Adverbs can also modify other adverbs to provide more detail about the manner or degree of an action.
        Example: He drove quite slowly. (The adverb "quite" modifies the adverb "slowly" by indicating the degree of slowness.)

        4. Modifying Sentences - Some adverbs can modify entire sentences, often providing context or commentary.
        Example: Fortunately, the weather was perfect for the picnic. (The adverb "fortunately" modifies the entire sentence by providing context.)

        5. Modifying Prepositional Phrases - Adverbs can modify prepositional phrases to provide more detail about the relationship between the elements in the phrase.
        Example: She sat just outside the door. (The adverb "just" modifies the prepositional phrase "outside the door" by indicating the exact position.)
        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Adverb Placement in Sentence",
                "definition" => <<<EOD
        The placement of adverbs in a sentence can vary depending on the type of adverb and the context. Here are some general guidelines:

        1. Before the verb - Example: She always studies before exams.
        2. After the verb - Example: They arrived early.
        3. At the beginning of a sentence - Example: Unfortunately, the meeting was canceled.
        4. At the end of a sentence - Example: She smiled happily.
        5. Before an adjective or another adverb - Example: The movie was very exciting.
           Example: He ran incredibly fast.
        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Common Adverbial Forms",
                "definition" => <<<EOD
        Here are some common adverbial forms and their usage:

        - Not: Used to make verbs negative.
        Example: She does not like chocolate.

        - Well: The adverb form of "good."
        Example: She sings well.

        - Too: Indicates excess or addition.
        Example: It is too hot outside.
        EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Common Mistakes with Adverbs",
                "definition" => <<<EOD
                Confusing adjectives and adverbs:
                Incorrect: She sings good.
                Correct: She sings well.

                Placing adverbs incorrectly:
                Incorrect: He sings always in the shower.
                Correct: He always sings in the shower.
                EOD
            ],
            [
                "topic_id" => 5,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
                Adverbs are essential for providing more detailed information about actions, qualities, and states. They help in creating a more dynamic and expressive sentence structure, adding depth to the description of verbs, adjectives, and even other adverbs.
                EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "Part of Speech: Prepositions",
                "sub_title" => "",
                "definition" => <<<EOD
                A preposition is a word that links a noun, pronoun, or phrase to other words in a sentence. It shows relationships between the elements in a sentence, typically indicating time, place, direction, cause, manner, or instrumentality. Prepositions are essential because they provide additional context that helps to clarify the meaning of the sentence.
                EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Function of Prepositions",
                "definition" => <<<EOD
                Prepositions function to connect the object of the preposition (which is typically a noun or pronoun) to other parts of the sentence. This connection can express various relationships:

                1. Time - When something happens.
                Example: I will meet you at 5 o’clock.

                2. Place - Where something happens.
                Example: The book is on the table.

                3. Direction - Where something is going or coming from.
                Example: She walked towards the door.

                4. Cause - Why something happens.
                Example: He was late because of traffic.

                5. Manner - How something is done.
                Example: She sings with passion.
                EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Prepositions",
                "definition" => <<<EOD
        There are several types of prepositions based on what they indicate or the relationship they show.

        1. Simple Prepositions
        These are one-word prepositions that show basic relationships between the noun or pronoun and the rest of the sentence.
        Examples: in, on, at, by, with, under, over, for, to
        Example sentence: The cat is under the table.

        2. Compound Prepositions
        These are phrases made up of more than one word. They often combine a simple preposition with another word, such as a noun or an adjective.
        Examples: because of, in front of, on top of, out of, in addition to
        Example sentence: The school is in front of the library.

        3. Phrasal Prepositions
        These are expressions consisting of two or more words that act as a single preposition. The words in a phrasal preposition do not retain their original meanings when combined.
        Examples: in spite of, in front of, on behalf of, in terms of
        Example sentence: They finished the work on behalf of their team.

        4. Prepositions of Time
        These prepositions indicate when something happens, or how long it lasts.
        Examples: at, in, on, during, for, since, by, until
        Example sentence: We’ll meet at 3 PM.

        5. Prepositions of Place and Direction
        These prepositions describe where something is or where it’s going.
        Examples: at, in, on, under, over, between, beside, above, across, towards
        Example sentence: The ball is under the couch.

        6. Prepositions of Cause, Reason, or Purpose
        These prepositions explain why something happens or the reason behind something.
        Examples: because of, for, due to, thanks to
        Example sentence: She is staying home because of the rain.

        7. Prepositions of Manner
        These prepositions show how something is done or the way in which something happens.
        Examples: by, with, like, as
        Example sentence: He solved the problem with ease.
        EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Common Mistakes with Prepositions",
                "definition" => <<<EOD
        1. Using incorrect prepositions
        Prepositions often don’t have direct translations between languages, which can lead to mistakes.
        Incorrect: He is good in playing football.
        Correct: He is good at playing football.

        2. Overusing prepositions
        Sometimes people use unnecessary prepositions in sentences, which makes them sound awkward.
        Incorrect: She is waiting for him up.
        Correct: She is waiting for him.

        3. Mixing prepositions in phrasal verbs
        Phrasal verbs often involve prepositions, but the preposition used might change the meaning of the verb.
        Example: I gave up on the idea (to abandon) vs. I gave in to temptation (to yield).
        EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Prepositional Phrases",
                "definition" => <<<EOD
        A prepositional phrase consists of a preposition and its object (a noun or pronoun), along with any modifiers of that object. The entire prepositional phrase functions as a single unit within a sentence.
        Example: The book is on the shelf.
        "on" is the preposition, and "the shelf" is the object of the preposition.

        Prepositional phrases can modify nouns (acting as adjectives) or verbs (acting as adverbs), depending on their role in the sentence.
        As an adjective: The book on the shelf is mine. (modifies "book")
        As an adverb: She ran across the street quickly. (modifies "ran")
        EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Key Points to Remember About Prepositions",
                "definition" => <<<EOD
        • Prepositions help establish the relationship between different parts of a sentence, often indicating time, place, or manner.
        • Prepositions can be simple, compound, or phrasal.
        • Always be careful with preposition choice to avoid mistakes, especially when translating between languages.
        • Prepositions can form prepositional phrases, which function as adjectives or adverbs in sentences.
        EOD
            ],
            [
                "topic_id" => 6,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
        Prepositions are one of the fundamental parts of speech in English. Understanding and using them correctly allows sentences to convey clear, specific relationships between different elements. Whether indicating time, place, direction, or reason, prepositions provide the necessary context that makes communication effective and meaningful.
        EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "Part of Speech: Conjunctions",
                "sub_title" => "",
                "definition" => <<<EOD
                Conjunctions are a part of speech that connects words, phrases, clauses, or sentences. They help to establish relationships between different elements within a sentence. Conjunctions serve as the bridge between words, clauses, or sentences, allowing for the creation of more complex and nuanced ideas in communication.

                Conjunctions can connect:
                - Words: She likes apples and bananas.
                - Phrases: They arrived in the morning but left in the evening.
                - Clauses: I wanted to go, but I had too much work.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Conjunctions",
                "definition" => <<<EOD
                There are three primary types of conjunctions, each serving a different purpose in connecting elements within a sentence:
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 2,
                "title" => "",
                "sub_title" => "Coordinating Conjunctions",
                "definition" => <<<EOD
                Coordinating conjunctions connect two or more equal or similar elements (such as words, phrases, or independent clauses). These conjunctions are typically used when the ideas or elements are of equal importance or status.

                The seven most common coordinating conjunctions are:
                • For: Used to explain reason or purpose.
                • And: Used to connect similar ideas or items.
                • Nor: Used to show a negative relationship between two clauses or elements.
                • But: Used to show contrast.
                • Or: Used to present an alternative or choice.
                • Yet: Used to show contrast or an unexpected result.
                • So: Used to indicate a result or conclusion.

                Example sentences:
                • She is going to the store, and he is staying home.
                • I didn’t study, so I failed the test.
                • He wanted to go, but he couldn’t find his keys.

                Mnemonic for remembering:
                The acronym FANBOYS helps to remember the seven coordinating conjunctions: For, And, Nor, But, Or, Yet, So.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 2,
                "title" => "",
                "sub_title" => "Subordinating Conjunctions",
                "definition" => <<<EOD
                Subordinating conjunctions connect an independent clause (a complete thought) with a dependent clause (a part of a sentence that cannot stand alone). The dependent clause is subordinate to the independent clause, meaning it adds additional information but is not complete on its own.

                Subordinating conjunctions show relationships of time, cause, condition, contrast, and place.

                Common subordinating conjunctions include:
                - Time: after, before, when, until, while
                - Cause or reason: because, since, as, due to, in case
                - Condition: if, unless, provided that, in case
                - Contrast: although, though, whereas, while
                - Place: where, wherever

                Example sentences:
                - I will go to the park after I finish my homework. (Time)
                - Because it rained, the game was canceled. (Cause)
                - If it snows tomorrow, we will build a snowman. (Condition)
                - Although she was tired, she finished her homework. (Contrast)
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 2,
                "title" => "",
                "sub_title" => "Correlative Conjunctions",
                "definition" => <<<EOD
                Correlative conjunctions work in pairs to connect equal elements. These pairs connect similar ideas in a sentence, making the relationship between those elements more direct and balanced.

                Common correlative conjunctions include:
                - both ... and
                - either ... or
                - neither ... nor
                - not only ... but also
                - whether ... or

                Example sentences:
                - Both the teacher and the student were present.
                - You can either go to the party or stay home.
                - He is not only talented but also hardworking.
                - Neither the manager nor the assistant attended the meeting.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 2,
                "title" => "",
                "sub_title" => "Conjunctive Adverbs",
                "definition" => <<<EOD
                While not technically classified as conjunctions, conjunctive adverbs perform a similar role by connecting clauses or sentences. They help to show the relationship between ideas in a more explicit way than conjunctions. These adverbs often express ideas like contrast, cause and effect, or addition.

                Common conjunctive adverbs include: however, therefore, consequently, moreover, nevertheless, thus, otherwise, on the other hand, furthermore, accordingly

                Example sentences:
                - I wanted to go to the movies; however, I had to finish my work.
                - She didn’t study for the test; therefore, she didn’t do well.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "",
                "sub_title" => "Functions of Conjunctions",
                "definition" => <<<EOD
                Conjunctions are essential in constructing clear and fluid sentences. Here are some specific ways conjunctions function within sentences:

                1. To show relationships:
                - Coordinating conjunctions help express addition, contrast, or choice (e.g., and, but, or).
                - Subordinating conjunctions provide causal, conditional, or temporal relationships (e.g., because, if, when).
                - Correlative conjunctions connect paired ideas that are equal in importance (e.g., either ... or, both ... and).

                2. To combine sentences or clauses:
                Conjunctions are used to combine simple sentences into more complex ones, reducing repetition and enhancing the flow of ideas. This allows for the combination of two related thoughts into a single, cohesive sentence.

                Example:
                - Simple sentence: She is talented.
                - Simple sentence: She works hard.
                - Combined sentence: She is talented and she works hard.

                3. To add emphasis or balance:
                Correlative conjunctions help to emphasize the relationship between two ideas that are equally important. They often appear in formal or academic writing to maintain balance and clarity.

                Example:
                - Not only did he finish the project, but also he helped others with their work.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "",
                "sub_title" => "Common Mistakes with Conjunctions",
                "definition" => <<<EOD
                1. Comma splice:
                This occurs when two independent clauses are joined with only a comma, without a conjunction.
                - Incorrect: I wanted to go to the park, I was too tired.
                - Correct: I wanted to go to the park, but I was too tired.

                2. Misplacing subordinating conjunctions:
                Subordinating conjunctions introduce dependent clauses and should not stand alone or be misplaced in sentences.
                - Incorrect: I will go to the store because I finish work.
                - Correct: I will go to the store after I finish work.

                3. Using correlative conjunctions incorrectly:
                Ensure that both elements of the pair are balanced and parallel in structure.
                - Incorrect: He is not only talented, but he is also hardworking.
                - Correct: He is not only talented, but also hardworking.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "",
                "sub_title" => "Key Points to Remember About Conjunctions",
                "definition" => <<<EOD
                - Conjunctions are used to join words, phrases, or clauses.
                - There are three main types: coordinating, subordinating, and correlative conjunctions.
                - Coordinating conjunctions connect equal elements, subordinating conjunctions connect a dependent clause to an independent clause, and correlative conjunctions work in pairs.
                - Conjunctive adverbs also serve to connect ideas, often to show cause and effect, contrast, or sequence.
                - Proper use of conjunctions is vital for creating clear, coherent, and grammatically correct sentences.
                EOD
            ],
            [
                "topic_id" => 7,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
                Conjunctions are indispensable for constructing meaningful and complex sentences in English. Understanding their various types and functions allows for more sophisticated writing and communication. Whether linking ideas, expressing relationships, or balancing sentence structure, conjunctions provide the necessary tools to create fluid, connected expressions.
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "Part of Speech: Interjections",
                "sub_title" => "",
                "definition" => <<<EOD
                An interjection is a part of speech that expresses strong emotions, reactions, or sudden bursts of feeling. Examples of interjections include words like "Wow!", "Ouch!", "Hey!", and "Oh no!". Because they convey an emotion or reaction, they’re common in spoken language and informal writing but can appear in various types of texts to add expression.
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Characteristics of Interjections",
                "definition" => <<<EOD
                1. Emotionally Charged: Interjections are usually emotionally expressive, conveying feelings directly to the listener or reader.
                2. Standalone Nature: Interjections often stand alone or are set apart from the rest of the sentence by a comma or exclamation point.
                3. Not Grammatically Related: They don’t function grammatically within the sentence structure. Instead, they are additional elements that reflect the speaker's tone.
                4. Punctuation: Interjections are often followed by exclamation points or commas, depending on the intensity of the emotion.
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Examples of Interjections",
                "definition" => <<<EOD
                "Wow!" – Surprise, amazement
                "Ouch!" – Pain or discomfort
                "Hey!" – Attention-grabbing, calling out to someone
                "Oh no!" – Dismay, disappointment
                "Hurray!" – Joy, celebration
                "Oops!" – Mistake or minor error
                "Aha!" – Realization or discovery
                "Yikes!" – Shock, fear, or alarm
                "Bravo!" – Approval or praise
                "Alas!" – Sorrow or regret
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Types of Interjections",
                "definition" => <<<EOD
                Interjections can be classified based on the emotions they convey or the situations in which they are used:

                - Expressive Interjections: These show strong emotions, such as excitement, surprise, sadness, or pain.
                Examples: "Wow!", "Ouch!", "Oh!", "Alas!"

                - Volitive Interjections: These express a command or request, often used to call someone’s attention.
                Examples: "Hey!", "Look!", "Listen!"

                - Cognitive Interjections: These indicate thought processes or realizations, often used when a person has a sudden idea or discovery.
                Examples: "Aha!", "Hmm...", "Oh!"

                - Emotive Interjections: Used to convey feelings like pleasure, approval, anger, or other strong emotions.
                Examples: "Hurray!", "Bravo!", "Boo!"

                - Onomatopoeic Interjections: These mimic sounds and are often used to add sensory effects in language.
                Examples: "Bang!", "Wham!", "Whoosh!"
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "How to Use Interjections",
                "definition" => <<<EOD
                Interjections are easy to use because they don't follow complex grammatical rules. However, there are a few guidelines that can make their usage clearer and more effective:

                1. Standalone Usage
                Many interjections stand alone as a single word or a short phrase.
                Example: "Hurray! We won the game!"
                Example: "Oops! I dropped the cup."

                2. Paired with Sentences
                Interjections can also appear at the beginning, middle, or end of sentences, typically separated by commas or exclamation points to mark their distinct emotional tone:
                Example: "Well, I guess it’s time to leave."
                Example: "Oh no, I forgot my keys!"

                3. Capitalization and Punctuation
                In writing, interjections are often capitalized for emphasis and followed by an exclamation mark if they convey a strong emotion:
                Example: "Wow! That’s amazing!"
                Example: "Ouch! That hurts!"
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Functions of Interjections",
                "definition" => <<<EOD
                While interjections are not grammatically tied to the sentence structure, they serve several communicative purposes:

                1. Expressing Immediate Reaction
                Interjections help convey spontaneous emotional reactions to events, often showing the speaker’s true feelings.
                Example: "Yay! I got the job!"

                2. Emphasizing Statements
                By adding interjections, speakers can emphasize the tone or attitude of their statements.
                Example: "Oh, I didn’t realize that!"

                3. Engaging the Listener
                Interjections often make speech or writing more engaging by adding an emotional or human touch, making the communication more relatable.
                Example: "Hey! Wait for me!"

                4. Softening or Intensifying Tone
                Some interjections add a tone of politeness or casualness to the statement, while others intensify the emotional impact.
                Softening: "Well, I think you may be right."
                Intensifying: "Wow! That’s unbelievable!"

                5. Adding Personality to Dialogue
                In stories or personal writing, interjections help give characters or narrators distinct voices and emotional depth.
                Example: "Alas! My hopes are dashed," he sighed.
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Interjections in Formal vs. Informal Language",
                "definition" => <<<EOD
                Interjections are far more common in informal language and conversational settings, where emotional expression is spontaneous and direct. In formal writing, interjections are typically minimized or replaced with descriptive language to convey emotion more subtly. For instance:
                Informal: "Yikes! That’s a lot of work."
                Formal: "I was surprised to see the amount of work required."
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Examples of Interjections in Sentences",
                "definition" => <<<EOD
                To better understand how interjections function, here are examples showing different types and their contextual usage:
                
                - Expressive: "Wow! This is the best cake I’ve ever tasted."
                - Volitive: "Listen! We need to discuss this now."
                - Cognitive: "Hmm... I think there’s another way to solve this problem."
                - Emotive: "Bravo! You did a wonderful job on the presentation."
                - Onomatopoeic: "Wham! The door slammed shut."
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Key Points to Remember about Interjections",
                "definition" => <<<EOD
                Interjections are standalone expressions that convey strong emotions or reactions.
                They are often punctuated with exclamation marks or commas to set them apart from the sentence.
                While commonly used in casual or spoken language, they are less frequent in formal writing.
                Interjections can add clarity, tone, and personality to both speech and writing.
                EOD
            ],
            [
                "topic_id" => 8,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
                Interjections are a unique part of speech that serve as direct expressions of emotion, reactions, or thoughts. They make communication more vibrant and help convey feelings quickly and effectively. Recognizing interjections and understanding their uses can enhance both spoken and written language by adding depth and personality to interactions. Whether expressing excitement, regret, or sudden realizations, interjections bring language to life.
                EOD
            ],
            [
                "topic_id" => 9,
                "level" => 1,
                "title" => "The Four Types of Sentences",
                "sub_title" => "",
                "definition" => <<<EOD
        In English grammar, sentences are classified based on their purpose and structure. Understanding the four types of sentences is crucial for effective communication. Each type of sentence serves a different function, whether it's providing information, asking questions, giving commands, or expressing emotions. The four types of sentences are:
        EOD
            ],
            [
                "topic_id" => 9,
                "level" => 1,
                "title" => "",
                "sub_title" => "Declarative Sentences",
                "definition" => <<<EOD
        A declarative sentence is a statement that provides information or expresses an idea. It ends with a period. This is the most common type of sentence in English and is used to convey facts, opinions, and explanations.

        Purpose: To make a statement.
        Structure: Subject + Verb + Object (if applicable)
        Example: "The sky is blue."
        Example: "I enjoy reading books."

        Important Note: Declarative sentences can be either positive or negative, and they do not require a response. They simply inform the reader or listener about something.
        EOD
            ],
            [
                "topic_id" => 9,
                "level" => 1,
                "title" => "",
                "sub_title" => "Interrogative Sentences",
                "definition" => <<<EOD
        An interrogative sentence is a question that seeks information or clarification. It ends with a question mark (?). The subject and verb may invert in order to form the question.

        Purpose: To ask a question.
        Structure: Wh-word (who, what, where, when, why) or auxiliary verb (do, does, did, is, are) + subject + main verb
        Example: "What time does the train leave?"
        Example: "Are you coming to the party tonight?"

        Important Note: Interrogative sentences are designed to elicit answers or responses. They can be direct or indirect questions, depending on their structure.
        EOD
            ],
            [
                "topic_id" => 9,
                "level" => 1,
                "title" => "",
                "sub_title" => "Imperative Sentences",
                "definition" => <<<EOD
        An imperative sentence is used to give a command, request, or instruction. It can be a polite suggestion or a strong order. It often has an implied subject (usually "you").

        Purpose: To give a command, request, or instruction.
        Structure: Verb (in the base form) + object (if applicable)
        Example: "Close the door."
        Example: "Please pass me the salt."

        Important Note: Imperative sentences can be positive (giving a command) or negative (telling someone not to do something), and they often omit the subject "you," as it is understood.
        Positive Example: "Please sit down."
        Negative Example: "Do not touch that."
        EOD
            ],
            [
                "topic_id" => 9,
                "level" => 1,
                "title" => "",
                "sub_title" => "Exclamatory Sentences",
                "definition" => <<<EOD
        An exclamatory sentence expresses strong emotion, surprise, or excitement. It is characterized by the use of an exclamation mark (!) at the end. Exclamatory sentences convey a sense of urgency, wonder, joy, or frustration.

        Purpose: To express strong feelings or emotions.
        Structure: Interjection + Subject + Verb (or Subject + Verb + Object)
        Example: "Wow! That was an amazing performance!"
        Example: "What a beautiful sunset!"

        Important Note: Exclamatory sentences can also begin with "what" or "how" to emphasize the emotion being expressed. For example:
        "What a fantastic idea!"
        "How wonderful it is to see you!"
        EOD
            ],
            [
                "topic_id" => 10,
                "level" => 1,
                "title" => "Punctuation Marks and Their Rules",
                "sub_title" => "",
                "definition" => <<<EOD
            Punctuation marks are essential tools in writing that help clarify the meaning of sentences, separate ideas, and guide the reader. Each punctuation mark serves a specific purpose, and mastering their usage improves the clarity and flow of writing. This guide covers the rules for the most commonly used punctuation marks: end punctuation (periods, question marks, exclamation points), commas, semicolons, colons, apostrophes, quotation marks, hyphens and dashes, and parentheses and brackets.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "End Punctuation (Periods, Question Marks, Exclamation Points)",
                "definition" => <<<EOD
            End punctuation marks indicate the completion of a sentence. They help convey the tone and type of the sentence.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Periods (.)",
                "definition" => <<<EOD
            A period is used to indicate the end of a declarative sentence, which makes a statement or gives information.
            Example: The sun sets in the west.
            It is also used after abbreviations.
            Example: Dr. Smith will see you now.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Question Marks (?)",
                "definition" => <<<EOD
            A question mark is placed at the end of a direct question. It signals that the sentence is asking something and expects an answer.
            Example: What time does the meeting start?
            It should not be used after indirect questions.
            Example: She asked what time the meeting started.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Exclamation Points (!)",
                "definition" => <<<EOD
            An exclamation point is used at the end of an exclamatory sentence to show strong emotion, excitement, or surprise.
            Example: What a beautiful sunset!
            It is also used after interjections or commands that express urgency.
            Example: Stop!
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Commas (,)",
                "definition" => <<<EOD
            Commas are among the most frequently used punctuation marks. They are used to clarify meaning, separate elements in a sentence, and make writing more readable.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Separating Items in a List",
                "definition" => <<<EOD
            Commas are used to separate words, phrases, or clauses in a series.
            Example: I bought apples, bananas, oranges, and grapes.
            Note: In American English, a comma is used before the conjunction in a list (Oxford comma), while British English may omit it.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Before Conjunctions (FANBOYS)",
                "definition" => <<<EOD
            When two independent clauses (complete sentences) are joined by a coordinating conjunction (For, And, Nor, But, Or, Yet, So), use a comma before the conjunction.
            Example: She wanted to go for a walk, but it started raining.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "After Introductory Words or Phrases",
                "definition" => <<<EOD
            Commas are used after introductory words or phrases that begin a sentence.
            Example: After the meeting, we went for lunch.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "To Set Off Non-Essential Information",
                "definition" => <<<EOD
            Commas are used to separate non-essential (non-restrictive) clauses or phrases that add extra information but are not necessary to the meaning of the sentence.
            Example: My brother, who lives in New York, is visiting next week.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "With Coordinate Adjectives",
                "definition" => <<<EOD
            When two or more adjectives equally modify a noun, use commas to separate them.
            Example: It was a long, exhausting day.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Semicolons (;)",
                "definition" => <<<EOD
            A semicolon is used to link closely related independent clauses or separate items in a list when the items themselves contain commas.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Linking Independent Clauses",
                "definition" => <<<EOD
            Use a semicolon to connect two closely related independent clauses without a conjunction.
            Example: I have a lot of work to do; I will finish it by tonight.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Separating Items in a Complex List",
                "definition" => <<<EOD
            Use a semicolon to separate items in a list when the items are long or contain commas.
            Example: On the trip, we visited New York, USA; Paris, France; and Tokyo, Japan.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Colons (:)",
                "definition" => <<<EOD
            A colon is used to introduce a list, a quote, an explanation, or a clarification following an independent clause.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Introducing a List",
                "definition" => <<<EOD
            A colon is used after a complete sentence to introduce a list of items.
            Example: I need to buy the following items: eggs, milk, and bread.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Introducing a Quote or Explanation",
                "definition" => <<<EOD
            A colon can introduce a quote, an explanation, or an elaboration of what was mentioned earlier in the sentence.
            Example: She had one goal: to become a published author.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Clarifying or Emphasizing",
                "definition" => <<<EOD
            Use a colon to introduce further explanation or clarification.
            Example: There is one thing I can’t stand: dishonesty.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Apostrophes (')",
                "definition" => <<<EOD
            Apostrophes are used to show possession, form contractions, and indicate the plural of letters and numbers in some cases.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Possession",
                "definition" => <<<EOD
            Use an apostrophe to show ownership or possession.
            For singular nouns, add an apostrophe and "s."
            Example: The dog's leash was on the porch.
            For plural nouns that end in "s," add only an apostrophe.
            Example: The teachers' lounge is on the second floor.
            For irregular plural nouns that do not end in "s," add an apostrophe and "s."
            Example: The children's toys were scattered across the floor.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Contractions",
                "definition" => <<<EOD
            Apostrophes are used to show the omission of letters or numbers in contractions.
            Example: It's raining outside. (It is)
            Example: I can't believe it. (Cannot)
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Quotation Marks (\" \")",
                "definition" => <<<EOD
            Quotation marks are used to enclose direct speech, quotations, and sometimes titles of short works.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Direct Speech or Dialogue",
                "definition" => <<<EOD
            Use quotation marks to enclose what someone says.
            Example: She said, "I will call you when I arrive."
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Quoting Text",
                "definition" => <<<EOD
            Use quotation marks to indicate that you are quoting someone else's words.
            Example: The professor stated, "The test will cover all chapters."
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Titles of Short Works",
                "definition" => <<<EOD
            Use quotation marks for the titles of short stories, articles, poems, songs, and other short works.
            Example: I love reading "The Raven" by Edgar Allan Poe.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Hyphens (-) and Dashes (– or —)",
                "definition" => ""
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Hyphens (-)",
                "definition" => <<<EOD
            A hyphen is used to join words or parts of words together, such as in compound adjectives or compound nouns.
            Example: He is a well-known author.
            Hyphens are also used in compound numbers and fractions.
            Example: I have a twenty-five-dollar bill.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "En Dash (–)",
                "definition" => <<<EOD
            The en dash is used to indicate a range or span, such as in dates, times, or page numbers.
            Example: The meeting is from 2:00–3:30 p.m.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Em Dash (—)",
                "definition" => <<<EOD
            The em dash is used for emphasis, to indicate an abrupt break in thought, or to introduce an explanation or list.
            Example: I can’t believe it—she won the competition!
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Parentheses (()) and Brackets ([])",
                "definition" => ""
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Parentheses (())",
                "definition" => <<<EOD
            Parentheses are used to add supplementary information or clarifications that are not crucial to the main point of the sentence.
            Example: The seminar (which was scheduled for 9 a.m.) was postponed.
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 3,
                "title" => "",
                "sub_title" => "Brackets ([])",
                "definition" => <<<EOD
            Brackets are used within quoted material to insert additional words or explanations for clarity.
            Example: The manager said, "The employees [in the marketing department] are responsible for the campaign."
            EOD
            ],
            [
                "topic_id" => 10,
                "level" => 2,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
            Punctuation marks are fundamental in ensuring that writing is clear and readable. Mastering the use of end punctuation (periods, question marks, and exclamation points), commas, semicolons, colons, apostrophes, quotation marks, hyphens and dashes, and parentheses and brackets is key to effective communication. By following these rules, you can avoid confusion and improve the flow and meaning of your writing.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "Capitalization Rules",
                "sub_title" => "",
                "definition" => <<<EOD
            Capitalization refers to the use of uppercase letters at the beginning of certain words or sentences. It follows specific rules in English grammar, and proper usage ensures clarity and correctness in writing. Below are the key rules for capitalization:
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "The First Word of a Sentence",
                "definition" => <<<EOD
            The first word of a sentence should always begin with a capital letter.
            Example: She went to the store.
            Explanation: Every sentence starts with a capital letter, regardless of what word is used.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Proper Nouns",
                "definition" => <<<EOD
            Proper nouns refer to specific people, places, organizations, and sometimes things. These should always be capitalized.
            Names of People: John Smith, Emily, Dr. Anderson.
            Geographical Locations: Paris, Mount Everest, Africa.
            Organizations and Institutions: Harvard University, United Nations, NASA.
            Names of Specific Things: The Eiffel Tower, The Great Wall of China.
            Example: Barack Obama was the 44th president of the United States.
            Explanation: Proper nouns represent specific entities and require capitalization.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Days, Months, and Holidays",
                "definition" => <<<EOD
            The names of days, months, and holidays are capitalized, as they refer to specific times.
            Days of the Week: Monday, Tuesday, Friday.
            Months: January, February, August.
            Holidays: Christmas, New Year’s Day, Thanksgiving.
            Example: Halloween falls on October 31.
            Explanation: These are specific days and events, and their names are capitalized.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Titles of Books, Movies, and Other Works",
                "definition" => <<<EOD
            The main words in titles of books, movies, songs, works of art, and other creative works are capitalized. This includes the first and last words, and all major words in between.
            Books: The Great Gatsby, Pride and Prejudice.
            Movies: Inception, The Matrix.
            Songs: Let It Be, Bohemian Rhapsody.
            Artworks: Mona Lisa, The Starry Night.
            Example: I love the movie The Lion King.
            Explanation: Major words in titles are capitalized, while shorter words like "and", "in", "of", and "the" are not capitalized unless they are the first or last word of the title.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "The Pronoun 'I'",
                "definition" => <<<EOD
            The pronoun "I" is always capitalized, regardless of where it appears in the sentence.
            Example: I am going to the park later today.
            Explanation: "I" is always capitalized because it refers to oneself, which is a unique and important pronoun.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "The First Word of Direct Quotes",
                "definition" => <<<EOD
            When quoting someone directly, the first word of the quoted speech is capitalized, even if it comes in the middle of a sentence.
            Example: He said, "Please come to the meeting on time."
            Explanation: Even when the quote is embedded in a larger sentence, the first word of the quote is capitalized.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Countries, Nationalities, and Languages",
                "definition" => <<<EOD
            The names of countries, nationalities, and languages are capitalized because they refer to specific entities.
            Countries: Canada, Brazil, France.
            Nationalities: American, French, Chinese.
            Languages: English, Spanish, Mandarin.
            Example: Brazil is famous for its carnivals, and people there speak Portuguese.
            Explanation: These words refer to specific places, people, or languages and are capitalized.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Titles of People",
                "definition" => <<<EOD
            Titles of people, such as Mr., Mrs., Dr., Professor, etc., are capitalized when they are used before a name. However, they are not capitalized when they are used in a general sense or after the name.
            Example: Dr. Smith is the lead researcher.
            Explanation: Titles before names are capitalized.
            Example: I met the doctor yesterday.
            Explanation: The word "doctor" here is used as a common noun, so it is not capitalized.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "The First Word in a Salutation or Closing of a Letter",
                "definition" => <<<EOD
            In letters or emails, the first word in the greeting or closing is capitalized.
            Example: Dear Sir, Sincerely,
            Best regards,
            Explanation: When addressing someone or closing a letter, the first word is capitalized.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Major Words in Headings",
                "definition" => <<<EOD
            In headings or titles, major words (nouns, verbs, adjectives, adverbs) are capitalized. Minor words (articles, conjunctions, prepositions) are typically not capitalized unless they are the first or last word of the title.
            Example: The History of Modern Art
            Explanation: Nouns and verbs are capitalized, while prepositions (of) are not.
            EOD
            ],
            [
                "topic_id" => 11,
                "level" => 1,
                "title" => "",
                "sub_title" => "Historical Events and Periods",
                "definition" => <<<EOD
            The names of historical events and time periods are capitalized because they represent specific moments in history.
            Events: World War II, The Renaissance, The Great Depression.
            Time Periods: The Victorian Era, The Middle Ages.
            Example: The Civil War greatly impacted the development of the United States.
            Explanation: These are specific events or periods, so they are capitalized.
            EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "The Subject-Verb Agreement",
                "sub_title" => "",
                "definition" => <<<EOD
                Subject-verb agreement is an essential part of English grammar, ensuring that subjects and verbs in a sentence match in number and person. Here’s a breakdown to help explain this concept:
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Basic Rule of Subject-Verb Agreement",
                "definition" => <<<EOD
                The basic rule is that singular subjects take singular verbs, while plural subjects take plural verbs. Example:
                Singular: "The cat runs fast."
                Plural: "The cats run fast."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Matching the Subject and Verb",
                "definition" => <<<EOD
                Subjects and verbs must agree in number (singular or plural) and person (first, second, or third). Examples:
                First person singular: "I am happy."
                Third person singular: "He is happy."
                Plural: "They are happy."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Singular vs. Plural Nouns",
                "definition" => <<<EOD
                Singular nouns usually do not end in "-s" (e.g., "dog," "teacher").
                Plural nouns usually end in "-s" (e.g., "dogs," "teachers").
                In general, adding "-s" to a verb makes it singular, while verbs without "-s" are usually plural in form.
                Examples: 
                Singular subject: "She eats."
                Plural subject: "They eat."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Special Cases",
                "definition" => <<<EOD
                Some subjects can be tricky because they don’t look obviously singular or plural. Here are some tips:
                Collective nouns (e.g., "team," "group") are usually singular because they refer to a unit.
                "The team is winning."
                Indefinite pronouns (e.g., "everyone," "each," "someone") are treated as singular.
                "Everyone is here."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Compound Subjects",
                "definition" => <<<EOD
                When two subjects are connected by "and," they are usually plural and take a plural verb. Example:
                "The dog and the cat are playing."
                However, if the subjects are seen as a single unit or refer to the same person, they take a singular verb. Example:
                "Mac and cheese is my favorite dish."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Phrases Between Subject and Verb",
                "definition" => <<<EOD
                When phrases or clauses come between the subject and verb, they can be distracting. Always focus on the main subject to determine agreement.
                Example: "The basket of fruits is on the table."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Either/Or and Neither/Nor",
                "definition" => <<<EOD
                With "either/or" and "neither/nor" constructions, the verb agrees with the subject closest to it. Example:
                "Either the cat or the dogs are outside."
                "Neither the dogs nor the cat is outside."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Practice Makes Perfect",
                "definition" => <<<EOD
                Understanding these rules helps you identify correct subject-verb agreement in sentences. Practicing with various examples and looking out for exceptions will help solidify your understanding.
                1. "The book or the pen is on the table."
                2. "The students have completed their homework."
                3. "Each of the players has a jersey."
                EOD
            ],
            [
                "topic_id" => 12,
                "level" => 1,
                "title" => "",
                "sub_title" => "Conclusion",
                "definition" => <<<EOD
                Subject-verb agreement ensures sentences sound correct and make sense by matching the verb form to the subject. Remembering the basic rules and watching out for special cases and tricky subjects can help in achieving grammatical accuracy.
                EOD
            ],
            [
                "topic_id" => 13,
                "level" => 2,
                "title" => " The Subject-Verb Agreement: Problem with locating the Subject ",
                "sub_title" => "",
                "definition" => <<<EOD
               Subject-verb agreement can be challenging when the subject is hard to locate. Sometimes, intervening phrases, clauses, or other
               elements can obscure the main subject. Here are some common pitfalls and tips for locating the subject to ensure correct agreement.
               1. Intervening Prepositional Phrases
               - A prepositional phrase comes between the subject and verb and often includes words like of, in, with, along with, as
               well as. These do not affect subject-verb agreement.
               • The pack of wolves is on the move. (The subject is "pack," not "wolves.")
               • The box of chocolates was a nice gift. (The subject is "box," not "chocolates.")
               2. Parenthetical Expressions or Modifiers
               - Parenthetical phrases (e.g., along with, as well as, in addition to) that come after the subject do not change the
               subject’s number.
               • The captain, as well as the crew, is ready. (The subject is "captain.")
               • My friend, along with her siblings, comes to the party. (The subject is "friend.")
               3. Relative Clauses or Phrases
               - Sometimes, a clause or phrase that describes the subject appears between the subject and verb, making it harder to
               identify the main subject.
               • The car that belongs to my parents is in the garage. (The subject is "car.")
               • The book with all the illustrations was fascinating. (The subject is "book.")
               4. Subjects that Follow the Verb (Inverted Sentences)
               - In questions and sentences beginning with here or there, the subject follows the verb. Identify the subject after the verb
               to determine the correct agreement.
               • Here are the keys you lost. (The subject is "keys.")
               • There is a solution to every problem. (The subject is "solution.")
               5. Compound Subjects Joined by "Or" or "Nor"
               - When subjects are connected by or or nor, the verb agrees with the nearest subject (also called the closest noun).
               • Either the manager or the employees are responsible. (The closest subject, "employees," is plural.)
               • Neither the teachers nor the principal is attending the meeting. (The closest subject, "principal," is singular.)
               6. Collective Nouns Acting as a Unit or Individuals
               - Collective nouns like team, group, family can be singular or plural, depending on whether they act as a unit or
               individuals. Look closely at the intended meaning to identify the correct verb form.
               • The team is winning the game. (Unit – acting as one entity.)
               • The team are wearing their new uniforms. (Individuals – acting separately.)
               7. Subjects with Phrases Like "One of…" or "Each of…"
               - When phrases begin with one of, each of, every one of, they usually take a singular verb because they refer to individual
               members of a group.
               • One of the students is absent. (The subject is "one.")
               • Each of the cakes has unique decorations. (The subject is "each.")
               8. Nouns of Quantity or Amounts
               - With phrases indicating quantity, the subject may appear obscured by additional details. Look at the main quantity word
               and decide if it’s singular or plural.
               • Three cups of milk is enough for the recipe. (The subject "cups of milk" acts as a single quantity.)
               • Half of the cookies are gone. (The subject "cookies" is plural.)
               9. Subjects with Gerunds or Infinitives
               - Gerunds (verbs ending in -ing) or infinitive phrases (to + verb) used as subjects are singular.
               • Swimming is good exercise. (The subject is "swimming.")
               • To walk in nature brings peace. (The subject is "to walk in nature.")
               10. Tricky Indefinite Pronouns
               - Some indefinite pronouns (e.g., some, any, none, all) can be singular or plural depending on the noun they refer to.
               Identifying the noun that follows helps clarify agreement.
               • All of the cake is eaten. (The subject is "cake" – singular.)
               • All of the cakes are eaten. (The subject is "cakes" – plural.)
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "Sentence Structure: Sentences and Predicates",
                "sub_title" => "",
                "definition" => <<<EOD
               Understanding sentence structure, specifically sentences and predicates, is essential for clear communication. Here’s a breakdown of
               these components with examples.
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "What is a Sentence? ",
                "definition" => <<<EOD
               A sentence is a group of words that expresses a complete thought. Every sentence must have a subject (who or what the sentence is
               about) and a predicate (what the subject does or is).
               Example Sentences:
               • The cat sleeps on the mat.
               Subject: "The cat"
               Predicate: "sleeps on the mat"
               • She runs every morning.
               Subject: "She"
               Predicate: "runs every morning"
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "The Subject in a sentence",
                "definition" => <<<EOD
               The subject is the part of the sentence that tells us who or what the sentence is about. It can be a noun or a pronoun.
               Types of Subjects:
               • Simple Subject: The main noun or pronoun.
               Birds chirp loudly.
               Simple Subject: "Birds"
               • Complete Subject: The simple subject along with any modifiers.
               The bright red ffowers bloom in spring.
               Complete Subject: "The bright red flowers"
               • Compound Subject: Two or more subjects joined by "and" or "or."
               Jane and Mike are siblings.
               Compound Subject: "Jane and Mike"
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "The Predicate in a Sentence",
                "definition" => <<<EOD
               The predicate of a sentence tells what the subject does or is. It includes the verb and all words that modify or complete its meaning.
               Types of Predicates:
               • Simple Predicate: The main verb or verb phrase.
               The dog barks.
               Simple Predicate: "barks"
               • Complete Predicate: The simple predicate along with all modifiers, objects, and complements.
               The dog barks loudly at night.
               Complete Predicate: "barks loudly at night"
               • Compound Predicate: Two or more verbs or verb phrases joined by "and" or "or."
               She sings and dances beautifully.
               Compound Predicate: "sings and dances beautifully"
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "Linking Verbs and Predicate Complements",
                "definition" => <<<EOD
               Sometimes the predicate doesn't show action but rather links the subject to additional information. This happens with linking verbs (like is,
               am, are, was, were), which connect the subject to a predicate complement (a word that renames or describes the subject).
               Examples:
               • The sky is blue.
               Subject: "The sky"
               Predicate: "is blue" (where "blue" is the predicate adjective describing the subject)
               • She became a teacher.
               Subject: "She"
               Predicate: "became a teacher" (where "a teacher" is the predicate nominative renaming the subject)
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "Sentence Types Based on Structure",
                "definition" => <<<EOD
               Sentences can vary in structure based on the number and type of clauses they contain.
               Here are four common types:
               • Simple Sentence: Contains one independent clause.
               The dog barked.
               The sun is shining.
               • Compound Sentence: Contains two or more independent clauses joined by a coordinating conjunction (e.g., and, but, or).
               The sun was shining, and the birds were singing.
               • Complex Sentence: Contains one independent clause and one or more dependent clauses.
               When the sun sets, the sky turns orange.
               • Compound-Complex Sentence: Contains two or more independent clauses and one or more dependent clauses.
               The dog barked, and the cat ran away when the door opened.
               EOD
            ],
            [
                "topic_id" => 14,
                "level" => 2,
                "title" => "",
                "sub_title" => "Examples Combining Subjects and Predicates:",
                "definition" => <<<EOD
               1. Simple Subject and Predicate
               Dogs run.
               Subject: "Dogs"
               Predicate: "run"
               2. Complete Subject and Predicate
               The excited puppies played in the yard.
               Complete Subject: "The excited puppies"
               Complete Predicate: "played in the yard"
               3. Compound Subject and Predicate
               The teacher and her students read and discuss books daily.
               Compound Subject: "The teacher and her students"
               Compound Predicate: "read and discuss books daily"
               4. Subject with Predicate Nominative
               My father is a doctor.
               Subject: "My father"
               Predicate: "is a doctor" (where "a doctor" renames the subject)
               5. Subject with Predicate Adjective
               The flowers smell fresh.
               Subject: "The flowers"
               Predicate: "smell fresh" (where "fresh" describes the subject)
               Conclusion
               Understanding subjects and predicates helps you break down sentences into clear, manageable parts. Identifying whether a sentence has a
               simple, compound, or complex structure can also make sentence creation and comprehension easier.
            EOD
            ],
            [
                "topic_id" => 15,
                "level" => 2,
                "title" => "Clauses and Phrases: Understanding Clauses",
                "sub_title" => "",
                "definition" => <<<EOD
            A clause is a group of words that contains both a subject and a predicate (verb). Clauses are essential building blocks of sentences. They
            can be independent or dependent, and they can be categorized into different types based on their function within a sentence.
            Understanding the various types of clauses and their role in a sentence is crucial for building grammatically correct and well-structured
            sentences.
            EOD
            ],
            [
                "topic_id" => 15,
                "level" => 2,
                "title" => "",
                "sub_title" => "Types of Clauses",
                "definition" => <<<EOD
            1. Independent Clause (Main Clause):
            An independent clause is a group of words that expresses a complete thought and can stand alone as a complete sentence.
            It has both a subject and a verb and does not rely on any other clause to convey its meaning.
            Example: She went to the market.
            Here, "She" is the subject, and "went to the market" is the predicate. This clause expresses a complete thought and can
            function as a stand-alone sentence.
            2. Dependent Clause (Subordinate Clause):
            A dependent clause also contains a subject and a verb but does not express a complete thought. It relies on an independent clause
            to give it meaning. Dependent clauses often start with subordinating conjunctions like because, although, if, or when, or relative
            pronouns like who, which, or that.
            Example: Because she was tired.
            This clause has a subject ("she") and a verb ("was tired") but does not express a complete idea. It leaves the reader wondering
            what happened because she was tired. It needs an independent clause to complete the thought.
            EOD
            ],
            [
                "topic_id" => 15,
                "level" => 2,
                "title" => "",
                "sub_title" => "Types of Dependent Clauses",
                "definition" => <<<EOD
            1. Adjective Clause (Relative Clause):
            An adjective clause, also known as a relative clause, modifies a noun or pronoun in the sentence. It functions as an adjective,
            providing additional information about a noun or pronoun. Adjective clauses are usually introduced by relative pronouns like who,
            whom, whose, which, or that.
            Example: The book that I borrowed is fascinating.
            "That I borrowed" is the adjective clause modifying the noun "book." The clause tells us more about which book is being referred to.
            2. Noun Clause:
            A noun clause functions as a noun within a sentence. It can act as a subject, object, or complement. Noun clauses are often
            introduced by words like what, how, who, whether, that, and why.
            Example: What she said surprised me.
            "What she said" is the noun clause acting as the subject of the sentence. It functions as a noun and tells us what surprised the
            speaker.
            3. Adverbial Clause:
            An adverbial clause modifies a verb, adjective, or another adverb in the sentence. It provides information about how, when, where,
            or why something happened.
            Example: I will call you when I arrive.
            "When I arrive" is the adverbial clause modifying the verb "call." It tells us when the action of calling will occur.
            EOD
            ],
            [
                "topic_id" => 15,
                "level" => 2,
                "title" => "",
                "sub_title" => "Examples of Clauses in Sentences",
                "definition" => <<<EOD
            • Independent Clause:
            "He loves pizza."
            "He" is the subject, "loves" is the verb, and "pizza" is the object. This independent clause expresses a
            complete thought.
            • Dependent Clause:
            "Although she was late..."
            This dependent clause doesn't express a complete thought. We don’t know what happened because she
            was late. It needs an independent clause to complete the sentence.
            • Adjective Clause:
            "The car that I bought is new."
            "That I bought" is the adjective clause modifying the noun "car."
            • Noun Clause:
            "I don’t know what he wants."
            "What he wants" is the noun clause acting as the object of the verb "know."
            • Adverbial Clause:
            "She smiled because she was happy."
            "Because she was happy" is the adverbial clause modifying the verb "smiled," explaining why she smiled.
            EOD
            ],
            [
                "topic_id" => 16,
                "level" => 2,
                "title" => "Clauses and Phrases: Understanding Phrases",
                "sub_title" => "",
                "definition" => <<<EOD
            In grammar, a phrase is a group of related words that does not contain both a subject and a predicate (verb). While clauses are larger units of
            meaning that often contain a subject and a verb, phrases are smaller building blocks that contribute to the overall meaning of a sentence.
            Phrases can function as nouns, verbs,
            Understanding the different types of phrases, such as prepositional phrases, gerund phrases, participial phrases, and infinitive phrases,
            helps you to form more complex sentences and communicate your ideas more clearly.
            EOD
            ],
            [
                "topic_id" => 16,
                "level" => 2,
                "title" => "",
                "sub_title" => "Types of Phrases",
                "definition" => <<<EOD
            1. Prepositional Phrases:
            A prepositional phrase consists of a preposition and its object (a noun or pronoun) along with any modifiers of that object.
            Prepositional phrases typically function as adjectives or adverbs in a sentence, providing more information about a noun or verb.
            Example: The book on the shelf is mine.
            "On the shelf" is a prepositional phrase, with "on" as the preposition and "shelf" as its object. This phrase tells us more about the
            location of the book.
            Prepositional Phrase Functions:
            As an adjective: The house with the blue door is new. (Describes "house")
            As an adverb: He ran across the street. (Describes "ran")
            2. Gerund Phrases:
            A gerund phrase consists of a gerund (a verb ending in -ing) and any objects or modifiers associated with it. The gerund phrase
            functions as a noun.
            Example: Swimming in the ocean is my favorite activity.
            "Swimming in the ocean" is a gerund phrase. "Swimming" is the gerund, and "in the ocean" is a prepositional phrase modifying the
            gerund.
            Gerund Phrase Functions:
            As the subject: Reading books is fun.
            As the object: I enjoy reading books.
            3. Participial Phrases:
            A participial phrase consists of a participle (a verb ending in -ed or -ing) along with any modifiers or objects that accompany it.
            Participial phrases act as adjectives, modifying a noun or pronoun.
            Example: The car parked in front of my house is new.
            "Parked in front of my house" is a participial phrase modifying "car." The participle "parked" tells us what the car is doing.
            Participial Phrase Functions:
            As an adjective: The running water is cold. (Modifies "water")
            It can be placed before or after the noun it modifies: The dog barking loudly is mine.
            4. Infinitive Phrases:
            An infinitive phrase consists of an infinitive verb (to + base form of the verb) and its object or modifiers. Infinitive phrases can
            function as nouns, adjectives, or adverbs.
            Example: I have a plan to visit Europe next summer.
            "To visit Europe next summer" is an infinitive phrase. "To visit" is the infinitive, and "Europe next summer" is the object and modifier
            of the verb.
            Infinitive Phrase Functions:
            As a noun: To read books is important.
            As an adjective: He has a book to read.
            As an adverb: She paused to catch her breath.
            EOD
            ],
            [
                "topic_id" => 16,
                "level" => 2,
                "title" => "",
                "sub_title" => "Examples of Phrases in Sentences",
                "definition" => <<<EOD
            1. Prepositional Phrase:
            The cookies in the jar are fresh.
            "In the jar" modifies "cookies," telling us where the cookies are.
            2. Gerund Phrase:
            Eating healthy food is essential for good health.
            "Eating healthy food" acts as the subject of the sentence.
            3. Participial Phrase:
            The man running down the street is my neighbor.
            "Running down the street" modifies "man," telling us what the man is doing.
            4. Infinitive Phrase:
            I have decided to take a break.
            "To take a break" functions as the object of the verb "decided."
            EOD
            ],
            [
                "topic_id" => 17,
                "level" => 3,
                "title" => "",
                "sub_title" => "Components of a Complex Sentence",
                "definition" => <<<EOD
            1. Independent Clause - A complete sentence that can stand alone, expressing a full thought.
             Example: "I finished my homework."
            2. Dependent Clause - An incomplete thought that cannot stand alone and relies on the independent clause for context. Dependent
            clauses often begin with subordinating conjunctions (e.g., "because," "although," "since") or relative pronouns (e.g., "who," "which,"
            "that").
            Example: "because I wanted to relax."
            When combined, these clauses create a complex sentence:
             Example: "I finished my homework because I wanted to relax."
            EOD
            ],
            [
                "topic_id" => 17,
                "level" => 3,
                "title" => "",
                "sub_title" => "Key Characteristics of Complex Sentences",
                "definition" => <<<EOD
             Subordinating Conjunctions or Relative Pronouns are used to introduce the dependent clause and show the relationship between the
            two ideas.
             Hierarchy of Ideas: Complex sentences allow writers to emphasize one idea over another, showing cause and effect, contrast, or
            additional information.
            Examples of Complex Sentences:
            "Although it was raining, we decided to go for a walk."
            "She didn’t go to the party because she was feeling unwell."
            "The book, which I borrowed from the library, was fascinating."
            EOD
            ],
            [
                "topic_id" => 18,
                "level" => 3,
                "title" => "Verb Tenses in Complex Sentences",
                "sub_title" => "",
                "definition" => <<<EOD
             Verb tense is essential in complex sentences because it helps to clarify the time relationships between the independent clause and
            dependent clause(s). In a complex sentence, verb tenses can create various time-based relationships, such as showing which action
            happened first, if actions are ongoing, or if actions are conditional. This is particularly important in complex sentences because one part of
            the sentence often provides additional information, background, or conditions for the other part.
            EOD
            ],
            [
                "topic_id" => 18,
                "level" => 3,
                "title" => "",
                "sub_title" => "Common Tense Combinations in Complex Sentences",
                "definition" => <<<EOD
            1. Present Tense + Present Tense
            - This combination is used when both actions occur at the same time.
            a. Example: "When he studies, he learns quickly."
            b. Explanation: Both actions are happening simultaneously in the present.
            2. Past Tense + Past Tense
            - Use past tense in both clauses if the actions happened at the same time in the past.
            a. Example: "When she arrived, the meeting started."
            b. Explanation: Both actions took place in the past at around the same time.
            3. Present Tense + Future Tense - This combination is often used when the action in the independent clause is in the present, and the
            dependent clause refers to a future outcome or condition.
            a. Example: "If he studies hard, he will pass the test."
            b. Explanation: The action of studying is happening now, but the result (passing) will happen in the future.
            4. Past Tense + Past Perfect Tense
            - Use this combination when one action in the past occurred before another action in the past.
            a. Example: "She went to bed after she had finished her homework."
            b. Explanation: The dependent clause shows an action that was completed before the main past action in the independent
            clause.
            5. Present Perfect Tense + Present Tense
            - This combination shows that an action started in the past and is relevant to the present moment.
            a. Example: "Since he has lived here, he enjoys the weather."
            b. Explanation: The present perfect in the dependent clause indicates an ongoing or completed past action that affects the present.
            EOD
            ],
            [
                "topic_id" => 18,
                "level" => 3,
                "title" => "",
                "sub_title" => "Understanding Time Relationships in Complex Sentences",
                "definition" => <<<EOD
            The use of different verb tenses in complex sentences helps to express various time relationships:
            1. Simultaneous Actions
            - Both clauses use the same tense when two actions happen at the same time.
            Example: "While she works, she listens to music."
            2. Sequential Actions
            - Different tenses can show that one action happens before another.
            Example: "After he had eaten, he went for a walk."
            3. Conditional and Hypothetical Relationships
            - Verb tenses show conditions or hypothetical scenarios in complex sentences.
            Example: "If she had studied, she would have passed the exam."
            4. Cause and Effect Relationships
            - Verb tenses establish a cause in one clause and its effect in another.
            Example: "Because it was raining, the match was canceled."
            EOD
            ],
            [
                "topic_id" => 19,
                "level" => 3,
                "title" => "Future Continuous Tense in Complex Sentences",
                "sub_title" => "",
                "definition" => <<<EOD
            The Future Continuous Tense describes an ongoing action or event that will be happening at a specific point in the future. It is formed
            using the modal verb "will" + "be" + the verb in its -ing form. In complex sentences, this tense can be used in both the independent and
            dependent clauses to express an action that will be ongoing at a certain future time.
            Structure of Future Continuous Tense:
             Positive: Subject + will + be + verb-ing
             Negative: Subject + will not (won’t) + be + verb-ing
            Interrogative: Will + subject + be + verb-ing?
            Examples:
             She will be studying at 8 o'clock tomorrow.
             They won’t be working on the project next week.
             Will you be attending the meeting tomorrow?
            EOD
            ],
            [
                "topic_id" => 19,
                "level" => 3,
                "title" => "",
                "sub_title" => "Using Future Continuous in Complex Sentences:",
                "definition" => <<<EOD
            In complex sentences, the Future Continuous Tense is used to show that an action will be ongoing at a specific time in the future. The
            dependent clause may contain a condition or time reference while the independent clause describes the action that will be in
            progress.
            Example 1:
             "By the time you arrive, I will be waiting at the station."
             In this sentence, the action of waiting will be ongoing at a specific point in the future, i.e., when the person arrives.
            Example 2:
             "When they arrive, we will be celebrating our anniversary."
             Here, the celebration will be happening continuously when the action of arrival takes place.
            Example 3:
             "I won’t be working tomorrow because I have a day off."
             The ongoing action of not working is happening on a specific future day.
            EOD
            ],
            [
                "topic_id" => 19,
                "level" => 3,
                "title" => "",
                "sub_title" => "Using Future Continuous Tense with Subordinating Conjunctions:",
                "definition" => <<<EOD
            In complex sentences, subordinating conjunctions like when, while, before, and after are used to show the relationship between the
            independent and dependent clauses. The dependent clause often indicates the time or condition for the action in the future
            continuous tense.
            Example:
             "We will be traveling to Paris when you return."
             The traveling action is ongoing at the specific future moment when the person returns.
            EOD
            ],
            [
                "topic_id" => 20,
                "level" => 3,
                "title" => "Irregular Verbs and Tense Usage",
                "sub_title" => "",
                "definition" => <<<EOD
            Irregular verbs are verbs that do not follow the standard pattern of adding "-ed" to form the past tense and past participle. Unlike
            regular verbs, irregular verbs have unique forms for the past tense and past participle that must be memorized. These verbs can
            appear in different tenses, and each tense has its specific form.
            Common Examples of Irregular Verbs:
             Go – went – gone
             Come – came – come
             Take – took – taken
             Eat – ate – eaten
             See – saw – seen
             Have – had – had
             Begin – began – begun
             Run – ran – run
             Write – wrote – written
             Speak – spoke – spoken
            Tense Usage with Irregular Verbs: Irregular verbs are used in the past, present, and future tenses, but their forms change depending on
            the tense.
            • Present Tense:
            In the present tense, irregular verbs are used in their base form for the singular subject (I, you, we, they) and with an "-s"
            or "-es" for third-person singular subjects (he, she, it).
            I go to the market.
            She eats breakfast at 7 a.m.
            • Past Tense:
            In the past tense, irregular verbs do not follow the regular rule of adding "-ed." Each verb has its own specific past form.
            He went to the park yesterday.
            They ate dinner late last night.
            • Present Perfect Tense:
            The present perfect tense uses the past participle form of the verb with the auxiliary verb "have" or "has" to describe
            actions that occurred at an unspecified time before now.
            She has written a letter.
            They have gone to the store.
            • Past Perfect Tense:
            In the past perfect tense, the past participle form of the verb is used with "had" to describe an action completed before
            another action in the past.
            I had finished my homework before I went to bed.
            They had spoken to the manager before the meeting started.
            • Future Tense:
            In the future tense, irregular verbs use the base form of the verb, preceded by "will" to indicate an action that will take
            place.
            I will go to the party tomorrow.
            She will take the test next week.
            Examples of Irregular Verbs in Complex Sentences:
            Irregular verbs can appear in both the independent and dependent clauses in complex sentences, and they often reflect different
            tenses based on the time references provided by subordinating conjunctions.
            Example 1:
             "By the time you arrive, I will have finished my work."
             The verb "finish" is used in the future perfect tense.
            Example 2:
             "She had eaten lunch when I called her."
             The verb "eat" is used in the past perfect tense.
            Example 3:
             "I saw her while I was walking to the store."
             The verb "see" is used in the simple past tense.
            EOD
            ],
        ];

        foreach ($topics as $topic) {
            ClassicStudyTopic::create($topic);
        }
    }
}
