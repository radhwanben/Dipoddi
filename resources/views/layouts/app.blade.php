<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

    <style>
        @font-face {
        font-family: OptimusPrinceps;
        src: url('../../fonts/*');
    }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-white text-black fixed-top">
    <div class="container-fluid">
        <div class="qodef-position-left">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/Logo.svg') }}" style="width: 6em;height: 4em;margin-left: 5em;" class="img-fluid" alt="Logo">
        </a>
        </div>
        <div class="qodef-position-right">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lifestyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                @guest
                    @if (Route::has('login'))
                        <a class="btn btn-outline-dark me-2" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i></a>
                    @endif
                    @if (Route::has('register'))
                        <a class="btn btn-outline-dark" href="{{ route('register') }}"><i class="fa-solid fa-users"></i></a>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                    </div>
                </div>
        </div>

            </div>
        </nav>
            @yield('slider')
        <main class="py-4">


            @yield('content')
        </main>
    </div>
</body>
</html>
