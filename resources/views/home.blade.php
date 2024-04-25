@extends('layout.css')
@extends('layout.header')
@extends('layout.footer')
@extends('layout.sidenav')
{{-- <!DOCTYPE html>
<html lang="en"> --}}

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

    <div class="page-content-wrapper">

        <!-- Welcome Toast -->
        <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert"
            aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
            <div class="toast-body">
                <i class="bi bi-bookmark-check text-white h1 mb-0"></i>
                <div class="toast-text ms-3 me-2">
                    <p class="mb-1 text-white">Welcome to KOPIM!</p>
                    <small class="d-block">Click the <strong>Add to Home Screen</strong> button &amp; enjoy it like an
                        app.</small>
                </div>
            </div>
            <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>

        <br>
        <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                {{-- <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/pwa.png" alt="">
                                </div> --}}
                                <p class="mb-0">Rp. {{ number_format($tagihan_sekarang, 0) }}</p>
                                <br>
                                <p class="mb-0" style="margin-top: -10px">Trx Hari ini</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                {{-- <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/bootstrap.png" alt="">
                                </div> --}}
                                <p class="mb-0">Rp. {{ number_format($aktif[0]->nominal + $angsuran + $iuran, 0) }}
                                </p>
                                <br>
                                <p class="mb-0" style="margin-top: -10px">Tagihan Bulan ini</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="feature-card mx-auto text-center">
                                {{-- <div class="card mx-auto bg-gray">
                                    <img src="img/demo-img/js.png" alt="">
                                </div> --}}
                                <p class="mb-0">Rp. {{ number_format($iuran, 0) }}</p>
                                <br>
                                <p class="mb-0" style="margin-top: -10px">Iuran Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- Price Table Two -->
                    <div class="price-table-two d-flex align-items-center">

                        <!-- Single Price Table -->
                        <div class="single-price-table active-effect">
                            <div class="text">
                                <h6 class="fz-14">Simpanan Pokok</h6>
                            </div>
                            <div class="price" style="margin-top: 10px">
                                <h3>Rp. {{ number_format($simpok, 0) }}</h3>
                                <span class="fz-12">end of {{ date('Y') }}</span>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table active-effect">
                            <div class="text">
                                <h6 class="fz-14">Simpanan Wajib</h6>
                            </div>
                            <div class="price" style="margin-top: 10px">
                                <h3>Rp. {{ number_format($simwa, 0) }}</h3>
                                <span class="fz-12">end of {{ date('Y') }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <br>

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

        <div class="pb-3"></div>
    </div>
</body>

{{-- </html> --}}
