<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<title>GrammarLeap</title>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="dots-bg d-flex flex-column">
            @include('partials.header')

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="">
                    <div class="games-box" id="flexContainer">
                        <div class="box" data-box="1">
                            <div class="box1">
                                <img class="game_logo" src="{{ asset('img/games_logo/poshunter.png') }}" alt="none">
                                <div class="text-gray-900 font-weight-bold text-xxl">POS Hunter</div>
                            </div>
                            <div class="box-outside">
                                <div class="box-inside">
                                    <img class="game_logo" src="{{ asset('img/games_logo/poshunter.png') }}"
                                        alt="none">
                                    <div class="text-gray-900 font-weight-bold text-xxl">POS Hunter</div>

                                    <div class="game-progress">
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $progressPercentageposhunter }}%"
                                                aria-valuenow="{{ $progressPercentageposhunter }}" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between text-s">
                                            <div>Level {{ $levelposhunter }}</div>
                                            <div>{{ $currentLevelPointsposhunter }}/200</div>
                                            <div>Level {{ $levelposhunter + 1 }}</div>
                                        </div>
                                    </div>

                                    <!-- Form for difficulty level selection -->
                                    <form action="{{ route('pos-hunter') }}" method="GET"
                                        class="d-flex flex-column justify-content-center align-items-center">
                                        <button type="submit" class="play-button btn btn-primary mt-5 text-xl px-5">
                                            Play
                                        </button>

                                        <div class="text-s mt-4">Difficulty</div>
                                        <div class="difficulty-switch text-s text-gray-900">
                                            <input type="radio" id="option1" name="difficulty" value="easy"
                                                {{ old('difficulty', 'easy') == 'easy' ? 'checked' : '' }}>
                                            <label for="option1" class="toggle-option mx-2">Easy</label>

                                            <input type="radio" id="option2" name="difficulty" value="mid"
                                                {{ old('difficulty', 'easy') == 'mid' ? 'checked' : '' }}>
                                            <label for="option2" class="toggle-option mx-2">Mid</label>

                                            <input type="radio" id="option3" name="difficulty" value="hard"
                                                {{ old('difficulty', 'easy') == 'hard' ? 'checked' : '' }}>
                                            <label for="option3" class="toggle-option mx-2">Hard</label>
                                        </div>
                                    </form>

                                </div>
                                <div class="leaderboard col-3 bg-gradient-primary">
                                    <div class="leaderboard-title text-l">
                                        Top 10 Users in POS Hunter
                                    </div>
                                    <div class="leaderboard-list text-s">

                                        @foreach ($posHunter as $index => $user)
                                            <div class="leaderbord-user  my-3"
                                                @if ($index % 2 == 0) style="background-color: #4e72df49" @endif>
                                                <div class="leaderboard-place">
                                                    {{ $index + 1 }}
                                                </div>
                                                {{ $user->fname }}
                                                <div class="points">{{ $user->total_points }} points</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box" data-box="2">
                            <div class="box1">
                                <img class="game_logo" src="{{ asset('img/games_logo/sentencefixer.png') }}"
                                    alt="none">
                                <div class="text-gray-900 font-weight-bold text-xxl">Sentence Fixer</div>
                            </div>

                            <div class="box-outside">
                                <div class="box-inside">
                                    <img class="game_logo" src="{{ asset('img/games_logo/sentencefixer.png') }}"
                                        alt="none">
                                    <div class="text-gray-900 font-weight-bold text-xxl">Sentence Fixer</div>

                                    <div class="game-progress">
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $progressPercentagesentencefixer }}%"
                                                aria-valuenow="{{ $progressPercentagesentencefixer }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between text-s">
                                            <div>Level {{ $levelsentencefixer }}</div>
                                            <div>{{ $currentLevelPointssentencefixer }}/200</div>
                                            <div>Level {{ $levelsentencefixer + 1 }}</div>
                                        </div>
                                    </div>

                                    <!-- Form for difficulty level selection -->
                                    <form action="{{ route('sentencefixer') }}" method="GET"
                                        class="d-flex flex-column justify-content-center align-items-center">
                                        <button type="submit" class="play-button btn btn-primary mt-5 text-xl px-5">
                                            Play
                                        </button>

                                        <div class="text-s mt-4">Difficulty</div>
                                        <div class="difficulty-switch text-s text-gray-900">
                                            <input type="radio" id="option1" name="difficulty" value="easy"
                                                {{ old('difficulty', 'easy') == 'easy' ? 'checked' : '' }}>
                                            <label for="option1" class="toggle-option mx-2">Easy</label>

                                            <input type="radio" id="option2" name="difficulty" value="mid"
                                                {{ old('difficulty', 'easy') == 'mid' ? 'checked' : '' }}>
                                            <label for="option2" class="toggle-option mx-2">Mid</label>

                                            <input type="radio" id="option3" name="difficulty" value="hard"
                                                {{ old('difficulty', 'easy') == 'hard' ? 'checked' : '' }}>
                                            <label for="option3" class="toggle-option mx-2">Hard</label>
                                        </div>
                                    </form>

                                    {{-- <a href="{{ route('sentencefixer') }}"
                                        class="play-button btn btn-primary mt-5 text-xl px-5">
                                        Play
                                    </a> --}}
                                </div>
                                <div class="leaderboard col-3 bg-gradient-primary">
                                    <div class="leaderboard-title text-l">
                                        Top 20 Users in Sentence Fixer
                                    </div>
                                    <div class="leaderboard-list text-s">
                                        @foreach ($posHunter as $index => $user)
                                            <div class="leaderbord-user  my-3"
                                                @if ($index % 2 == 0) style="background-color: #4e72df49" @endif>
                                                <div class="leaderboard-place">
                                                    {{ $index + 1 }}
                                                </div>
                                                {{ $user->fname }}
                                                <div class="points">{{ $user->total_points }} points</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box" data-box="3">
                            <div class="box1">
                                <img class="game_logo" src="{{ asset('img/games_logo/tensechallenge.png') }}"
                                    alt="none">
                                <div class="text-gray-900 font-weight-bold text-xxl">Tense Challenge</div>
                            </div>

                            <div class="box-outside">
                                <div class="box-inside">
                                    <img class="game_logo" src="{{ asset('img/games_logo/tensechallenge.png') }}"
                                        alt="none">
                                    <div class="text-gray-900 font-weight-bold text-xxl">Tense Challenge</div>

                                    <div class="game-progress">
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $progressPercentagetensechallenge }}%"
                                                aria-valuenow="{{ $progressPercentagetensechallenge }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between text-s">
                                            <div>Level {{ $leveltensechallenge }}</div>
                                            <div>{{ $currentLevelPointstensechallenge }}/200</div>
                                            <div>Level {{ $leveltensechallenge + 1 }}</div>
                                        </div>
                                    </div>

                                    <!-- Form for difficulty level selection -->
                                    <form action="{{ route('tensechallenge') }}" method="GET"
                                        class="d-flex flex-column justify-content-center align-items-center">
                                        <button type="submit" class="play-button btn btn-primary mt-5 text-xl px-5">
                                            Play
                                        </button>

                                        <div class="text-s mt-4">Difficulty</div>
                                        <div class="difficulty-switch text-s text-gray-900">
                                            <input type="radio" id="option1" name="difficulty" value="easy"
                                                {{ old('difficulty', 'easy') == 'easy' ? 'checked' : '' }}>
                                            <label for="option1" class="toggle-option mx-2">Easy</label>

                                            <input type="radio" id="option2" name="difficulty" value="mid"
                                                {{ old('difficulty', 'easy') == 'mid' ? 'checked' : '' }}>
                                            <label for="option2" class="toggle-option mx-2">Mid</label>

                                            <input type="radio" id="option3" name="difficulty" value="hard"
                                                {{ old('difficulty', 'easy') == 'hard' ? 'checked' : '' }}>
                                            <label for="option3" class="toggle-option mx-2">Hard</label>
                                        </div>
                                    </form>

                                    {{-- <a href="{{ route('tensechallenge') }}"
                                        class="play-button btn btn-primary mt-5 text-xl px-5">
                                        Play
                                    </a> --}}
                                </div>
                                <div class="leaderboard col-3 bg-gradient-primary">
                                    <div class="leaderboard-title text-l">
                                        Top 20 Users in Tense Challenge
                                    </div>
                                    <div class="leaderboard-list text-s">
                                        @foreach ($posHunter as $index => $user)
                                            <div class="leaderbord-user  my-3"
                                                @if ($index % 2 == 0) style="background-color: #4e72df49" @endif>
                                                <div class="leaderboard-place">
                                                    {{ $index + 1 }}
                                                </div>
                                                {{ $user->fname }}
                                                <div class="points">{{ $user->total_points }} points</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box" data-box="4">
                            <div class="box1">
                                <img class="game_logo" src="{{ asset('img/games_logo/sentencesorter.png') }}"
                                    alt="none">
                                <div class="text-gray-900 font-weight-bold text-xxl">Sentence Sorter</div>
                            </div>

                            <div class="box-outside">
                                <div class="box-inside">
                                    <img class="game_logo" src="{{ asset('img/games_logo/sentencesorter.png') }}"
                                        alt="none">
                                    <div class="text-gray-900 font-weight-bold text-xxl">Sentence Sorter</div>
                                    <div class="game-progress">
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $progressPercentagesentencesorter }}%"
                                                aria-valuenow="{{ $progressPercentagesentencesorter }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between text-s">
                                            <div>Level {{ $levelsentencesorter }}</div>
                                            <div>{{ $currentLevelPointssentencesorter }}/200</div>
                                            <div>Level {{ $levelsentencesorter + 1 }}</div>
                                        </div>
                                    </div>

                                    <!-- Form for difficulty level selection -->
                                    <form action="{{ route('sentencesorter') }}" method="GET"
                                        class="d-flex flex-column justify-content-center align-items-center">
                                        <button type="submit" class="play-button btn btn-primary mt-5 text-xl px-5">
                                            Play
                                        </button>

                                        <div class="text-s mt-4">Difficulty</div>
                                        <div class="difficulty-switch text-s text-gray-900">
                                            <input type="radio" id="option1" name="difficulty" value="easy"
                                                {{ old('difficulty', 'easy') == 'easy' ? 'checked' : '' }}>
                                            <label for="option1" class="toggle-option mx-2">Easy</label>

                                            <input type="radio" id="option2" name="difficulty" value="mid"
                                                {{ old('difficulty', 'easy') == 'mid' ? 'checked' : '' }}>
                                            <label for="option2" class="toggle-option mx-2">Mid</label>

                                            <input type="radio" id="option3" name="difficulty" value="hard"
                                                {{ old('difficulty', 'easy') == 'hard' ? 'checked' : '' }}>
                                            <label for="option3" class="toggle-option mx-2">Hard</label>
                                        </div>
                                    </form>

                                    {{-- <a href="{{ route('sentencesorter') }}"
                                        class="play-button btn btn-primary mt-5 text-xl px-5">
                                        Play
                                    </a> --}}
                                </div>
                                <div class="leaderboard col-3 bg-gradient-primary">
                                    <div class="leaderboard-title text-l">
                                        Top 20 Users in Sentence Sorter
                                    </div>
                                    <div class="leaderboard-list text-s">
                                        @foreach ($posHunter as $index => $user)
                                            <div class="leaderbord-user  my-3"
                                                @if ($index % 2 == 0) style="background-color: #4e72df49" @endif>
                                                <div class="leaderboard-place">
                                                    {{ $index + 1 }}
                                                </div>
                                                {{ $user->fname }}
                                                <div class="points">{{ $user->total_points }} points</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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

<script>
    const container = document.getElementById('flexContainer');
    const boxes = container.querySelectorAll('.box');

    boxes.forEach(box => {

        const box1 = box.querySelector('.box1');
        const boxOutside = box.querySelector('.box-outside');

        // Initially, show only `box1` and hide `box-outside`
        box1.style.display = 'flex';
        boxOutside.style.display = 'none';

        box.addEventListener('click', () => {
            // Remove existing full-width and underneath classes
            boxes.forEach(b => {
                b.classList.remove('full-width', 'underneath');

                const otherBox1 = b.querySelector('.box1');
                const otherBoxOutside = b.querySelector('.box-outside');

                otherBox1.style.display = 'flex';
                otherBoxOutside.style.display = 'none';
            });

            // Toggle the clicked box to show `box-outside` and hide `box1`
            box1.style.display = 'none';
            boxOutside.style.display = 'flex';

            // Apply full-width to the clicked box
            box.classList.add('full-width');

            // Apply underneath to other boxes
            boxes.forEach(b => {
                if (b !== box) {
                    b.classList.add('underneath');
                }
            });
        });
    });

    // Logic to handle clicking a box underneath to swap it to the top
    container.addEventListener('click', (e) => {
        const clickedBox = e.target.closest('.box');
        if (!clickedBox || clickedBox.classList.contains('full-width')) return;

        // Move the clicked box to full-width and reset others
        boxes.forEach(box => box.classList.remove('full-width', 'underneath'));
        clickedBox.classList.add('full-width');
        boxes.forEach(box => {
            if (box !== clickedBox) {
                box.classList.add('underneath');
            }
        });
    });
</script>

{{-- <script>
    const container = document.getElementById('flexContainer');
    const boxes = container.querySelectorAll('.box');

    boxes.forEach(box => {
        box.addEventListener('click', () => {
            // Check if the clicked box is already full-width
            if (box.classList.contains('full-width')) {
                // Reset all divs to initial state
                resetDivs();
            } else {
                // Remove existing full-width and underneath classes
                boxes.forEach(b => {
                    b.classList.remove('full-width', 'underneath');
                });

                // Apply full-width to the clicked box
                box.classList.add('full-width');

                // Apply underneath to other boxes
                boxes.forEach(b => {/
                    if (b !== box) {
                        b.classList.add('underneath');
                    }
                });
            }
        });
    });

    // Reset all divs to their initial state
    function resetDivs() {
        boxes.forEach(box => {
            box.classList.remove('full-width', 'underneath');
        });
    }
</script> --}}

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</html>
