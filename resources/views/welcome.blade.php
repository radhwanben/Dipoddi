@extends('layouts.app')

@section('slider')
<div class="d-flex flex-column align-items-center justify-content-center vh-100" data-mdb-ride="carousel">
            <!-- Background video -->
            <video autoplay muted loop class="position-absolute w-100 ">
                <source src="{{ Vite::asset('resources/video/59.mp4') }}" type="video/mp4">
            </video>

            <!-- Content container -->
            <div class="position-absolute inset-0 d-flex align-items-center justify-content-center">
                <div class="emphasis-title m-0">
                    <h1 class="text-white text-4xl font-bold mb-4">Welcome to Our Website</h1>
                    <p class="text-white text-lg mb-6">MON PROGRAMME</p>
                    <a href="#" class="btn btn-danger btn-lg">Get Started</a>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="container-fluid" style="background-image:url('https://dipoddi.com/wp-content/uploads/2022/07/Rayures.png');">
    <!-- Header -->
    <div class="text-center py-10">
        <h1 class="display-1 text-uppercase">Boutique Fitness</h1>
        <p class="lead">Dépasse tes limites et donne une nouvelle dimension à ta performance avec nos solutions nutritionnelles spécialement conçues pour les athlètes. Ces compléments alimentaires sont la clé pour transformer tes séances d'entraînement et atteindre une excellence sportive sans précédent.</p>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center mb-12">
            <!-- Repeat this div for each card, changing the background image URL and content as needed -->
            <div class="col-md-4 mb-4">
                <div class="card bg-transparent border-0" style="background-image: url('https://dipoddi.com/wp-content/uploads/2022/07/gratuit-min.jpg');">
                    <div class="card-body text-center text-white">
                        <h3 class="card-title font-weight-bold mb-4">PROGRAMME PERSONNALISÉ</h3>
                        <p class="card-text mb-5">- Débute ton parcours sur mesure en salle et profite d'un bilan hebdomadaire.</p>
                        <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i class="bi bi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- ... Other cards -->
            <div class="col-md-4 mb-4">
                <div class="card bg-transparent border-0" style="background-image: url('https://dipoddi.com/wp-content/uploads/2023/05/kine-min-2.jpg');">
                    <div class="card-body text-center text-white">
                        <h3 class="card-title font-weight-bold mb-4">PROGRAMME MAISON</h3>
                        <p class="card-text mb-5">- Découvre et profite d'un entraînement hebdomadaire sur mesure, à réaliser chez toi.</p>
                        <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i class="bi bi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- Another card example -->
            <div class="col-md-4 mb-4">
                <div class="card bg-transparent border-0" style="background-image: url('https://dipoddi.com/wp-content/uploads/2022/07/personalise-min.jpg');">
                    <div class="card-body text-center text-white">
                        <h3 class="card-title font-weight-bold mb-4">PROGRAMME GRATUIT</h3>
                        <p class="card-text mb-5">- Reçois gratuitement ton plan d'entraînement hebdomadaire en salle ou en extérieur.</p>
                        <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i class="bi bi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- Another card example -->
            <div class="col-md-4 mb-4">
                <div class="card bg-transparent border-0" style="background-image: url('https://dipoddi.com/wp-content/uploads/2023/04/maison-min.jpg');">
                    <div class="card-body text-center text-white">
                        <h3 class="card-title font-weight-bold mb-4">PROGRAMME KINE</h3>
                        <p class="card-text mb-5">- Bénéficie chaque semaine de ton plan kiné avec des exercices de mobilité et de renforcement.</p>
                        <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i class="bi bi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection