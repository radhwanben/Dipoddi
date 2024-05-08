@extends('layouts.app')
<style>
/* Styles for the weekday selector */
.weekday-selector {
  padding: 1em 0;
  color: #FF703A;
  /* Base color */
}

.weekday-selector ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  line-height: 1;
  font-size: 85%;
  font-family: "DIN Alternate";
}

.weekday-selector li {
  background: rgba(255, 255, 255, 0.2);
  /* Light background */
  padding: 1em;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
  transition: background 0.3s ease-out;
  /* Transition effect */
}

.weekday-selector li.selected {
  background: #fff;
  /* Light color for selected item */
}

.weekday-selector span {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* General layout styles */
html,
body {
  /* Base color */
  color: #fff;
  /* Light color */
}

h3 {
  font-weight: 200;
}

strong {
  opacity: 0.7;
  mix-blend-mode: overlay;
}

.workspace {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  /* Full height */
}

.case {
  flex: 1;
  padding: 2em;
}

.output {
  text-align: center;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  /* Dark background */
  color: #FF703A;
  /* Base color */
  padding: 1em 0;
}

.output>span {
  position: relative;
}

body {
  font-family: 'Droid Serif', serif;
}

h1 {
  font-size: 20px;
  text-align: center;
}

.slider {
  position: relative;
  height: 260px;
  width: auto;
  overflow: hidden;
  margin: 0 auto;
  margin-top: 20px;
}

.slider-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  transition: opacity 0.5s;
}

.slider-item:first-child {
  opacity: 1;
}

.slider-dots {
  text-align: center;
  margin-top: 0px;
}

.slider-dots label {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #bbb;
  border-radius: 50%;
  cursor: pointer;
  margin: 0 5px;
}

/* Hide radio buttons */
input[type="radio"] {
  display: none;
}

/* Show content for checked radio button */
input[type="radio"]:checked+.slider-item {
  opacity: 1;
}

/* Style active dot */
input[type="radio"]:checked+.slider-item+.slider-dots label {
  background-color: #333;
}

.footer {
  display: flex;
  justify-content: space-between;
  background-color: rgb(42, 46, 51);
  color: white;
  padding: 20px;
}

.copyright {
  height: 120px;
  display: flex;
  align-items: center;
}

.left {
  margin-left: 30px;
}

.copy-footer {
  width: 1000px;
}

/* Media query for screens smaller than 768px (typical mobile devices) */
@media (max-width: 768px) {
  .copy-footer {
    width: 320px;
  }
}

.bottom-footer {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 15px;
}
</style>


@section('slider')
<div class="d-flex flex-column align-items-center justify-content-center vh-100" data-mdb-ride="carousel">
  <!-- Background video -->
  <video autoplay muted loop class="position-absolute w-100 ">
    <source src="{{ Vite::asset('resources/video/59.mp4') }}" type="video/mp4">
  </video>

  <!-- Content container -->
  <div class="position-absolute inset-0 d-flex align-items-center justify-content-center mt-5">
    <div class="emphasis-title m-0">
      <h1 class="text-white text-4xl font-bold mb-4">Welcome to Our Website</h1>
      <p class="text-white text-lg mb-6">MON PROGRAMME</p>
      <a href="#" class="btn btn-danger btn-lg">Get Started</a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid"
  style="background-image:url('https://dipoddi.com/wp-content/uploads/2022/07/Rayures.png'); margin-bottom: -48px;">
  <!-- Header -->
  <div class="text-center py-10 mt-5">
    <h1 class="display-1 text-uppercase ">Boutique Fitness</h1>
    <p class="lead">Dépasse tes limites et donne une nouvelle dimension à ta performance avec nos solutions
      nutritionnelles spécialement conçues pour les athlètes. Ces compléments alimentaires sont la clé pour transformer
      tes séances d'entraînement et atteindre une excellence sportive sans précédent.</p>
  </div>
  <div class="container my-5">
    <div class="row justify-content-center mb-12">
      <!-- Repeat this div for each card, changing the background image URL and content as needed -->
      <div class="col-md-4 mb-4">
        <div class="card bg-transparent border-0"
          style="background-image: url('https://dipoddi.com/wp-content/uploads/2022/07/gratuit-min.jpg');">
          <div class="card-body text-center text-white">
            <h3 class="card-title font-weight-bold mb-4">PROGRAMME PERSONNALISÉ</h3>
            <p class="card-text mb-5">- Débute ton parcours sur mesure en salle et profite d'un bilan hebdomadaire.</p>
            <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i
                class="bi bi-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <!-- ... Other cards -->
      <div class="col-md-4 mb-4">
        <div class="card bg-transparent border-0"
          style="background-image: url('https://dipoddi.com/wp-content/uploads/2023/05/kine-min-2.jpg');">
          <div class="card-body text-center text-white">
            <h3 class="card-title font-weight-bold mb-4">PROGRAMME MAISON</h3>
            <p class="card-text mb-5">- Découvre et profite d'un entraînement hebdomadaire sur mesure, à réaliser chez
              toi.</p>
            <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i
                class="bi bi-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <!-- Another card example -->
      <div class="col-md-4 mb-4">
        <div class="card bg-transparent border-0"
          style="background-image: url('https://dipoddi.com/wp-content/uploads/2022/07/personalise-min.jpg');">
          <div class="card-body text-center text-white">
            <h3 class="card-title font-weight-bold mb-4">PROGRAMME GRATUIT</h3>
            <p class="card-text mb-5">- Reçois gratuitement ton plan d'entraînement hebdomadaire en salle ou en
              extérieur.</p>
            <a href="{{ route('freeProgram') }}" class="btn btn-danger btn-lg">COMMENCER <i
                class="bi bi-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <!-- Another card example -->
      <div class="col-md-4 mb-4">
        <div class="card bg-transparent border-0"
          style="background-image: url('https://dipoddi.com/wp-content/uploads/2023/04/maison-min.jpg');">
          <div class="card-body text-center text-white">
            <h3 class="card-title font-weight-bold mb-4">PROGRAMME KINE</h3>
            <p class="card-text mb-5">- Bénéficie chaque semaine de ton plan kiné avec des exercices de mobilité et de
              renforcement.</p>
            <a href="/programme-gratuit" class="btn btn-danger btn-lg">COMMENCER <i
                class="bi bi-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid"
  style="background-image:url('https://dipoddi.com/wp-content/uploads/2022/07/Rayures.png');  height: 700px;">
  <div class="row justify-content-center">
    <!-- Video section -->
    <div class="col-md-4" style="margin-top: 80px">
      <video width="100%" height="100%" controls autoplay muted loop>
        <source src="{{ Vite::asset('resources/video/vedioframe.mp4') }}" type="video/mp4">
      </video>
    </div>
    <!-- Text section -->
    <div class="col-md-4" style="height:500px; margin-top: 80px">
      <div class="text-center py-10" style="text-align-last: right;">
        <h1 class="display-5 text-uppercase" style="font-weight: bold; text-align: -webkit-right;">PROGRAMMES
          D'ENTRAÎNEMENT À DOMICILE</h1>
        <p class="lead">Effectue tes séances sur mesure et atteins tes objectifs où que tu sois.</p>
      </div>
      <div class="py-10" style="text-align-last: center;">
        <a href="{{ route('freeProgram') }}" class="btn btn-danger btn-lg">
          COMMENCER
          <i class="bi bi-arrow-right ml-2"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')

<div class="footer" style="background-color: #343a40; color:white;font-family: system-ui; padding: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-6" style="height=360px">
        <div style="margin-top:20px;">
          <div class="qodef-position-left">
            <a class="navbar-brand" href="/">
              <img src="{{ Vite::asset('resources/images/small_logo.png') }}"
                style="width: 6em;height: 4em;margin-left: 2em; margin-bottom: 1em;" class="img-fluid" alt="Logo">
            </a>
          </div>
          Conseil et expertise dans le suivi d'athlètes à la recherche de performance.
          "Fais-le proprement sinon ne le fais pas."
        </div>
        <div style="margin-top:20px">
          <h4>ADRESSE :</h4>
          78 AV DES CHAMPS ELYSEES - 75008 PARIS
        </div>
        <div style="margin-top:20px;margin-bottom: 20px;">
          <h4>Email:</h4>
          contact@dipoddi.com
        </div>
      </div>
      <!--- END COL -->
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div style="margin-top:50px">
          <h4>Avis client</h4>
          <div class="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <div class="slider-item">
              <p>Rester au top physiquement ce n'est pas facile et c'est pour cela que j'ai fait appel à
                DIPODDI ! Ils m'ont poussé à donner le meilleur de moi-même et continuer à repousser mes
                limites. Merci !
              </p>
              <h4>Bakaye Traoré</h4>
              <br>
              <div class="slider-dots">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
              </div>
            </div>
            <input type="radio" name="slider" id="slide2">
            <div class="slider-item">
              <p>DIPODDI m'en aura fait baver plus d'une fois, mais ça en valait la peine ! Grâce à ça,
                j'ai pu continuer à me développer sur tous les aspects et rester compétitifs en club et
                en sélection tunisienne. Merci la team !</p>
              <h4>Naïm Sliti</h4>
              <div class="slider-dots">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
              </div>
            </div>
            <input type="radio" name="slider" id="slide3">
            <div class="slider-item">
              <p>Le foot freestyle aussi à besoin d'une bonne préparation physique ! DIPODDI m'a
                accompagné pour que je puisse continuer à proposer des tricks innovants et que je puisse
                sans cesse me réinventer, merci la famille !</p>
              <h4>Sean Freestyle</h4>
              <div class="slider-dots">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--- END COL -->
    </div>
    <!--- END COL -->
  </div>
  <!--- END ROW -->
</div>
<!--- END CONTAINER -->
<div class="footer">
  <div class="row">
    <div class="col-lg-6 col-sm-6 col-xs-6 " style="background-color: rgb(42 46 51); text-align-last: center;">
      <div style="color: white; margin-top: -35px;" class="copy-footer">
        <div class="col-lg-3 col-sm-3 col-xs-3 text-center ">
          <div
            style="color: #969494; font-weight: bold; height: 120px; margin-left: 99px; width: 212px; align-content: center;">
            <p>Copyrights © 2024 Dippodi.</p>
          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END CONTAINER -->
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-6" style="background-color: rgb(42 46 51);">
      <div style="color: white;align-content: center; height: 30px; text-align-last: center;">
        <p class="text-center">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#" class="bottom-footer">Accueil</a> / <a href="#" class="bottom-footer">Programmes</a>
            / <a href="#" class="bottom-footer">Boutique</a> / <a href="#" class="bottom-footer">Lifestyle</a>
          </li>
        </ul>
        </p>
        <!--- END COL -->
      </div>
      <!--- END CONTAINER -->
    </div>
  </div>
</div>


@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  const carouselSlide = document.querySelector('.carousel-slide');
  const carouselItems = document.querySelectorAll('.carousel-slide p');

  let counter = 0;
  const interval = 5000; // Interval between slides in milliseconds

  function nextSlide() {
    carouselSlide.style.transition = 'transform 0.5s ease-in-out';
    counter++;
    carouselSlide.style.transform = `translateX(${-counter * 100}%)`;

    if (counter >= carouselItems.length) {
      setTimeout(() => {
        carouselSlide.style.transition = 'none';
        counter = 0;
        carouselSlide.style.transform = `translateX(0)`;
      }, 1000);
    }
  }

  setInterv
  al(nextSlide, interval);
});
</script>
@endsection
