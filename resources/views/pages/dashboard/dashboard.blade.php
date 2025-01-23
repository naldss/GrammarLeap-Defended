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
                <div class="">

                    <div class="row">
                        <div class="col-8 progress-and-analysis-container">
                            <div class="card mb-3 shadow-sm">
                                <div class="d-flex justify-content-between card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-lg text-primary">Classic Study Progress</h6>
                                    <a href="{{ route('classicstudy') }}" class="text-s btn btn-primary">Open Classic
                                        Study</a>
                                </div>
                                <div class="card-body">
                                    <div class="mb-1 small">Classic Study Progress</div>

                                    <div class="">
                                        <div class="progress mb-1">
                                            <div class="progress-bar bg-gradient-success" role="progressbar"
                                                style="width: {{ $completionPercentage }}%"
                                                aria-valuenow="{{ $completionPercentage }}" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between text-s">
                                            <div>0% Completion</div>
                                            <div>100% Completion</div>
                                        </div>
                                    </div>


                                    {{-- <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="card mb-2 shadow-sm">
                                <div class="d-flex justify-content-between card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-lg text-primary">GrammarLeap Games</h6>
                                    <a href="{{ route('games') }}" class="text-s btn btn-primary">Open Games</a>
                                </div>

                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <strong class="game-name text-gray-800">POS Hunter</strong>
                                            <div class="mastery-level small text-gray-800">Mastery Level:
                                                {{ $levelposhunter }}</div>
                                        </div>

                                        <div class="game-progress col-9 ml-4">
                                            <div class="progress mb-1">
                                                <div class="progress-bar bg-gradient-info" role="progressbar"
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
                                    </div>
                                </div>
                                <div class="xdiv xdiv-long"></div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <strong class="game-name text-gray-800">Sentence Fixer</strong>
                                            <div class="mastery-level small text-gray-800">Mastery Level:
                                                {{ $levelsentencefixer }}</div>
                                        </div>

                                        <div class="game-progress col-9 ml-4">
                                            <div class="progress mb-1">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar"
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
                                    </div>
                                </div>
                                <div class="xdiv xdiv-long"></div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <strong class="game-name text-gray-800">Tense Challenge</strong>
                                            <div class="mastery-level small text-gray-800">Mastery Level:
                                                {{ $leveltensechallenge }}</div>
                                        </div>

                                        <div class="game-progress col-9 ml-4">
                                            <div class="progress mb-1">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar"
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
                                    </div>
                                </div>
                                <div class="xdiv xdiv-long"></div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <strong class="game-name text-gray-800">Sentence Sorter</strong>
                                            <div class="mastery-level small text-gray-800">Mastery Level:
                                                {{ $levelsentencesorter }}</div>
                                        </div>

                                        <div class="game-progress col-9 ml-4">
                                            <div class="progress mb-1">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar"
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
                                    </div>
                                </div>


                            </div>
                        </div>



                        <div class="col-4 mission-container bg-gradient-primary pb-3">
                            <div class="text-lg text-gray-100">Daily Missions</div>
                            @if ($userMissions->isNotEmpty())
                                @foreach ($userMissions as $userMission)
                                    <div class="border-left-success mission-box mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-8">
                                                <strong
                                                    class="mission-title text-gray-100">{{ $userMission->mission->title }}</strong>
                                                <div class="mission-desc text-s text-gray-200">
                                                    {{ $userMission->mission->description }}</div>
                                            </div>
                                            <div class="center-object mission-status col-3 text-gray-300 text-xs">
                                                Status: {{ $userMission->completed ? 'Completed' : 'Not Completed' }}
                                            </div>
                                        </div>
                                        <div class="mission-status-claim mt-2">
                                            @if ($userMission->completed)
                                                @if ($userMission->claimed)
                                                    <button class="mission-claim" disabled
                                                        style="background-color: rgba(183, 183, 183, 0.273)">Points
                                                        Claimed</button>
                                                @elseif (!$userMission->claimed)
                                                    <button data-mission-id="{{ $userMission->mission_id }}"
                                                        onclick="submitClaimPoints(this)" class="mission-claim">Claim
                                                        Points</button>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- <div class="border-left-success mission-box mt-2">
                                <div class="d-flex justify-content-between">
                                    <div class="col-8">
                                        <strong class="mission-title text-gray-100">POS Hunter Challenge</strong>
                                        <div class="mission-desc text-s text-gray-200">Obtain 100% on one of your
                                            games.
                                        </div>
                                    </div>
                                    <div class="center-object mission-status col-3 text-gray-300 text-xs">
                                        Status: Incomplete
                                    </div>
                                </div>
                            </div> --}}
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
<audio id="result" src="{{ asset('audio/result.mp3') }}" type="audio/mpeg"></audio>
<script>
    function submitClaimPoints(link) {
        var missionId = link.getAttribute('data-mission-id');

        fetch('{{ route('claimpoints', '__MISSION_ID__') }}'.replace('__MISSION_ID__', missionId), {
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
                    // document.getElementById('result').play();
                    // document.querySelector(".dialog-bg").style.display = 'flex';
                    // document.querySelector(".dialog").innerHTML =
                    //     'Congratulations! Points Claimed Successfully.'

                } else {
                    // document.getElementById('error').play();
                    // document.querySelector(".dialog-bg").style.display = 'flex';
                    // document.querySelector(".dialog").innerHTML =
                    //     'Sorry! Points Claim Failed.'
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        location.reload();
    }
</script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</html>
