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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.css')}} rel=" stylesheet>
  <link href="{{ asset('css/style.css')}} rel=" stylesheet>
  <link href="{{ asset('css/bootstrap.min.css')}} rel=" stylesheet>
  <link href="{{ asset('css/responsive.css')}} rel=" stylesheet>
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- sidebar -->

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
            <img src="{{ Vite::asset('resources/images/Logo.svg') }}" style="width: 6em;height: 4em;margin-left: 5em;"
              class="img-fluid" alt="Logo">
          </a>
        </div>
        <div class="qodef-position-right">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="btn btn-outline-dark me-2" href="{{ route('login') }}"><i
                  class="fa-solid fa-right-to-bracket"></i></a>
              @endif
              @if (Route::has('register'))
              <a class="btn btn-outline-dark" href="{{ route('register') }}"><i class="fa-solid fa-users"></i></a>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

      @yield('footer')

    </main>
  </div>
</body>

</html>
@section('page-script')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
@endsection