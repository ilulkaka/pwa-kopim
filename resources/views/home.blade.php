@extends('layout.footer')
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
    <title>Affan - PWA Mobile HTML Template</title>

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

    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Logo Wrapper -->
                <div class="logo-wrapper">
                    <a href="home.html">
                        <img src="{{ asset('/assets/img/core-img/logo.png') }}" alt="">
                    </a>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                    data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                    <span class="d-block"></span>
                    <span class="d-block"></span>
                    <span class="d-block"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- # Sidenav Left -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
        aria-labelledby="affanOffcanvsLabel">

        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>

        <div class="offcanvas-body p-0">
            <div class="sidenav-wrapper">
                <!-- Sidenav Profile -->
                <div class="sidenav-profile bg-gradient">
                    <div class="sidenav-style1"></div>

                    <!-- User Thumbnail -->
                    <div class="user-profile">
                        <img src="{{ asset('/assets/img/bg-img/2.jpg') }}" alt="">
                    </div>

                    <!-- User Info -->
                    <div class="user-info">
                        <h6 class="user-name mb-0">Affan Islam1</h6>
                        <span>CEO, Designing World</span>
                    </div>
                </div>

                <!-- Sidenav Nav -->
                <ul class="sidenav-nav ps-0">
                    <li>
                        <a href="home.html"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li>
                        <a href="elements.html"><i class="bi bi-folder2-open"></i> Elements
                            <span class="badge bg-danger rounded-pill ms-2">220+</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages.html"><i class="bi bi-collection"></i> Pages
                            <span class="badge bg-success rounded-pill ms-2">100+</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-cart-check"></i> Shop</a>
                        <ul>
                            <li>
                                <a href="shop-grid.html"> Shop Grid</a>
                            </li>
                            <li>
                                <a href="shop-list.html"> Shop List</a>
                            </li>
                            <li>
                                <a href="shop-details.html"> Shop Details</a>
                            </li>
                            <li>
                                <a href="cart.html"> Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html"> Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('settings') }}"><i class="bi bi-gear"></i> Settings</a>
                    </li>
                    <li>
                        <div class="night-mode-nav">
                            <i class="bi bi-moon"></i> Night Mode
                            <div class="form-check form-switch">
                                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('logoutaksi') }}"><i class="bi bi-box-arrow-right"></i>
                            Logout</a>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                    </li>
                </ul>

                <!-- Social Info -->
                <div class="social-info-wrap">
                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>

                <!-- Copyright Info -->
                <div class="copyright-info">
                    <p>
                        <span id="copyrightYear"></span>
                        &copy; Made by <a href="#">Designing World</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">

        <!-- Welcome Toast -->
        <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert"
            aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
            <div class="toast-body">
                <i class="bi bi-bookmark-check text-white h1 mb-0"></i>
                <div class="toast-text ms-3 me-2">
                    <p class="mb-1 text-white">Welcome to Affan!</p>
                    <small class="d-block">Click the <strong>Add to Home Screen</strong> button &amp; enjoy it like an
                        app.</small>
                </div>
            </div>
            <button class="btn btn-close btn-close-white position-absolute p-1" type="button"
                data-bs-dismiss="toast" aria-label="Close"></button>
        </div>

        <!-- Tiny Slider One Wrapper -->
        <div class="tiny-slider-one-wrapper">
            <div class="tiny-slider-one">
                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/31.jpg')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">Build with Bootstrap 5</h3>
                                <p class="text-white mb-4">Build fast, responsive sites with Bootstrap.</p>
                                <a class="btn btn-creative btn-warning" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/33.jpg')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">Vanilla JavaScript</h3>
                                <p class="text-white mb-4">The whole code is written with vanilla JS.</p>
                                <a class="btn btn-creative btn-warning" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/32.jpg')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">PWA Ready</h3>
                                <p class="text-white mb-4">Click the "Add to Home Screen" button &amp; <br> enjoy it
                                    like an app.</p>
                                <a class="btn btn-creative btn-warning" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/33.jpg')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">Lots of Elements &amp; Pages</h3>
                                <p class="text-white mb-4">Create your website in days, not months.</p>
                                <a class="btn btn-creative btn-warning" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/1.jpg')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">Dark &amp; RTL Ready</h3>
                                <p class="text-white mb-4">You can use the Dark or <br> RTL mode of your choice.</p>
                                <a class="btn btn-creative btn-warning" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-3"></div>

        <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/pwa.png" alt="">
                                </div>
                                <p class="mb-0">PWA Ready</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/bootstrap.png" alt="">
                                </div>
                                <p class="mb-0">Bootstrap 5</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/js.png" alt="">
                                </div>
                                <p class="mb-0">Vanilla JS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card card-bg-img bg-img bg-overlay mb-3" style="background-image: url('img/bg-img/3.jpg')">
                <div class="card-body direction-rtl p-4">
                    <h2 class="text-white">Reusable elements</h2>
                    <p class="mb-4 text-white">More than 220+ reusable modern design elements. Just copy the code and
                        paste it on
                        your desired page.</p>
                    <a class="btn btn-warning" href="elements.html">All elements</a>
                </div>
            </div>
        </div>

        <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/sass.png" alt="">
                                </div>
                                <p class="mb-0">SCSS</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/npm.png" alt="">
                                </div>
                                <p class="mb-0">npm</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/gulp.png" alt="">
                                </div>
                                <p class="mb-0">Gulp 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card bg-primary mb-3 bg-img" style="background-image: url('img/core-img/1.png')">
                <div class="card-body direction-rtl p-4">
                    <h2 class="text-white">Ready pages</h2>
                    <p class="mb-4 text-white">Already designed more than 100+ pages for your needs. Such as -
                        Authentication,
                        Chats, eCommerce, Blog &amp; Miscellaneous pages.</p>
                    <a class="btn btn-warning" href="pages.html">All Pages</a>
                </div>
            </div>
        </div>

        <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/dark.png" alt="">
                                </div>
                                <p class="mb-0">Dark Mode</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/rtl.png" alt="">
                                </div>
                                <p class="mb-0">RTL Ready</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/code.png" alt="">
                                </div>
                                <p class="mb-0">Easy Code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h3>Customer Review</h3>

                    <div class="testimonial-slide-three-wrapper">
                        <div class="testimonial-slide3 testimonial-style3">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <div class="text-content">
                                    <span class="d-inline-block badge bg-warning mb-2">
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                    <h6 class="mb-2">The code looks clean, and the designs are excellent. I
                                        recommend.</h6>
                                    <span class="d-block">Mrrickez, Themeforest</span>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <div class="text-content">
                                    <span class="d-inline-block badge bg-warning mb-2">
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                    <h6 class="mb-2">All complete, <br> great craft.</h6>
                                    <span class="d-block">Mazatlumm, Themeforest</span>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <div class="text-content">
                                    <span class="d-inline-block badge bg-warning mb-2">
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                    <h6 class="mb-2">Awesome template! <br> Excellent support!</h6>
                                    <span class="d-block">Vguntars, Themeforest</span>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <div class="text-content">
                                    <span class="d-inline-block badge bg-warning mb-2">
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill me-1"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                    <h6 class="mb-2">Nice modern design, <br> I love the product.</h6>
                                    <span class="d-block">electroMEZ, Themeforest</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container direction-rtl">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/star.png" alt="">
                                </div>
                                <p class="mb-0">Best Rated</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/elegant.png" alt="">
                                </div>
                                <p class="mb-0">Elegant</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/lightning.png" alt="">
                                </div>
                                <p class="mb-0">Trendsetter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-3"></div>
    </div>

    <!-- Footer Nav -->


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
</body>

</html>
