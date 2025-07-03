<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="header">
                <span class="header__span">We Make Your Feel Comfortable</span>
                <div class="header__nav">
                    <div id="hamburguerMenu" class="header__nav__hamburguer">
                        <span class="header__nav__hamburguer__bar"></span>
                        <span class="header__nav__hamburguer__bar"></span>
                        <span class="header__nav__hamburguer__bar"></span>
                    </div>
                    <a href="{{ url('/') }}"><img class="header__nav__logo" src="/assets/logo.svg" alt="Hotel Miranda"></a>
                    <nav class="header__nav__menu">
                        <ul class="header__nav__menu__list">
                            <li class="header__nav__menu__list__item"><a href="{{ url('/about') }}">About Us</a></li>
                            <li class="header__nav__menu__list__item"><a href="{{ url('/rooms') }}">Rooms</a></li>
                            <li class="header__nav__menu__list__item"><a href="{{ url('/offers') }}">Offers</a></li>
                            <li class="header__nav__menu__list__item"><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__actions">
                    <img src="/assets/icos/user.svg" alt="User Ico">
                    <img src="/assets/icos/search.svg" alt="Search Ico">
                </div>
            </header>

            <div id="overlay" class="overlay">
                <ul class="overlay__list">
                    <li class="overlay__list__item"><a href="./about.html">About Us</a></li>
                    <li class="overlay__list__item"><a href="./rooms.html">Rooms</a></li>
                    <li class="overlay__list__item"><a href="./offers.html">Offers</a></li>
                    <li class="overlay__list__item"><a href="./contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
