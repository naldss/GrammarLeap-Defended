<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<title>GrammarLeap</title>

<body id="page-top">

    @include('games.results.dialog')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="dots-bg d-flex flex-column">
            @include('partials.header')

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container">


                    <div class="card shadow mb-4 p-0">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <span class="m-0 font-weight-bold text-info text-l">Classic Study</span>
                            <a href="{{ route('classicstudy') }}"><strong class="text-xs text-gray-800">← Return to
                                    previous
                                    page</strong></a>
                        </div>
                        <div class="card-body px-5">

                            @foreach ($topicRows as $topicRow)
                                <div class="mb-4">
                                    <strong class="text-primary text-l">{{ $topicRow->title }}</strong>
                                    <strong class="text-success">{{ $topicRow->sub_title }}</strong>
                                    <p class="text-gray-900 mt-3">{!! nl2br(e($topicRow->definition)) !!}</p>
                                </div>
                            @endforeach

                            <div class="card mb-2 py-0 mt-5">
                                <div class="card-body text-gray-800">
                                    <div>

                                        <div class="mb-4 d-flex justify-content-between align-items-center">
                                            <strong class="text-primary ml-1">Topic Exercise</strong>

                                            <div class="text-gray-700 text-l small-card" id="score-box">Score: <strong
                                                    class="text-primary" id="exerciseScore">
                                                    {{ $userExercise->score }}%
                                                </strong></div>
                                        </div>

                                        <div class="exercise-box"></div>
                                        <button class="btn btn-primary mt-3 submit-answers">Submit Answers</button>

                                    </div>

                                </div>
                            </div>

                            <p class="mb-2 mt-5 text-s">Note:
                                You must complete 100% of the topic exercises to unlock access to the Post-test.
                            </p>

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
<audio id="result-good-sound" src="{{ asset('audio/result-good.mp3') }}" preload="auto"></audio>
<audio id="result-bad-sound" src="{{ asset('audio/wrong.mp3') }}" preload="auto"></audio>
<script>
    let userId = @json($user->id);
    let topicId = @json($topicId);
    let score = 0;
    let userExerciseScore = @json($userExercise->score);

    console.log(userExerciseScore);
    console.log(topicId);

    let topicExerciseItems = @json($topicExerciseItems); // Retrieve topic exercise items from PHP
    let exerciseBox = document.querySelector('.exercise-box'); // Container for questions

    // Clear the exerciseBox before appending new elements
    exerciseBox.innerHTML = '';

    // Generate questions and answers dynamically
    topicExerciseItems.forEach((item, index) => {
        // Create a container for each question
        let questionCard = document.createElement('div');
        questionCard.classList.add('card', 'mb-2', 'py-0', 'questions-box');

        // Question content with clickable options
        let questionCardBody = `
        <div class="card-body text-gray-900">
            <div>
                <div class="mb-3"><strong>Question ${index + 1}:</strong> ${item.question}</div>
                <div class="card exercise-answers mb-1 option" data-question="${index}" data-answer="${item.answer1}">
                    <div class="card-body text-s pl-5">${item.answer1}</div>
                </div>
                <div class="card exercise-answers mb-1 option" data-question="${index}" data-answer="${item.answer2}">
                    <div class="card-body text-s pl-5">${item.answer2}</div>
                </div>
                <div class="card exercise-answers mb-1 option" data-question="${index}" data-answer="${item.answer3}">
                    <div class="card-body text-s pl-5">${item.answer3}</div>
                </div>
                <div class="card exercise-answers mb-1 option" data-question="${index}" data-answer="${item.answer4}">
                    <div class="card-body text-s pl-5">${item.answer4}</div>
                </div>
            </div>
        </div>`;
        questionCard.innerHTML = questionCardBody;
        exerciseBox.appendChild(questionCard);
    });

    // Handle answer selection
    let selectedAnswers = {};
    document.addEventListener('click', (e) => {
        if (e.target.closest('.option')) {
            let selectedOption = e.target.closest('.option');
            let questionIndex = selectedOption.dataset.question;

            // Highlight the selected option and store the selected answer
            document.querySelectorAll(`[data-question="${questionIndex}"]`).forEach((option) => {
                option.classList.remove('selected');
            });
            selectedOption.classList.add('selected');
            selectedAnswers[questionIndex] = selectedOption.dataset.answer;
        }
    });

    if (userExerciseScore == 0) {
        document.getElementById('score-box').style.display = 'none';
        console.log('score is 0');
    } else {
        document.getElementById('score-box').style.display = 'block';
        console.log('score is 1');
    }
    console.log("score is 1");

    // Submit and evaluate answers
    document.querySelector('.submit-answers').addEventListener('click', () => {
        let totalPoints = 0;

        // Evaluate answers
        topicExerciseItems.forEach((item, index) => {
            let correctAnswer = item.correct;
            let selectedAnswer = selectedAnswers[index];

            document.querySelectorAll(`[data-question="${index}"]`).forEach((option) => {
                option.classList.remove('bg-success', 'bg-danger', 'selected');
            });

            if (selectedAnswer === correctAnswer) {
                totalPoints++;
                document
                    .querySelector(`[data-question="${index}"][data-answer="${correctAnswer}"]`)
                    .classList.add('bg-success');
            } else if (selectedAnswer) {
                document
                    .querySelector(`[data-question="${index}"][data-answer="${selectedAnswer}"]`)
                    .classList.add('bg-danger');
            }
        });

        if ((totalPoints / topicExerciseItems.length * 100) > 80) {
            document.getElementById('result-good-sound').play();
            document.querySelector(".dialog-bg1").style.display = 'flex';
            document.querySelector(".dialog1").innerHTML =
                'Congratulations! You got ' + (totalPoints / topicExerciseItems.length * 100).toFixed(0) + '%';
            document.getElementById("gif-result-small").innerHTML =
                '<img src="{{ asset('gif/happy.gif') }}" alt="gif" />';
            confetti({
                particleCount: 100,
                spread: 300,
                ticks: 10,
                gravity: 1,
                origin: {
                    y: 0
                },
            });
        } else {
            document.getElementById('result-bad-sound').play();
            document.querySelector(".dialog-bg1").style.display = 'flex';
            document.getElementById("gif-result-small").innerHTML =
                '<img src="{{ asset('gif/sad.gif') }}" alt="gif" />';
            document.querySelector(".dialog1").innerHTML =
                'Keep it up! You got ' + (totalPoints / topicExerciseItems.length * 100).toFixed(0) + '%';
        }

        score = (totalPoints / topicExerciseItems.length * 100).toFixed(0);

        document.getElementById('score-box').style.display = 'block';
        document.getElementById('exerciseScore').textContent = score + '%';

        console.log('Score:', score, userId, topicId);

        updateUserExercise(userId, topicId, score);

        console.log(`Total Points: ${totalPoints}/${topicExerciseItems.length}`);


    });

    async function updateUserExercise(userId, topicId, score) {

        fetch('{{ route('update-user-exercise') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    user_id: userId,
                    topicId: topicId,
                    score: score,
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

<script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</html>
