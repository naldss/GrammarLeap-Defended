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
            <div id="content mt-0">
                <div class="row cs-container">
                    <div class="col-8 card shadow mb-4 p-0">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Classic Study Topics</h6>
                        </div>
                        <div class="card-body px-4 text-s cs-topics">


                            @if ($userTest->pretest_taken == 0)
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Pre-test Incomplete!</h4>
                                    <p>You must complete the pre-test to unlock access to the Classic Study contents.
                                    </p>
                                    <hr>
                                    <p class="mb-0">Take the pre-test on user classic study details in the far right
                                        of this page.</p>
                                </div>
                            @endif

                            <div class="@if ($userTest->pretest_taken == 0) topic-container disabled @endif">
                                {{-- foundational level --}}
                                <p class="m-3 mt-0">The <strong>Foundational Level</strong> introduces basic grammar
                                    skills,
                                    including
                                    sentence
                                    formation, proper capitalization, basic punctuation, and key parts of speech like
                                    nouns,
                                    verbs, and adjectives.</p>

                                @if ($allTopicFoundational->isEmpty())
                                    No topics found
                                @endif

                                @foreach ($allTopicFoundational as $TopicFoundational)
                                    @if (!empty($TopicFoundational->title))
                                        <a href="{{ route('classicstudytopic', $TopicFoundational->topic_id) }}"
                                            class="card mb-2 py-0 border-left-warning hover-bg-white">
                                            <div class="card-body text-gray-900">
                                                {{ $TopicFoundational->title }}
                                            </div>
                                        </a>
                                    @endif
                                @endforeach


                                {{-- Proficiency level --}}
                                <p class="m-3 mt-4">The <strong>Proficiency Level</strong> strengthens grammar skills
                                    with a
                                    focus on complex
                                    sentences, advanced punctuation, verb tenses, and correct usage of modifiers.</p>

                                @if ($allTopicProficiency->isEmpty())
                                    No topics found
                                @endif

                                {{-- @foreach ($allTopicProficiency as $TopicProficiency)
                                    <a href="{{ route('', $TopicProficiency->id) }}"
                                        class="card mb-2 py-0 border-left-primary hover-bg-white">
                                        <div class="card-body text-gray-900">
                                            {{ $TopicProficiency->title }}
                                        </div>
                                    </a>
                                @endforeach --}}

                                @foreach ($allTopicProficiency as $TopicProficiency)
                                    @if (!empty($TopicProficiency->title))
                                        <a href="{{ route('classicstudytopic', $TopicProficiency->topic_id) }}"
                                            class="card mb-2 py-0 border-left-primary hover-bg-white">
                                            <div class="card-body text-gray-900">
                                                {{ $TopicProficiency->title }}
                                            </div>
                                        </a>
                                    @endif
                                @endforeach

                                {{-- <a href="#" class="card mb-2 py-0 border-left-primary hover-bg-white">
                                    <div class="card-body text-gray-900">
                                        Parts of Speech: Pronouns
                                    </div>
                                </a> --}}




                                {{-- advanced level --}}
                                <p class="m-3 mt-4">The <strong>Advanced Level</strong> focuses on mastering nuanced
                                    grammar
                                    rules, complex
                                    sentence structures, and precise word usage.</p>

                                @if ($allTopicAdvanced->isEmpty())
                                    No topics found
                                @endif

                                @foreach ($allTopicAdvanced as $TopicAdvanced)
                                    @if (!empty($TopicAdvanced->title))
                                        <a href="{{ route('classicstudytopic', $TopicAdvanced->topic_id) }}"
                                            class="card mb-2 py-0 border-left-success hover-bg-white">
                                            <div class="card-body text-gray-900">
                                                {{ $TopicAdvanced->title }}
                                            </div>
                                        </a>
                                    @endif
                                @endforeach

                                {{-- @foreach ($allTopicAdvanced as $TopicAdvanced)
                                    <a href="{{ route('', $TopicAdvanced->id) }}"
                                        class="card mb-2 py-0 border-left-info hover-bg-white">
                                        <div class="card-body text-gray-900">
                                            {{ $TopicAdvanced->title }}
                                        </div>
                                    </a>
                                @endforeach --}}

                                {{-- <a href="#" class="card mb-2 py-0 border-left-info hover-bg-white">
                                    <div class="card-body text-gray-900">
                                        Parts of Speech: Nouns
                                    </div>
                                </a> --}}
                            </div>
                        </div>

                    </div>




                    <div class="col-3 card shadow mb-4 p-0 cs-user-details">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Classic Study Details</h6>
                        </div>
                        <div class="card-body px-4 cs-user-details">
                            <p class="text-gray-800">👤 <strong>{{ $name }}</strong></p>

                            <div class="card mb-2 py-0 shadow-sm">
                                <div class="card-body text-gray-700">
                                    <div>

                                        @if ($userTest->pretest_taken == 1)
                                            Pre-test Status: <strong class="text-success ml-1">Complete</strong>
                                            <div>Score: <strong
                                                    class="text-primary ml-1">{{ $userTest->pretest_score }}%
                                                    Accuracy</strong></div>
                                        @else
                                            Pre-test Status: <strong class="text-danger ml-1">Incomplete</strong>
                                        @endif


                                    </div>

                                    @if ($userTest->pretest_taken == 0)
                                        <a href="{{ route('pretest') }}" class="btn btn-primary btn-icon-split mt-2">
                                            <span class="text text-s">Take Pre-test</span>
                                        </a>
                                    @endif




                                    {{-- <a href="{{ route('pretest') }}" class="btn btn-primary btn-icon-split mt-2">
                                        <span class="text text-s">Take Pre-test</span>
                                    </a> --}}







                                </div>
                            </div>
                            <div class="card mb-2 py-0 shadow-sm">
                                <div class="card-body text-gray-700">
                                    Exercises Completion: <strong
                                        class="text-primary ml-1">{{ number_format($completionPercentage, 1) }}%</strong>
                                </div>
                            </div>
                            <div class="card mb-2 py-0 shadow-sm">
                                <div class="card-body text-gray-700">
                                    <div>
                                        Post-test Status:

                                        @if (!($completionPercentage == 100))
                                            <strong class="text-danger ml-1">Locked</strong>
                                        @else
                                            <strong class="text-success ml-1">Unlocked</strong>
                                        @endif
                                    </div>











                                    @if ($userTest->posttest_taken == 1)
                                        <div>Score: <strong class="text-primary ml-1">{{ $userTest->posttest_score }}%
                                                Accuracy</strong></div>
                                    @endif

                                    @if ($completionPercentage == 100)
                                        @if ($userTest->posttest_taken == 1)
                                            <a href="{{ route('posttest') }}"
                                                class="btn btn-warning btn-icon-split mt-2">
                                                <span class="text text-s">Retake Post-test</span>
                                            </a>
                                        @else
                                            <a href="{{ route('posttest') }}"
                                                class="btn btn-primary btn-icon-split mt-2">
                                                <span class="text text-s">Take Post-test</span>
                                            </a>
                                        @endif
                                    @endif

                                    {{-- @if (true)
                                        @if ($userTest->posttest_taken == 1)
                                            <a href="{{ route('posttest') }}"
                                                class="btn btn-warning btn-icon-split mt-2">
                                                <span class="text text-s">Retake Post-test</span>
                                            </a>
                                        @else
                                            <a href="{{ route('posttest') }}"
                                                class="btn btn-primary btn-icon-split mt-2">
                                                <span class="text text-s">Take Post-test</span>
                                            </a>
                                        @endif
                                    @endif --}}



                                    {{-- For Testing and Demo --}}
                                    {{-- @if ($userTest->posttest_taken == 1)
                                        <a href="{{ route('posttest') }}" class="btn btn-danger btn-icon-split mt-2">
                                            <span class="text text-s">Retake Post-test</span>
                                        </a>
                                    @else
                                        <a href="{{ route('posttest') }}" class="btn btn-primary btn-icon-split mt-2">
                                            <span class="text text-s">Take Post-test</span>
                                        </a>
                                    @endif --}}


                                </div>

                            </div>

                            <p class="mb-2 mt-5 text-s">Note:</p>
                            <p class="mb-1 text-s">You must complete the pre-test to unlock access to the Classic Study
                                contents.</p>
                            <p class="mb-1 text-s">You must complete 100% of the exercises to unlock access to the
                                Post-test.</p>
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
<script></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</html>
