@extends('layouts.app')


@section('content')
<div class="container">
  <h2>CHOOSE YOUR PROGRAMS</h2>
  <div class="progress">
    <div class="progress-bar" id="progressBar"></div>
  </div>
  <div class="multistep-form">
  <form id="multistepForm">
    <fieldset id="step1" class="show">
      <div class="row card-deck">
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/football.png" class="card-img-top" alt="Program 1">
          <div class="card-body">
            <h5 class="card-title">Program 1</h5>
            <p class="card-text">Description of Program 1</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program1" id="program1">
              <label class="form-check-label" for="program1"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/futsal.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">Program 2</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/musculation.png" class="card-img-top" alt="Program 3">
          <div class="card-body">
            <h5 class="card-title">Program 3</h5>
            <p class="text-muted">Description of Program 3</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program3" id="program3">
              <label class="form-check-label" for="program3"> Choose this program </label>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary nextStep">Next</button>
    </fieldset>
    <fieldset id="step2" style="display: none;">
      <div class="row mt-3">
        <div class="col text-center">
          <h2>QUELS JOURS VOULEZ-VOUS EFFECTUER VOTRE PROGRAMME DIPODDI?</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Lundi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Mardi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Mercredi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Jeudi</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Vendredi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Samedi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" value="monday">
                <label class="form-check-label" for="monday">Dimanche</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col text-center">
          <button type="button" class="btn btn-primary previousStep">Previous</button>
          <button type="button" class="btn btn-primary nextStep">Next</button>
        </div>
      </div>
    </fieldset>


    <fieldset id="step3" style="display: none;">
    <div class="col text-center">
          <h2>PRÉFÉREZ-VOUS CIBLER UN GROUPE MUSCULAIRE SPÉCIFIQUE OU TRAVAILLER L'ENSEMBLE DU CORPS ?</h2>
        </div>
      <div class="row card-deck">
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/11/entrainement.png" class="card-img-top" alt="Program 1">
          <div class="card-body">
            <h5 class="card-title">Géneral</h5>
            <p class="card-text">Description of Program 1</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program1" id="program1">
              <label class="form-check-label" for="program1"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/muscle-stimulator.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">Groupe Musculaire</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary nextStep">Next</button>
    </fieldset>


    <fieldset id="step4" style="display: none;">
    <div class="col text-center">
          <h2>PRÉFÉREZ-VOUS CIBLER UN GROUPE MUSCULAIRE SPÉCIFIQUE OU TRAVAILLER L'ENSEMBLE DU CORPS ?</h2>
        </div>
      <div class="row card-deck">
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-1.png" class="card-img-top" alt="Program 1">
          <div class="card-body">
            <h5 class="card-title">Géneral</h5>
            <p class="card-text">Description of Program 1</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program1" id="program1">
              <label class="form-check-label" for="program1"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-2.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">Groupe Musculaire</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>

        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-3.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">Groupe Musculaire</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary nextStep">Next</button>
    </fieldset>

    <fieldset id="step5" style="display: none;">
    <div class="col text-center">
          <h2>PRÉFÉREZ-VOUS CIBLER UN GROUPE MUSCULAIRE SPÉCIFIQUE OU TRAVAILLER L'ENSEMBLE DU CORPS ?</h2>
        </div>
      <div class="row card-deck">
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/bras.png" class="card-img-top" alt="Program 1">
          <div class="card-body">
            <h5 class="card-title">BRAS</h5>
            <p class="card-text">Description of Program 1</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program1" id="program1">
              <label class="form-check-label" for="program1"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/dos.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">DOS</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>

        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/epaule.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">EPAULES</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/pecs.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">PECTORAUX</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
        <div class="card mb-4 col-md-4" style="background-image: url(https://dipoddi.com/wp-content/uploads/2022/06/fond-bande-verticale-1-scaled.jpg);">
          <img src="https://dipoddi.com/wp-content/uploads/2022/06/jambes.png" class="card-img-top" alt="Program 2">
          <div class="card-body">
            <h5 class="card-title">PECTORAUX</h5>
            <p class="text-muted">Description of Program 2</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="program2" id="program2">
              <label class="form-check-label" for="program2"> Choose this program </label>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary nextStep">Next</button>
    </fieldset>
  </form>
  </div>
</div>

@endsection

<script>
  document.addEventListener("DOMContentLoaded", function() {
        const progressBar = document.getElementById("progressBar");
        const steps = document.querySelectorAll("fieldset");
        const previousBtn = document.querySelector(".previousStep");
        const nextBtns = document.querySelectorAll(".nextStep");

        let current = 0;

        // Loop through all next buttons and add event listeners
        nextBtns.forEach(function(nextBtn) {
            nextBtn.addEventListener("click", () => {
                // Validate form before proceeding
                // Add your validation logic here

                if (true) {
                    steps[current].style.display = "none"; // Hide current step
                    steps[current].classList.remove('show'); // Remove 'show' class from current step
                    current++;
                    if (current < steps.length) {
                        steps[current].classList.add('show'); // Add 'show' class to next step
                        steps[current].style.display = "block"; // Show next step
                        updateProgress();
                    }
                }
            });
        });

        previousBtn.addEventListener("click", () => {
            steps[current].style.display = "none"; // Hide current step
            steps[current].classList.remove('show'); // Remove 'show' class from current step
            current--;
            if (current >= 0) {
                steps[current].classList.add('show'); // Add 'show' class to previous step
                steps[current].style.display = "block"; // Show previous step
                updateProgress();
            }
        });

        function updateProgress() {
            progressBar.style.width = ((current / (steps.length - 1)) * 100) + "%";
        }
    });
</script>
