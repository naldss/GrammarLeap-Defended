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

                    <div class="home-container">
                        <div class="grammarleap-desc-box">
                            <div class="home-logo logo2 rotate-animate"></div>
                            <div class="grammarleap-desc text-gray-900">
                                <div class="grammarleap-welcome">
                                    Welcome to GrammarLeap!
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    GrammarLeap is your ultimate online platform for mastering English grammar through
                                    fun, interactive, and educational experiences. Designed for learners of all ages and
                                    levels, GrammarLeap combines engaging games, in-depth lessons, and collaborative
                                    quiz rooms to help you elevate your literacy skills while enjoying the journey.
                                </div>
                            </div>

                        </div>

                        <div class="xdiv"></div>
                        <strong class="text-lg text-gray-900">What You’ll Find on GrammarLeap </strong>


                        <div class="grammarleap-desc-box ">

                            <div class="grammarleap-desc text-gray-900 desc-right">
                                <div class="grammarleap-welcome">
                                    ClassicStudy
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Delve into grammar fundamentals with Classic Study, your go-to resource for
                                    comprehensive lessons. Organized by categories and levels, Classic Study covers
                                    everything from basic sentence structure to advanced grammar rules. Each lesson
                                    includes examples, practice exercises, and tips to solidify your understanding. It’s
                                    perfect for self-paced learning or brushing up on specific topics.
                                </div>
                            </div>
                            <div class="home-logo logo-classicstudy"></div>

                        </div>

                        {{-- <div class="grammarleap-desc-box">
                            <div class="home-logo logo-quizroom"></div>
                            <div class="grammarleap-desc text-gray-900">
                                <div class="grammarleap-welcome">
                                    QuizRooms
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Challenge your skills and collaborate with others in Quiz Rooms. Join or create
                                    rooms to participate in timed grammar quizzes that test your knowledge in real-time.
                                    Compare scores, track progress, and enjoy a competitive yet supportive environment.
                                    Whether you’re studying with classmates or aiming to beat your own high score, Quiz
                                    Rooms add a social dimension to your grammar journey.
                                </div>
                            </div>

                        </div> --}}



                        {{-- <div class="xdiv"></div> --}}

                        <div class="grammarleap-desc-box">
                            <div class="grammarleap-desc box-2 text-gray-900">
                                <strong class="text-xl">GAMES</strong>
                                <div class="grammarleap-desc-text text-lg text-center">

                                    Put your knowledge to the test and make learning grammar fun with our interactive
                                    games.
                                    GrammarLeap offers four exciting games designed to reinforce different aspects of
                                    grammar:
                                </div>
                            </div>
                        </div>

                        <div class="grammarleap-desc-box box-3">

                            <div class="grammarleap-desc text-gray-900 desc-right">
                                <div class="grammarleap-welcome">
                                    POS Hunter
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Identify parts of speech (POS) like nouns, verbs, adjectives, and selecting words
                                    into the correct categories. With three difficulty levels—Easy,
                                    Medium, and Hard—POS Hunter challenges your analytical thinking and linguistic
                                    knowledge.
                                </div>
                            </div>
                            <div class="home-logo-game logo-poshunter"></div>

                        </div>

                        <div class="grammarleap-desc-box box-3">
                            <div class="home-logo-game logo-sentencefixer"></div>
                            <div class="grammarleap-desc text-gray-900">
                                <div class="grammarleap-welcome">
                                    Sentence Fixer
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Correctly modify sabotaged sentences by fixing capitalization, and punctuation. Earn
                                    points based on accuracy as you reconstruct grammatically
                                    sound sentences. Perfect for sharpening your editing skills.
                                </div>
                            </div>

                        </div>

                        <div class="grammarleap-desc-box box-3">

                            <div class="grammarleap-desc text-gray-900 desc-right">
                                <div class="grammarleap-welcome">
                                    Tense Challenge
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Conquer the complexities of verb usage! Tackle challenges related to verb tenses,
                                    subject-verb agreement, and irregular verbs in thisgame. Tense Challenge
                                    ensures you never stumble over tricky verb forms again.
                                </div>
                            </div>
                            <div class="home-logo-game logo-tensechallenge"></div>

                        </div>

                        <div class="grammarleap-desc-box box-3">
                            <div class="home-logo-game logo-sentencesorter"></div>
                            <div class="grammarleap-desc text-gray-900">
                                <div class="grammarleap-welcome">
                                    Sentence Sorter
                                </div>
                                <div class="grammarleap-desc-text text-lg">
                                    Test your understanding of sentence types by drag-and-dropping sentences into their
                                    correct category of type os sentence.
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

</html>
