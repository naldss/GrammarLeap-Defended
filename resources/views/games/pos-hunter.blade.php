<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<title>GrammarLeap - POS Hunter</title>

<body id="">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            @include('partials.header')

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class=" game-container">
                    <div class="game blackboard-bg">

                        <div class="sentence-container col-lg-10">
                            <div id="display-sentence" class="sentence text-xxl">No sentence passed.</div>
                            <div id="instruction" class="instruction text-gray-300 text-l">
                                No random POS tag is passed.
                            </div>
                        </div>
                        <div class="buttons-container col-lg-1">
                            <div id="submit" class="submit btn btn-primary">Submit</div>
                            <a href="{{ route('games') }}" class="exit btn btn-danger">Exit</a>
                        </div>

                    </div>

                    <div class="correct-answer correct-answer1 blackboard-bg">
                        <div class="row d-flex align-items-center">
                            {{-- <div class="col result-percent color-white" id="result-percent">30%</div> --}}
                            <div class="col">
                                <div id="outof" class="bold text-gray-100 mb-2 text-xxl">0 out of 0 Noun/s</div>
                                <div class="text-s bold text-gray-200 mb-1 text-align-center">Parts of Speech Analysis:
                                </div>
                                <div class="text-xs  text-gray-300 d-flex flex-column justify-content-center align-items-center"
                                    id="wordsPos"></div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn btn-danger m-1 mt-4" href="{{ route('games') }}" id="cancel">Cancel
                                Game</a>
                            <div class="btn btn-primary m-1 mt-4" id="next">Next Sentence</div>

                        </div>
                        <div class="mt-4 text-xs text-gray-500">Note: Select only the correct answer. Incorrect
                            selections will result in a deduction from your score.</div>
                    </div>

                    <div id="final-result" class="correct-answer1 correct-answer blackboard-bg" style="display: none">

                        <div class="row result-box-overall">
                            <div class="col">
                                <div id="gif-result">rawr</div>
                            </div>
                            <div class="col result-overall d-flex flex-column align-items-start">
                                <div class="result-percent text-nowrap color-white" id="result-percent1">error
                                </div>
                                <div class="result-information text-l text-gray-200 ml-1">
                                    <span id="outof1" class="text-gray-300">error</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="{{ route('games') }}" class="btn btn-danger m-1 mt-4" id="next">Exit to
                                Games</a>
                            <div onclick="location.reload();" class="btn btn-primary m-1 mt-4" id="next">Play Again
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

<audio id="win-sound" src="{{ asset('audio/win.mp3') }}" preload="auto"></audio>
<audio id="lost-sound" src="{{ asset('audio/lost.mp3') }}" preload="auto"></audio>
<audio id="result-good-sound" src="{{ asset('audio/result-good.mp3') }}" preload="auto"></audio>
<audio id="result-bad-sound" src="{{ asset('audio/wrong.mp3') }}" preload="auto"></audio>
<audio id="next-sound" src="{{ asset('audio/next.mp3') }}" preload="auto"></audio>
<audio id="keyboard-hit-sound" src="{{ asset('audio/keyboard-hit.mp3') }}" preload="auto"></audio>
<audio id="keyboard-typing-sound" src="{{ asset('audio/keyboard-typing.mp3') }}" preload="auto"></audio>

<script>
    // document.getElementById('win-sound').play();

    let partsOfSpeech = ["Noun", "Pronoun", "Verb", "Adjective", "Adverb", "Preposition", "Conjunction",
        "Interjection"
    ];
    let sentences = @json($sentences);
    const progressContainer = document.getElementById("progress-container");
    let currentIndex = 0;
    let correct = 0;
    let incorrect = 0;
    let occurences = 0;
    let score = 0;

    let userId = @json($user_id);
    let points = 0;
    let win = false;

    loadGame();

    function loadGame() {
        updateProgress(sentences.length, currentIndex);
        console.log(' ');
        console.log(' ');
        console.log(currentIndex);
        if (currentIndex < sentences.length) {
            document.querySelector('.correct-answer').style.display = 'none';
            document.querySelector('.game').style.display = 'flex';

            //the sentence
            let sentenceDisplay = document.getElementById('display-sentence');
            let sentence = sentences[currentIndex].sentence;
            console.log(sentence);

            //Select Random Tag in the sentence
            let sentenceWordTags = [];
            let words1 = sentence.split(' ');
            words1.forEach(function(word) {
                let wordTag = nlp(word);
                let tags = wordTag.out('tags')[0];
                let wordTags = tags ? tags.tags : []; // Ensure tags exist

                // Find the first tag that matches partsOfSpeech and push it if found
                let matchingTag = wordTags.find(tag => partsOfSpeech.includes(tag));
                if (matchingTag) {
                    sentenceWordTags.push(matchingTag);
                }
            });

            if (sentenceWordTags.length > 0) {
                randomTag = sentenceWordTags[Math.floor(Math.random() * sentenceWordTags.length)];
                console.log("Randomly selected tag:", randomTag);

                const instruction = document.getElementById('instruction');
                instruction.innerHTML = "Select the words that are <strong>'" + randomTag +
                    "'</strong> in the sentence.";

            } else {
                console.log("No matching tags found in the specified parts of speech.");
            }
            //End of Select Random Tag in the sentence

            selectedWord = [];

            //display the sentence with classes and select function
            const words = sentence.split(' ');
            // const sentenceDisplay = document.getElementById('display-sentence');
            sentenceDisplay.innerHTML = '';
            words.forEach((word, index) => {
                const wordSpan = document.createElement('span');
                wordSpan.textContent = word;
                wordSpan.classList.add('word');
                wordSpan.onclick = () => selectWord(index);
                sentenceDisplay.appendChild(wordSpan);
            });
            //end of display the sentence with classes

            const sound = document.getElementById('keyboard-typing-sound');
            sound.play(); // Start playing the sound
            animateLettersTyping().then((done) => {
                if (done) {
                    console.log('Animation complete!');
                    sound.pause(); // Stop the sound
                    sound.currentTime = 0; // Reset the audio to the beginning (optional)
                }
            });


            // Process the words in the sentence to extract POS for display of POS of words
            const tagsOfEachWords = words
                .map((word) => {
                    const wordTag = nlp(word);
                    const tags = wordTag.out('tags')[0];
                    const wordTags = tags ? tags.tags : [];

                    const intersection = wordTags.filter(tag => partsOfSpeech.includes(tag));
                    const firstTag = intersection.length > 0 ? intersection[0] : null;

                    return firstTag ? {
                        word: word,
                        tags: firstTag
                    } : null;
                })
                .filter(item => item !== null);

            console.log(tagsOfEachWords);

            // Remove existing event listeners from the #submit button
            const submitButton = document.getElementById('submit');
            const newSubmitButton = submitButton.cloneNode(true); // Create a new button to replace the old one
            submitButton.replaceWith(newSubmitButton);

            // Add event listener to the newly created button
            newSubmitButton.addEventListener('click', () => {


                const {
                    matched,
                    notMatched,
                    numOfOccurences
                } = checkSelectedWords(sentence, randomTag);

                if (currentIndex < sentences.length) {
                    occurences += numOfOccurences;

                    correct += matched;
                    incorrect += notMatched;
                    // score += correct;

                    youGot = matched - notMatched;
                    if (youGot < 0) {
                        youGot = 0;
                    }

                    if (score < 0) {
                        score = 0;
                    }

                    score += youGot;

                    let percentage = (matched / numOfOccurences * 100).toFixed(0);

                    // document.getElementById('result-percent').innerHTML = percentage + '%';
                    document.getElementById('outof').innerHTML = 'You got ' + youGot + ' out of ' +
                        numOfOccurences + ' ' + randomTag + '/s';

                    if (percentage > 50) {
                        document.getElementById('result-good-sound').play();
                    } else {
                        document.getElementById('result-bad-sound').play();
                    }

                    console.log("Your Score is: " + score);
                    correct = 0;
                    incorrect = 0;

                    currentIndex++;
                }

                if (currentIndex >= sentences.length) {
                    document.getElementById('cancel').style.display = 'none';
                    document.getElementById('next').innerHTML = 'See Overall Score';

                    document.getElementById('next').addEventListener('click', () => {



                        if ((score / occurences *
                                100) > 70) {

                            document.getElementById("gif-result").innerHTML =
                                '<img src="{{ asset('gif/happy.gif') }}" alt="gif" />';

                            document.getElementById('outof1').innerHTML =
                                `Congratulations! You got ${score} out of ${occurences} words.`;

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
                        } else {
                            document.getElementById('lost-sound').play();

                            document.getElementById("gif-result").innerHTML =
                                '<img src="{{ asset('gif/sad.gif') }}" alt="gif" />';

                            document.getElementById('outof1').innerHTML =
                                `Keep it up! You only got ${score} out of ${occurences} words.`;

                            win = false;
                        }

                        document.querySelector('.correct-answer').style.display = 'none';
                        document.querySelector('#final-result').style.display = 'flex';

                        document.getElementById('result-percent1').innerHTML = (score / occurences *
                            100).toFixed(0) + '%<span class="ml-2 text-xxl">Accuracy</span>';
                        // document.getElementById('outof1').innerHTML = 'You received +' + (score /
                        //     occurences * 20).toFixed(0) + ' points';

                        points = (score / occurences * 20).toFixed(0);

                        console.log("Your final score is: " + points);

                        if (points > 19) {
                            completeMission(2);
                        }

                        updateGameStats(userId, points, win);

                    });

                }

                document.querySelector('.game').style.display = 'none';

                if (currentIndex < (sentences.length + 1)) {
                    document.querySelector('.correct-answer').style.display = 'flex';
                }

                let wordsPosElement = document.getElementById('wordsPos');
                wordsPosElement.innerHTML = '';

                tagsOfEachWords.forEach(({
                    word,
                    tags
                }) => {
                    // Create a new element to display each word and its tag
                    let wordDisplay = document.createElement('div');
                    wordDisplay.textContent = `${word} - ${tags}`; // Format: "Word - Tag"

                    // Append the word display to the container
                    wordsPosElement.appendChild(wordDisplay);
                });

                document.getElementById('next').addEventListener('click', () => {
                    loadGame();
                });

                // loadGame();
            });
        } else {
            console.log('you reached the end');
        }
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

    async function updateGameStats(userId, points, win) {

        fetch('{{ route('update-game-stats-PosHunter') }}', {
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


    // JavaScript code for animating each letter typing
    function animateLettersTyping() {
        return new Promise((resolve) => {
            const words = document.querySelectorAll('.word');
            let i = 0;

            // Loop through each word and create individual letters
            words.forEach((word) => {
                const letters = word.textContent.split('');
                word.innerHTML = ''; // Clear the word content
                letters.forEach((letter) => {
                    const letterElement = document.createElement('span');
                    letterElement.textContent = letter;
                    letterElement.classList.add('letter');
                    word.appendChild(letterElement);
                });
            });

            // Now animate each letter individually
            function typeLetter() {
                const letters = document.querySelectorAll('.letter');
                if (i < letters.length) {
                    letters[i].classList.add('typing');
                    i++;
                    setTimeout(typeLetter, 100); // Adjust typing speed
                } else {
                    // All letters have been animated, resolve the Promise
                    resolve(true); // Animation complete
                }
            }

            typeLetter(); // Start the typing animation
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

    function selectWord(index) {
        const words = document.querySelectorAll('.word');
        const wordElement = words[index];

        if (wordElement.classList.contains('selected')) {
            // If the word is already selected, deselect it and remove from the array
            wordElement.classList.remove('selected');
            selectedWord = selectedWord.filter((i) => i !== index);
        } else {
            // Select the clicked word and add to the array
            wordElement.classList.add('selected');
            selectedWord.push(index);
        }
    }

    function checkSelectedWords(sentence, randomTag) {
        let correct = 0;
        let incorrect = 0;
        let numberOccur = nlp(sentence)
            .match(`#${randomTag}`)
            .length;

        // Ensure the number of occurrences is at least 1
        numberOccur = Math.max(numberOccur, 1);

        // Loop through each selected word index
        selectedWord.forEach((index) => {
            const word = document.querySelectorAll('.word')[index].textContent;

            // Use compromise NLP library to analyze the word
            let taggedWord = nlp(word);

            // Check if the word contains the required tag
            if (taggedWord.has(`#${randomTag}`)) {
                correct++; // Increment 'a' for match
            } else {
                incorrect++; // Increment 'b' for non-match
            }
        });

        return {
            matched: correct,
            notMatched: incorrect,
            numOfOccurences: numberOccur
        };
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
