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
                <div class="fadeIn container max-height d-flex flex-column justify-content-center align-items-center">

                    <div class="row sentences my-3 p-2 col-12" id="sentence-pool">

                        <strong class="col-12 mt-3 text-l text-align-center text-primary">Sentence Pool</strong>
                        <div class="col-12 mb-3 text-s text-align-center">Drag sentences to their sentence type.</div>

                        @foreach ($sentences as $sentence)
                            <div class="draggable-sentence col-12 my-1 sentencesorter-sentences text-gray-800"
                                draggable="true" data-id="{{ $loop->index }}" data-type="{{ $sentence->type }}">
                                {{ $sentence->sentence }}
                            </div>
                        @endforeach

                    </div>

                    <div class="fadeIn row col-12 types-container " id="bins">

                        @foreach (['declarative', 'interrogative', 'imperative', 'exclamatory'] as $type)
                            <div class="sentence-bin type-boxes text-align-center" data-type="{{ $type }}">
                                <div class="text-l text-gray-100">{{ ucfirst($type) }}</div>
                                <div class="bin-content"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="fadeIn row col-12 mt-3 submit-container">
                        <a href="{{ route('games') }}" class="btn btn-danger col-3" id="cancel">Cancel</a>
                        <div class="btn btn-primary col-5" id="check-answer">Submit
                        </div>
                    </div>

                    <div class="final-result correct-answer1 correct-answer blackboard-bg p-5">
                        <div class="row result-box-overall">
                            <div class="col-3">
                                <div id="gif-result">rawr</div>
                            </div>
                            <div
                                class="ml-5 col-8 d-flex flex-column justify-content-center align-items-center result-overall">
                                <div id="result-percent1" class="color-white text-xxl bold"></div>
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
<audio id="twinkle" src="{{ asset('audio/twinkle.mp3') }}" preload="auto"></audio>
<audio id="drop" src="{{ asset('audio/drop.mp3') }}" preload="auto"></audio>
<audio id="woosh-sound" src="{{ asset('audio/woosh.mp3') }}" preload="auto"></audio>
<audio id="win-sound" src="{{ asset('audio/win.mp3') }}" preload="auto"></audio>
<audio id="lost-sound" src="{{ asset('audio/lost.mp3') }}" preload="auto"></audio>
<audio id="result-good-sound" src="{{ asset('audio/result-good.mp3') }}" preload="auto"></audio>
<audio id="result-bad-sound" src="{{ asset('audio/wrong.mp3') }}" preload="auto"></audio>
<audio id="next-sound" src="{{ asset('audio/next.mp3') }}" preload="auto"></audio>
<audio id="keyboard-hit-sound" src="{{ asset('audio/keyboard-hit.mp3') }}" preload="auto"></audio>
<audio id="keyboard-typing-sound" src="{{ asset('audio/keyboard-typing.mp3') }}" preload="auto"></audio>

<script>
    let score = 0;
    let sentences = @json($sentences);
    let userId = @json($user_id);
    let points = 0;
    let win = false;

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('twinkle').play();
        const draggableItems = document.querySelectorAll('.draggable-sentence');
        const sentencePool = document.getElementById('sentence-pool');
        const bins = document.querySelectorAll('.sentence-bin');
        const binAssignments = {}; // Track sentence placement in bins

        // Initialize binAssignments with empty arrays
        bins.forEach(bin => {
            binAssignments[bin.getAttribute('data-type')] = [];
        });

        // Event listeners for draggable sentences
        draggableItems.forEach(item => {
            item.addEventListener('dragstart', (event) => {
                event.dataTransfer.setData('sentence-id', event.target.getAttribute('data-id'));
                event.dataTransfer.setData('sentence-type', event.target.getAttribute(
                    'data-type'));
            });
        });

        // Allow sentences to be dragged back to the pool
        sentencePool.addEventListener('dragover', (event) => {
            event.preventDefault();
        });

        sentencePool.addEventListener('drop', (event) => {
            event.preventDefault();
            const sentenceId = event.dataTransfer.getData('sentence-id');
            const sentenceElement = document.querySelector(
                `.draggable-sentence[data-id="${sentenceId}"]`);

            // Remove from bin if it's being dragged back to the pool
            Object.keys(binAssignments).forEach((binType) => {
                const index = binAssignments[binType].indexOf(sentenceId);
                if (index > -1) {
                    binAssignments[binType].splice(index, 1);
                }
            });

            sentencePool.appendChild(sentenceElement);
            document.getElementById('drop').play();
        });

        // Allow sentences to be dragged into bins
        bins.forEach(bin => {
            const binContent = bin.querySelector('.bin-content');

            bin.addEventListener('dragover', (event) => {
                event.preventDefault();
            });

            bin.addEventListener('drop', (event) => {
                event.preventDefault();
                const sentenceId = event.dataTransfer.getData('sentence-id');
                const sentenceType = event.dataTransfer.getData('sentence-type');
                const binType = bin.getAttribute('data-type');
                const sentenceElement = document.querySelector(
                    `.draggable-sentence[data-id="${sentenceId}"]`);

                // Remove the sentence from other bins if already assigned
                Object.keys(binAssignments).forEach((assignedBinType) => {
                    const index = binAssignments[assignedBinType].indexOf(sentenceId);
                    if (index > -1) {
                        binAssignments[assignedBinType].splice(index, 1);
                    }
                });

                // Assign sentence to this bin if it's not already there
                binContent.appendChild(sentenceElement);
                document.getElementById('drop').play();
                binAssignments[binType].push(sentenceId);
            });
        });

        // Check answers
        document.getElementById('check-answer').addEventListener('click', () => {
            Object.entries(binAssignments).forEach(([binType, sentenceIds]) => {
                sentenceIds.forEach(sentenceId => {
                    const sentenceElement = document.querySelector(
                        `.draggable-sentence[data-id="${sentenceId}"]`);
                    const correctType = sentenceElement.getAttribute('data-type');

                    if (binType === correctType) {
                        score++;
                    }
                });
            });

            document.querySelector('.sentences').style.display = 'none';
            document.querySelector('.types-container').style.display = 'none';
            document.querySelector('.submit-container').style.display = 'none';
            document.querySelector('.final-result').style.display = 'flex';

            document.getElementById('result-percent1').innerHTML =
                `${(score/sentences.length*100).toFixed(0)}%<span class="text-xxl">Accuracy</span>`;

            points = (score / sentences.length * 20).toFixed(0);

            if (score < (sentences.length * .7)) {
                document.getElementById("gif-result").innerHTML =
                    '<img src="{{ asset('gif/sad.gif') }}" alt="gif" />';
                document.getElementById('lost-sound').play();

                document.getElementById('points').innerHTML =
                    `Keep it up! You only got <strong>${score} out of ${sentences.length} </strong>sentences.`;

                win = false;
            } else {
                document.getElementById("gif-result").innerHTML =
                    '<img src="{{ asset('gif/happy.gif') }}" alt="gif" />';
                document.getElementById('win-sound').play();
                document.getElementById('points').innerHTML =
                    `Congratulations! You got <strong>${score} out of ${sentences.length} </strong>sentences.`;

                win = true;

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
            }

            if (points > 19) {
                completeMission(5);
            }

            updateGameStats(userId, points, win);

        });
    });

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

        fetch('{{ route('update-game-stats-SentenceSorter') }}', {
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
