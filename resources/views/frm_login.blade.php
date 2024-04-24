<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Title -->
    <title>KOPIM - Koperasi Insan Mandiri</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/assets/img/core-img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/assets/img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('/assets/img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/icons/icon-180x180.png') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">

    <!-- Web App Manifest -->
    <link rel="manifest" href="{{ asset('/assets/manifest.json') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Internet Connection Status -->
    <div class="internet-connection-status" id="internetStatus"></div>

    <!-- Back Button -->
    {{-- <div class="login-back-button">
        <a href="hero-blocks.html">
            <i class="bi bi-arrow-left-short"></i>
        </a>
    </div> --}}

    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center px-4">
                {{-- <img class="login-intro-img" src="{{ asset('/assets/img/bg-img/36.png') }}" alt=""> --}}
            </div>

            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">Log in to continue to the Kopim</h6>

                <form action="{{ route('loginaksi') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" id="email" name="email" placeholder="Username">
                    </div>

                    <div class="form-group position-relative">
                        <input class="form-control" id="password" name="password" type="password"
                            placeholder="Enter Password">
                        <div class="position-absolute" id="password-visibility">
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-eye-slash"></i>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                </form>
            </div>

            <!-- Login Meta -->
            <div class="login-meta-data text-center">
                <a class="stretched-link forgot-password d-block mt-3 mb-1" href="#">Forgot
                    Password?</a>
                <p class="mb-0">Didn't have an account? <a class="stretched-link" href="#">Register
                        Now</a></p>
            </div>
        </div>
    </div>

    <!-- All JavaScript Files -->
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/slideToggle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/internet-status.js') }}"></script>
    <script src="{{ asset('/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('/assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('/assets/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vanilla-dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/index.js') }}"></script>
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dark-rtl.js') }}"></script>
    <script src="{{ asset('/assets/js/active.js') }}"></script>
    <script src="{{ asset('/assets/js/pwa.js') }}"></script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
</body>

</html>

<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {


    });
</script>
