@extends('layouts.app')

@section('content')
<div class="container" style="
    padding-top: 7em;
">
<section class="login-main-wrapper">
    <div class="main-container">
        <div class="login-process">
            <div class="login-main-container">
                <div class="thankyou-wrapper">
                    <h1>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRydBhEl_V6JrDFwcQWcmEEw9XrSIZPW_JInuaZxT3W6Q&s" alt="thanks">
                    </h1>
                    <p>
                        Merci d'avoir choisi nos services. Veuillez vérifier votre courrier électronique pour des informations détaillées concernant le programme.
                    </p>
                    <a class="btn btn-success" href="{{ route('home') }}">Back to Home</a>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</section>
</div>

@endsection
