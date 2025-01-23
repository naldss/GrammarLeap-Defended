<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dots-bg">

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="width: 100%;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div
                                class="bg-gradient-primary col-lg-6 d-flex flex-column justify-content-center align-items-center p-5">
                                <div class="home logo"></div>
                                <div class="app-name text-gray-100">
                                    GrammarLeap
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <strong class="text-xl text-gray-900">GrammarLeap Email Verification</strong>
                                    <p class="text-s text-gray-800 mb-5 mt-2">
                                        We've sent an email to your registered email address. Please check your
                                        inbox and click the link to
                                        verify your account.
                                    </p>
                                    <form id="resendForm" method="POST" action="{{ route('verification.send') }}"
                                        class="d-grid gap-2">
                                        @csrf
                                        <button class="btn btn-primary text-s" type="submit">Resend Verification
                                            Email</button>
                                    </form>

                                    <!-- Success Notification -->
                                    @if (session('status') == 'verification-link-sent')
                                        <div class="alert alert-success alert-dismissible fade show mt-3 text-center"
                                            role="alert" id="notification">
                                            A new verification link has been sent to your email address.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">


        <div class="card shadow p-5 mb-3 w-100 d-flex flex-column align-items-center justify-content-center"
            style="max-width: 500px;">
            <strong class=" mb-3 text-xl text-gray-900">GrammarLeap Email Verification</strong>
            <p class="text-center text-s text-gray-800 mb-5">
                GrammarLeap sent an email to your registered email address. Please check your inbox and click the link
                to
                verify your account.
            </p>
            <form id="resendForm" method="POST" action="{{ route('verification.send') }}" class="d-grid gap-2">
                @csrf
                <button class="btn btn-primary text-s" type="submit">Resend Verification Email</button>
            </form>

            <!-- Success Notification -->
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert"
                    id="notification">
                    A new verification link has been sent to your email address.
                </div>
            @endif
        </div>


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show notification if session status exists
            @if (session('status') == 'verification-link-sent')
                const notification = document.getElementById('notification');
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 10000); // Hide after 5 seconds
            @endif

            // Optional: Prevent double submission of the form
            const resendForm = document.getElementById('resendForm');
            resendForm.addEventListener('submit', function(e) {
                const button = resendForm.querySelector('button');
                button.disabled = true;
                button.textContent = 'Resending...';
            });
        });
    </script>
</body>

</html>
