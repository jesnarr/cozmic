<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cozmic Solar PH {{ $pageTitle ?? '' }}</title>
    <!-- Styles -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6121032531609842" crossorigin="anonymous"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .banner-1 {
            background: url(/img/banner6.jpeg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .banner-2 {
            background: url(/img/banner7.jpeg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .banner-3 {
            background: url(/img/banner8.jpeg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .slider {
            overflow: hidden;
        }

        .slider>figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
        }

        .slider>figure>div {
            width: 20%;
            height: 100vh;
            float: left;
            z-index: 0;
        }

        @keyframes slider {
            0% {
                left: 0;
            }

            25% {
                left: 0;
            }

            50% {
                left: -100%;
            }

            75% {
                left: -100%;
            }

            100% {
                left: -200%;
            }
        }

    </style>
    @stack('styles')
    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="!bg-white">
    @include('partials.navbar')

    @include('partials.carousel')


    @include('section.services')

    @include('section.mission-vision')
    {{-- @include('section.values') --}}
    @include('section.video')
    @include('section.about')



    @include('section.pricing')

    @include('section.contact')

    @stack('modals')

    @include('section.footer')

    @livewireScripts
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger)

        gsap.from('.tw-service-card-1', {
            scrollTrigger: '#services',
            duration: 1,
            opacity: 1,
            x: -500,
            stagger: 0.1
        })

        gsap.from('.tw-service-card-2', {
            scrollTrigger: '.tw-service-card-1',
            duration: 1,
            opacity: 1,
            y: 500,
            stagger: 0.5
        })

        gsap.from('.tw-service-card-3', {
            scrollTrigger: '.tw-service-card-2',
            duration: 1,
            opacity: 1,
            x: 500,
            stagger: 0.5
        })

        gsap.from('.tw-service-card-4', {
            scrollTrigger: '.tw-service-card-3',
            duration: 1,
            opacity: 1,
            x: 500,
            stagger: 0.1
        })

        gsap.from('.tw-service-card-5', {
            scrollTrigger: '.tw-service-card-4',
            duration: 1,
            opacity: 0,
            y: -500,
            stagger: 0.5
        })

        gsap.from('.tw-service-card-6', {
            scrollTrigger: '.tw-service-card-5',
            duration: 1,
            opacity: 1,
            x: -500,
            stagger: 0.5
        })

        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: true,
                mirror: false
            });
        }
        window.addEventListener('load', () => {
            aos_init();
        });
    </script>

</body>

</html>
