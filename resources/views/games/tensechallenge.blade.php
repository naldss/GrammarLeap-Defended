<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<title>GrammarLeap - POS Hunter</title>

<body id="">

    @include('games.results.dialog')

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            @include('partials.header')

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="game-container">
                    <div class="game blackboard-bg">

                        <div class="sentence-container col-lg-10">
                            <div id="display-sentence" class="sentence text-align-center">
                                <!-- The sentence will be displayed with the editable word -->
                                Sentence not passed.
                            </div>
                            <div class="question instruction text-gray-300 text-l">
                                Edit the verb to be a <span id="tense-output"></span>
                            </div>
                        </div>
                        <div class="buttons-container col-lg-1">
                            <div id="check-verb-btn" class="submit btn btn-primary">Submit</div>
                            <a href="{{ route('games') }}" class="exit btn btn-danger">Exit</a>
                        </div>

                    </div>
                    <div class="result game blackboard-bg" id="result-sf">
                        <div class="row d-flex flex-column">
                            <strong id="result-message" class="text-gray-100 text-xxl mb-3">Result will appear
                                here.</strong>
                            <div id="userVerb" class="text-gray-400"></div>
                            <div id="origVerb" class="text-gray-400"></div>

                        </div>
                        <div class="row">
                            <a href="{{ route('games') }}" class="btn btn-danger m-1 mt-4" id="cancel">Cancel
                                Game</a>
                            <div onclick="checkIndex();" class="btn btn-primary m-1 mt-4" id="next">Next Sentence
                            </div>
                            <div onclick="checkIndex();" class="btn btn-primary m-1 mt-4" id="see-score"
                                style="display: none;">See Overall Score</div>
                        </div>
                    </div>
                    <div class="final-result correct-answer1 correct-answer blackboard-bg">
                        <div class="row result-box-overall">
                            <div class="col-3">
                                <div id="gif-result">rawr</div>
                            </div>
                            <div
                                class="ml-5 col-8  d-flex flex-column justify-content-center align-items-center result-overall ">
                                <div id="result-percent1" class="color-white bold"></div>
                                <div id="points" class="text-gray-300"></div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="{{ route('games') }}" class="btn btn-danger m-1 mt-4" id="cancel">Exit to
                                Games</a>
                            <div onclick="location.reload();" class="btn btn-primary m-1 mt-4" id="restart">Play Again
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="row mt-3 mx-5" id="progress-container">
                </div>
            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('auth.logout')
</body>

<audio id="error" src="{{ asset('audio/error.mp3') }}" preload="auto"></audio>
<audio id="woosh-sound" src="{{ asset('audio/woosh.mp3') }}" preload="auto"></audio>
<audio id="win-sound" src="{{ asset('audio/win.mp3') }}" preload="auto"></audio>
<audio id="lost-sound" src="{{ asset('audio/lost.mp3') }}" preload="auto"></audio>
<audio id="result-good-sound" src="{{ asset('audio/result-good.mp3') }}" preload="auto"></audio>
<audio id="result-bad-sound" src="{{ asset('audio/wrong.mp3') }}" preload="auto"></audio>
<audio id="next-sound" src="{{ asset('audio/next.mp3') }}" preload="auto"></audio>
<audio id="keyboard-hit-sound" src="{{ asset('audio/keyboard-hit.mp3') }}" preload="auto"></audio>
<audio id="keyboard-typing-sound" src="{{ asset('audio/keyboard-typing.mp3') }}" preload="auto"></audio>

<script>
    let userId = @json($user_id);
    let points = 0;
    let win = false;
    let difficulty = @json($difficulty);

    console.log(difficulty);

    const patterns = [{
            tense: "Simple Present",
            regex: /\b(?:do|does)\b\s?\w+|\b\w+s\b(?!\s(?:was|is|are|were))/i
        },
        {
            tense: "Present Continuous",
            regex: /\b(?:am|is|are)\b\s\w+ing\b/i
        },
        {
            tense: "Present Perfect",
            regex: /\b(?:have|has)\b\s\w+ed\b(?!\sbeen)/i
        },
        {
            tense: "Present Perfect Continuous",
            regex: /\b(?:have|has)\b\sbeen\s\w+ing\b/i
        },
        {
            tense: "Simple Past",
            regex: /\b\w+ed\b(?!\s(?:have|had))/i
        },
        {
            tense: "Past Continuous",
            regex: /\b(?:was|were)\b\s\w+ing\b/i
        },
        {
            tense: "Past Perfect",
            regex: /\bhad\b\s\w+ed\b(?!\sbeen)/i
        },
        {
            tense: "Past Perfect Continuous",
            regex: /\bhad\b\sbeen\s\w+ing\b/i
        },
        {
            tense: "Future Perfect",
            regex: /\b(?:will|shall)\b\shave\s\w+ed\b/i
        },
        {
            tense: "Simple Future",
            regex: /\b(?:will|shall)\b\s\w+\b(?!\shave)/i
        },
        {
            tense: "Future Continuous",
            regex: /\b(?:will|shall)\b\sbe\s\w+ing\b/i
        },
        {
            tense: "Future Perfect Continuous",
            regex: /\b(?:will|shall)\b\shave\sbeen\s\w+ing\b/i
        }
    ];

    const detectTense = (sentence) => {
        let detectedTense = "Unknown";

        // First, check using regex patterns
        patterns.forEach(pattern => {
            if (pattern.regex.test(sentence)) {
                detectedTense = pattern.tense;
            }
        });

        return detectedTense;
    };

    const progressContainer = document.getElementById("progress-container");

    const sentences = @json($sentences); // Assuming sentences are passed to the page
    console.log(sentences.difficulty);
    const displaysentence = document.querySelector('.sentence');
    const validTenses = ['PastTense', 'PresentTense', 'FutureTense', 'Auxiliary'];
    let currentIndex = 0;
    let score = 0;

    loadNextSentence();

    function loadNextSentence() {

        document.querySelector('.game').style.display = 'flex';

        updateProgress(sentences.length, currentIndex);

        console.log(currentIndex + ' | ' + sentences.length);
        console.log(sentences[currentIndex].sentence);

        let checkVerbButton = document.getElementById('check-verb-btn');
        let feedbackParagraph = document.getElementById('feedback');

        const sentenceWithTags = nlp(sentences[currentIndex].sentence).out('tags');
        let selectedwords = [];

        sentenceWithTags.forEach(wordWithTags => {
            const wordText = wordWithTags.text;
            const wordtags = wordWithTags.tags;

            // Check if the word is a verb and if it is part of a valid tense
            const isVerb = wordtags.includes('Verb');
            const isValidTense = wordtags.some(tag => validTenses.includes(tag)); // Check for a valid tense

            // If it is a verb and belongs to a valid tense, select the word
            if (isVerb && isValidTense) {
                const wordSelected = wordText;
                const normalizedWord = nlp(wordSelected).verbs().toInfinitive().out('text');

                if (wordSelected !== normalizedWord) {
                    selectedwords.push({
                        word: wordSelected,
                        baseForm: normalizedWord
                    });
                }
            }
        });

        let numVerbsToEdit;
        if (difficulty === 'easy') {
            numVerbsToEdit = 1;
        } else if (difficulty === 'mid') {
            numVerbsToEdit = 2;
        } else if (difficulty === 'hard') {
            numVerbsToEdit = Math.min(4, selectedwords.length);
        }

        let editableWords = [];
        for (let i = 0; i < numVerbsToEdit; i++) {
            let randomIndex = Math.floor(Math.random() * selectedwords.length);
            let selectedword = selectedwords[randomIndex];
            selectedwords.splice(randomIndex, 1); // Remove the selected word to avoid duplicates

            const editableWord =
                `<span contenteditable="true" id="verb-edit-${i}" class="editable-word" data-placeholder="${selectedword.baseForm}"></span>`;
            editableWords.push({
                word: selectedword.word,
                editableWord: editableWord
            });
        }

        let currentSentence = sentences[currentIndex].sentence;
        editableWords.forEach(editable => {
            currentSentence = currentSentence.replace(editable.word, editable.editableWord);
        });

        // Display the updated sentence with the editable word
        displaysentence.innerHTML = currentSentence;

        // Display the detected tense in the 'tense' div
        const tenseOutput = document.getElementById('tense-output');
        tenseOutput.textContent = detectTense(sentences[currentIndex].sentence);

        checkVerbButton.replaceWith(checkVerbButton.cloneNode(true)); // Reset button to remove old listeners
        checkVerbButton = document.getElementById('check-verb-btn'); // Reassign after cloning

        document.getElementById('woosh-sound').play();

        checkVerbButton.addEventListener('click', function() {
            let allFilled = true;
            let allCorrect = true;
            let userSentence = currentSentence;

            editableWords.forEach((editable, index) => {
                const editedVerb = document.querySelector(`#verb-edit-${index}`).textContent.trim();

                if (!editedVerb || editedVerb.trim() === "") {
                    allFilled = false;
                    return;
                }

                if (editedVerb !== editable.word) {
                    allCorrect = false;
                }

                userSentence = userSentence.replace(editable.editableWord, editedVerb);
            });

            if (!allFilled) {
                document.getElementById('error').play();
                document.querySelector(".dialog-bg").style.display = 'flex';
                document.querySelector(".dialog").innerHTML =
                    'Enter your correct verb according to the instruction.';
                return;
            }

            document.querySelector('.game').style.display = 'none';
            document.querySelector('.result').style.display = 'flex';

            if (allCorrect) {
                console.log("You are Correct!");
                score++;
                console.log("your score: " + score);

                document.getElementById('result-message').innerHTML =
                    `✔ You are Correct!`;

                document.getElementById('origVerb').innerHTML =
                    `Correct Sentence: ${sentences[currentIndex].sentence}`;

                document.getElementById('result-good-sound').play();
            } else {
                console.log("You are Incorrect!");
                console.log("your score: " + score);

                document.getElementById('result-message').innerHTML =
                    `✘ You are Incorrect.`;

                document.getElementById('origVerb').innerHTML =
                    `Correct Sentence: ${sentences[currentIndex].sentence}`;

                // document.getElementById('userVerb').innerHTML =
                //     `Your Sentence: ${userSentence}`;

                document.getElementById('result-bad-sound').play();
            }

            currentIndex++;

            if (!(currentIndex < sentences.length)) {
                document.getElementById('next').style.display = 'none';
                document.getElementById('see-score').style.display = 'block';
            }
        });
    }

    function completeMission(MissionId) {
        fetch('{{ route('missions.complete', ['MissionId' => '__MISSION_ID__']) }}'.replace('__MISSION_ID__',
                MissionId), {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // alert('A mission was completed!');
                }
            })
            .catch(error => {
                // console.error('Error completing mission:', error);
            });
    }

    function checkIndex() {
        document.querySelector('.result').style.display = 'none';
        if (currentIndex < sentences.length) {
            loadNextSentence();
        } else {
            document.querySelector('.final-result').style.display = 'flex';

            document.getElementById('result-percent1').innerHTML =
                `${(score/sentences.length*100).toFixed(0)}% <span class="text-xxl">Accuracy</span>`;

            points = (score / sentences.length * 20).toFixed(0);

            document.getElementById('points').innerHTML =
                `Congratulations! You got <strong>${score} out of ${sentences.length} points.</strong>`;

            if (score < (.5 * sentences.length)) {
                document.getElementById("gif-result").innerHTML =
                    '<img src="{{ asset('gif/sad.gif') }}" alt="gif" />';
                document.getElementById('lost-sound').play();

                win = false;
            } else {
                document.getElementById("gif-result").innerHTML =
                    '<img src="{{ asset('gif/happy.gif') }}" alt="gif" />';
                document.getElementById('win-sound').play();
                confetti({
                    particleCount: 200, // Number of particles for the fountain
                    spread: 90, // Narrow spread for a more focused fountain
                    startVelocity: 100, // Moderate initial speed to shoot particles upward
                    gravity: 1, // Negative gravity to make confetti go upwards
                    ticks: 300,
                    angle: 90,
                    origin: {
                        x: 0.5,
                        y: 1
                    },
                });

                win = true;
            }

            if (points > 19) {
                completeMission(4);
            }

            updateGameStats(userId, points, win);
        }
    }

    async function updateGameStats(userId, points, win) {

        fetch('{{ route('update-game-stats-TenseChallenge') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    user_id: userId,
                    points: points,
                    win: win,
                })
            })
            .then(response => {
                if (!response.ok) {
                    console.error('Failed to add points:', response.statusText);
                }
            })
            .catch(error => {
                console.error('Error adding points:', error);
            });
    }

    // Function to generate divs and apply colors
    function updateProgress(x, currentIndex) {
        y = currentIndex + 1;
        // Clear existing content
        progressContainer.innerHTML = "";

        for (let i = 1; i <= x; i++) {
            // Create a new div
            const div = document.createElement("div");
            div.className = "col game-progress mx-1";

            // Set the background color
            div.style.backgroundColor = i <= y ? "#4e73df" : "rgb(209, 209, 209)";

            // Append to the container
            progressContainer.appendChild(div);
        }
    }
</script>

</html>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
