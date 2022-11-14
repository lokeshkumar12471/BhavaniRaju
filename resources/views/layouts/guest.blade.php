<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Neopolis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/wallpaper/logo.png') }}" />

    <!-- Css -->
    <link href="{{ asset('frontend/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/libs/swiper/css/swiper.min.css') }}" rel="stylesheet" />

    <!-- Main Css -->
    <link href="{{ asset('frontend/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwind.min.css') }}" />
</head>

<body>
    @include('layouts.frontend.header')
    {{ $slot }}
    @include('layouts.frontend.footer')

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- Switcher -->
    <div class="fixed top-1/4 -right-1 z-3">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('frontend/assets/libs/tobii/js/tobii.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/libs/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
