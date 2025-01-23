<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>GrammarLeap - POS Hunter</title>

<body id="">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            @include('partials.header')
            <div id="content">
                <div class="game-container">
                    <div class="game blackboard-bg animation-6">
                        <div class="sentence-container col-lg-10">
                            <div id="display-sentence">No sentence passed.</div>
                            <div id="instruction" class="instruction text-gray-300 text-l">
                                Click on the words to edit and fix the sentence.
                            </div>
                        </div>
                        <div class="buttons-container col-lg-1">
                            <div id="submit" class="submit btn btn-primary">Submit</div>
                            <a href="{{ route('games') }}" class="exit btn btn-danger">Exit</a>
                        </div>
                    </div>
                    <div class="result game blackboard-bg" id="result-sf">
                        <div class="row d-flex flex-column">
                            <div id="result-message" class="text-gray-100 text-xl mb-3">Result will appear here.</div>
                            <div id="userSentence" class="text-gray-400 text-s"></div>
                            <div id="origSentence" class="text-gray-400 text-s"></div>

                        </div>
                        <div class="row">
                            <a href="{{ route('games') }}" class="btn btn-danger m-1 mt-4" id="cancel">Cancel
                                Game</a>
                            <div onclick="loadGame();" class="btn btn-primary m-1 mt-4" id="next">Next Sentence
                            </div>
                            <div class="btn btn-primary m-1 mt-4" id="see-score" style="display: none;">See Overall
                                Score</div>
                        </div>
                    </div>
                    <div class="final-result correct-answer1 correct-answer blackboard-bg">
                        <div class="row result-box-overall">
                            <div class="col-3">
                                <div id="gif-result">rawr</div>
                            </div>
                            <div
                                class="ml-5 col-8  d-flex flex-column justify-content-center align-items-start result-overall">
                                <div class="color-white bold" id="result-percent1"></div>
                                <div id="points" class="text-gray-300 ml-1"></div>
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
                <div class="row mt-3 mx-5" id="progress-container"></div>
            </div>
            @include('partials.footer')
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('auth.logout')
</body>

<audio id="woosh-sound" src="{{ asset('audio/woosh.mp3') }}" preload="auto"></audio>
<audio id="win-sound" src="{{ asset('audio/win.mp3') }}" preload="auto"></audio>
<audio id="lost-sound" src="{{ asset('audio/lost.mp3') }}" preload="auto"></audio>
<audio id="result-good-sound" src="{{ asset('audio/result-good.mp3') }}" preload="auto"></audio>
<audio id="result-bad-sound" src="{{ asset('audio/wrong.mp3') }}" preload="auto"></audio>
<audio id="next-sound" src="{{ asset('audio/next.mp3') }}" preload="auto"></audio>
<audio id="keyboard-hit-sound" src="{{ asset('audio/keyboard-hit.mp3') }}" preload="auto"></audio>
<audio id="keyboard-typing-sound" src="{{ asset('audio/keyboard-typing.mp3') }}" preload="auto"></audio>

<script>
    const progressContainer = document.getElementById("progress-container");
    let currentIndex = 0;
    let sentences = @json($sentences);
    let corruptedSentences = @json($corruptedSentences);
    let finalScore = 0;
    let finalSentencesLength = 0;

    let userId = @json($user_id);
    let points = 0;
    let win = false;


    console.log("Corrupted Sentences:");
    corruptedSentences.forEach(element => {
        console.log('- ' + element);
    });
    console.log(" ");

    loadGame();

    function loadGame() {
        updateProgress(sentences.length, currentIndex);
        document.querySelector('.game').style.display = 'flex';
        document.querySelector('.result').style.display = 'none';
        document.querySelector('.final-result').style.display = 'none';

        const displaySentenceDiv = document.getElementById('display-sentence');
        const instructionDiv = document.getElementById('instruction');
        const submitButton = document.getElementById('submit');

        console.log('index value: ' + currentIndex);
        console.log('- ' + sentences[currentIndex].sentence);
        console.log('- ' + corruptedSentences[currentIndex]);

        const corruptedWords = corruptedSentences[currentIndex].split(' ');
        let inputFieldsHtml = corruptedWords
            .map(word =>
                `<span class="word-input sentence" contenteditable="true" style="display: inline-block; min-width: auto; white-space: nowrap;" data-placeholder="${word.trim()}">${word.trim()}</span>`
            )
            .join(' ');

        document.getElementById('woosh-sound').play();
        displaySentenceDiv.innerHTML = inputFieldsHtml;

        submitButton.onclick = () => {
            let [score, sentenceLength, userSentence, origSentence] = handleSubmit();
            finalScore += score;
            finalSentencesLength += sentenceLength;
            currentIndex++;

            if (finalScore < (.5 * finalSentencesLength)) {
                document.getElementById('result-bad-sound').play();
            } else {
                document.getElementById('result-good-sound').play();
            }

            if (currentIndex < sentences.length) {
                document.querySelector('.game').style.display = 'none';
                document.querySelector('.result').style.display = 'flex';
                document.getElementById('origSentence').innerHTML =
                    `Original Sentence: <strong>${origSentence}</strong>`;
                document.getElementById('userSentence').innerHTML =
                    `Your Sentence: <strong>${userSentence}</strong>`;
                document.getElementById('result-message').innerHTML =
                    `You scored: <strong>${score} out of ${sentenceLength}</strong> on this sentence.`;
                document.getElementById('next').style.display = 'block';
                document.getElementById('see-score').style.display = 'none';
            } else {
                document.querySelector('.game').style.display = 'none';
                document.querySelector('.result').style.display = 'flex';
                document.getElementById('origSentence').innerHTML =
                    `Original Sentence: <strong>${origSentence}</strong>`;
                document.getElementById('userSentence').innerHTML =
                    `Your Sentence: <strong>${userSentence}</strong>`;
                document.getElementById('result-message').innerHTML =
                    `You scored: <strong>${score} out of ${sentenceLength}</strong> on this sentence.`;
                document.getElementById('next').style.display = 'none';
                document.getElementById('see-score').style.display = 'block';
            }
        };

        document.getElementById('see-score').onclick = () => {
            showFinalResult();



        };

        document.querySelectorAll('.word-input').forEach(span => {
            span.addEventListener('input', handleInputChange);
            handleInputChange.call(span);
        });
    }

    function handleSubmit() {
        const inputs = document.querySelectorAll('.word-input');
        const userSentence = Array.from(inputs).map(input => input.textContent.trim()).join(' ');
        const originalWords = sentences[currentIndex].sentence.split(' ');
        const userWords = userSentence.split(' ');

        let score = 0;

        originalWords.forEach((word, index) => {
            if (userWords[index] && userWords[index].replace(/[.!?]$/, '') === word.replace(/[.!?]$/, '')) {
                score++;
            }
        });

        let sentenceLength = originalWords.length;
        let origSentence = sentences[currentIndex].sentence;

        return [score, sentenceLength, userSentence, origSentence];
    }

    function showFinalResult() {
        document.querySelector('.result').style.display = 'none';
        document.querySelector('.final-result').style.display = 'flex';
        document.getElementById('result-percent1').innerHTML =
            (finalScore / finalSentencesLength *
                100).toFixed(0) + `%<span class="ml-2 text-xxl">Accuracy</span>`;

        points = (finalScore / finalSentencesLength * 20).toFixed(0);

        if ((finalScore / finalSentencesLength *
                100) > 70) {
            document.getElementById('points').innerHTML =
                `Congratulations! You got <strong>${finalScore} out of ${finalSentencesLength} words.</strong>`;
        } else {
            document.getElementById('points').innerHTML =
                `Keep it up! You only got <strong>${finalScore} out of ${finalSentencesLength} words.</strong>`;
        }

        // document.getElementById('points').innerHTML =
        //     `Congratulations! You got <strong>${finalScore} out of ${finalSentencesLength} words.</strong>`;

        if (finalScore < (.5 * finalSentencesLength)) {
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
            completeMission(3);
        }

        updateGameStats(userId, points, win);
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

        fetch('{{ route('update-game-stats-SentenceFixer') }}', {
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

    function updateProgress(x, currentIndex) {
        y = currentIndex + 1;
        progressContainer.innerHTML = "";

        for (let i = 1; i <= x; i++) {
            const div = document.createElement("div");
            div.className = "col game-progress mx-1";
            div.style.backgroundColor = i <= y ? "#4e73df" : "rgb(209, 209, 209)";
            progressContainer.appendChild(div);
        }
    }

    function handleInputChange() {
        const span = this;
        const tempSpan = document.createElement('span');
        tempSpan.style.visibility = 'hidden';
        tempSpan.style.position = 'absolute';
        tempSpan.style.font = getComputedStyle(span).font;
        tempSpan.textContent = span.textContent || span.getAttribute('data-placeholder') || ' ';

        document.body.appendChild(tempSpan);
        const newWidth = tempSpan.offsetWidth;
        document.body.removeChild(tempSpan);

        span.style.minWidth = `${newWidth + 5}px`;

        if (!span.textContent.trim()) {
            span.textContent = span.getAttribute('data-placeholder');
            span.style.color = 'white';
        } else {
            span.style.color = 'white';
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</html>
