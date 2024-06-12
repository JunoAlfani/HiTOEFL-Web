<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('global') }}/img/titlelogo.svg" type="image/icon type" />

        <title>{{ config('Dashboard', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <style>
        .transform {
            transform: translateX(10%);
        }
    </style> --}}
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <img src="{{ asset('global/img/titlelogo.svg')}}" alt="" class="w-24 h-24">
                </a>
            </div>

            <br>

            <h1 class="font-sans text-center text-4xl text-sky-700 antialiased ">Welcome HiTOEFL</h1>
            <br>
            <p class="font-sans mb-3 text-center">don't have account ? <a href="{{route('register')}}" class="hover:underline">sign up now</a></p>


            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
