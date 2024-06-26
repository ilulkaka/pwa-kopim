</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KOPIM - Koperasi Insan Mandiri">
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
    @yield('header')

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
                        <h6 class="user-name mb-0">{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->email }}</span>
                    </div>
                    <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                </div>

                <!-- Sidenav Nav -->
                <ul class="sidenav-nav ps-0">
                    <li>
                        <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('qrcode') }}"><i class="bi bi-qr-code"></i> QR Code</a>
                    </li> --}}
                    {{-- <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_qrCode"><i
                                class="bi bi-qr-code"></i> QR Code
                        </a>
                    </li> --}}
                    <li>
                        <a href="elements.html"><i class="bi bi-folder2-open"></i> Elements
                            <span class="badge bg-danger rounded-pill ms-2">220+</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('details') }}"><i class="bi bi-collection"></i> Detail
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

    @yield('sidenav')

    <!-- Footer Nav -->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content -->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    {{-- <li class="active"> --}}
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bi bi-house"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('details') }}">
                            <i class="bi bi-collection"></i>
                            <span>Detail</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('vError') }}">
                            <i class="bi bi-folder2-open"></i>
                            <span>Elements</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('vError') }}">
                            <i class="bi bi-chat-dots"></i>
                            <span>Chat</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('settings') }}">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('footer')

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

    <script src="{{ asset('/assets/js/datatables.min.js') }}"></script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
</body>

</html>
@yield('script')
