<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leads GHG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/digisaka_logo.png') }}">
</head>

<style>
    body {
        color: #43404a;
        background: #f8f8f8;
        position: relative;
        height: 100%;
    }

    .border-right {
        border-right: none;
    }

    .border-left {
        border-left: none;
    }

    .nav-margin-auto {
        margin-left: auto !important;
    }


    /* Metrics Section */
    .metrics-section {
        background-color: #ffffff;
        padding: 50px 20px;
        text-align: center;
    }

    .metrics-section .container {
        display: flex;
        justify-content: space-around;
        max-width: 1200px;
        margin: 0 auto;
    }

    .metrics-section h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .metrics-section p {
        margin: 0;
        font-size: 1rem;
    }

    @media (min-width: 1024px) {
        .border-right {
            border-right: 2px solid white;
            /* Set the color and thickness as needed */
        }

        .border-left {
            border-left: 2px solid white;
            /* Set the color and thickness as needed */
        }


    }

    @media(max-width:1024px) {
        .nav-margin-auto {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    ul {
        list-style-type: none;
    }

    ul li {
        padding: 5px;
    }

    .fs-7 {
        font-size: .75rem !important;
    }

    #locationCarousel .carousel-inner .carousel-item img {
        background-color: #28c76f; 
        height: 80vh;
        object-fit: cover;
    }
</style>

<body>
    <nav style="background-color: rgba(40, 199, 111, 0.9);
    z-index: 99;" class="navbar navbar-expand-lg" data-bs-theme="dark">

        <div class="container-fluid mx-5">
            {{-- <a class="navbar-brand border-right p-2" style="border-right:none;font-size: 37px;font-weight: bold;"
                href="#"><span style="color: #00d7a9;font-size:37px"><img
                        src="{{ asset('images/digisaka_logo.png') }}" style="width:112px;"> GH</span>G</a> --}}
            <a class="navbar-brand border-right p-2" style="border-right:none;font-size: 37px;font-weight: bold;"
                href="https://www.digisaka.com/" target="_blank"><span style="color: #00d7a9;font-size:37px">
                    <img src="{{ asset('images/digisakaweb.png') }}" style="width:112px">
                    <img src="{{ asset('images/carbon-credit-mrv.png') }}" style="width:85px">
            </a>
            {{-- <a class="navbar-brand border-right p-2" style="border-right:none;font-size: 37px;font-weight: bold;"
                href="https://tanodtractor.com" target="_blank"><span style="color: #00d7a9;font-size:37px">
                    <img src="{{ asset('images/tanodtracktor.png') }}" style="width:112px"></a> --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav nav-margin-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dual-monitoring') ? 'active' : '' }}"
                            href="{{ route('dual_monitoring') }}">How do we monitor?</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('multidisciplinary-approach') ? 'active' : '' }}"
                            href="{{ route('multidisciplinary_approach') }}">Our Multidisciplinary Approach</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('our-framework') ? 'active' : '' }}"
                            href="{{ route('our_framework') }}">Framework Behind</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('marketplace') ? 'active' : '' }}"
                            href="{{ route('marketplace.index') }}">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blockchain') ? 'active' : '' }}"
                            href="{{ route('blockchain') }}">Blockchain</a>
                    </li>
                </ul>

                <div class="p-2 border-left">
                    <a href="{{ route('contact_us') }}" class="btn btn-outline-light buttons">CONTACT US</a>
                    {{-- <a href="#" class="btn btn-light buttons">SIGN IN</a> --}}
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.map_key') }}&libraries=geometry" async defer>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    @stack('scripts')
</body>

</html>
