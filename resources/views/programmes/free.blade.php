@extends('layouts.app')

<style>
@media (max-width: 576px) {
  .card-deck .card {
    max-width: 50%;
  }

  .card-deck .card .card-img-top {
    max-width: 100%;
    height: auto;
  }
}

.nextStep {
  background-color: #f34e3a;
  color: #fff;
  height: 45px;
  width: 90px;
  border: none;
  border-radius: initial;
  display: none;
  position: relative;
  padding-right: 30px;
  /* Ensure there's space for the arrow */
}

.previousStep {
  background-color: #f34e3a;
  color: #fff;
  height: 45px;
  width: 90px;
  border: none;
  border-radius: initial;
  display: none;
  position: relative;
  padding-right: 30px;
  /* Ensure there's space for the arrow */
}


/* Arrow styling */
.nextStep::after {
  content: '→';
  /* Unicode for right arrow */
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  font-size: 20px;
}

.previousStep::before {
  content: '←';
  left: 10%;

  /* Unicode for left arrow */
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.form-checkInput {
  background-color: #000000;
  border-color: #000000;
}

.checkbox-wrapper-10 * {
  -webkit-tap-highlight-color: transparent;
  outline: none;
  display: none !important;
}

.checkbox-wrapper-10 input[type="checkbox"] {
  display: none;
}

.checkbox-wrapper-10 label {
  --size: 20px;
  --shadow: calc(var(--size) * .07) calc(var(--size) * .1);

  position: relative;
  display: block;
  width: var(--size);
  height: var(--size);
  margin: 0 auto;
  background-color: #f72414;
  border-radius: 50%;
  box-shadow: 0 var(--shadow) #ffbeb8;
  cursor: pointer;
  transition: 0.2s ease transform, 0.2s ease background-color,
    0.2s ease box-shadow;
  overflow: hidden;
  z-index: 1;
}



.checkbox-wrapper-10 label:before {
  content: "";
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  width: calc(var(--size) * .7);
  height: calc(var(--size) * .7);
  margin: 0 auto;
  background-color: #fff;
  transform: translateY(-50%);
  border-radius: 50%;
  box-shadow: inset 0 var(--shadow) #ffbeb8;
  transition: 0.2s ease width, 0.2s ease height;
}

.checkbox-wrapper-10 label:hover:before {
  width: calc(var(--size) * .55);
  height: calc(var(--size) * .55);
  box-shadow: inset 0 var(--shadow) #ff9d96;
}

.checkbox-wrapper-10 label:active {
  transform: scale(0.9);
}

.checkbox-wrapper-10 .tick_mark {
  position: absolute;
  top: -1px;
  right: 0;
  left: calc(var(--size) * -.05);
  width: calc(var(--size) * .6);
  height: calc(var(--size) * .6);
  margin: 0 auto;
  margin-left: calc(var(--size) * .14);
  transform: rotateZ(-40deg);
}

.checkbox-wrapper-10 .tick_mark:before,
.checkbox-wrapper-10 .tick_mark:after {
  content: "";
  position: absolute;
  background-color: #fff;
  border-radius: 2px;
  opacity: 0;
  transition: 0.2s ease transform, 0.2s ease opacity;
}

.checkbox-wrapper-10 .tick_mark:before {
  left: 0;
  bottom: 0;
  width: calc(var(--size) * .1);
  height: calc(var(--size) * .3);
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
  transform: translateY(calc(var(--size) * -.68));
}

.checkbox-wrapper-10 .tick_mark:after {
  left: 0;
  bottom: 0;
  width: 100%;
  height: calc(var(--size) * .1);
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
  transform: translateX(calc(var(--size) * .78));
}

.checkbox-wrapper-10 input[type="checkbox"]:checked+label {
  background-color: #07d410;
  box-shadow: 0 var(--shadow) #92ff97;
}

.checkbox-wrapper-10 input[type="checkbox"]:checked+label:before {
  width: 0;
  height: 0;
}

.checkbox-wrapper-10 input[type="checkbox"]:checked+label .tick_mark:before,
.checkbox-wrapper-10 input[type="checkbox"]:checked+label .tick_mark:after {
  transform: translate(0);
  opacity: 1;
}

.oui-card,
.non-card {
  width: 120px;
  height: 150px;
  border-radius: 10px;
  background-color: #f8f9fa;
  border: 1px solid #ced4da;
  /* transition: all 0.3s ease; */
  /* Add transition for smooth hover effect */
}

.card:hover {
  /* transform: scale(1.1); */
  /* Adjust the scale factor for hover effect */
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
  /* Add box shadow for hover effect */
}

.card.clicked {
  background-color: #f34e3a;
}


.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.card-title {
  font-size: 18px;
  /* Adjust the font size as needed */
  font-weight: bold;
}

.submit-btn {
  background-color: #000000;
  /* Green background */
  border: none;
  /* Remove borders */
  color: white;
  /* White text */
  padding: 15px 32px;
  /* Padding */
  text-align: center;
  /* Center text */
  text-decoration: none;
  /* Remove underline */
  display: inline-block;
  /* Make it into a block element */
  font-size: 16px;
  /* Font size */
  margin: 4px 2px;
  /* Margin */
  transition-duration: 0.4s;
  /* Transition duration */
  cursor: pointer;
  /* Cursor pointer */
  border-radius: 8px;
  /* Border radius */
}

.not_dispo {
  border: 2px solid #000000;
  /* Green border */
  border-radius: 8px;
  /* Border radius */
  padding: 20px;
  /* Padding */
  margin-top: 20px;
  /* Margin */
  text-align: center;
  /* Center text */

}

.radio-wrapper * {
  -webkit-tap-highlight-color: transparent;
  outline: none;
  display: none !important
}

.radio-wrapper input[type="radio"] {
  display: none;
}

.radio-wrapper label {
  --size: 30px;
  --shadow: calc(var(--size) * .07) calc(var(--size) * .1);

  position: relative;
  display: block;
  width: var(--size);
  height: var(--size);
  margin: 0 auto;
  background-color: #f72414;
  border-radius: 50%;
  box-shadow: 0 var(--shadow) #ffbeb8;
  cursor: pointer;
  transition: 0.2s ease transform, 0.2s ease background-color,
    0.2s ease box-shadow;
  overflow: hidden;
  z-index: 1;
}

.radio-wrapper label:before {
  content: "";
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  width: calc(var(--size) * .7);
  height: calc(var(--size) * .7);
  margin: 0 auto;
  background-color: #fff;
  transform: translateY(-50%);
  border-radius: 50%;
  box-shadow: inset 0 var(--shadow) #ffbeb8;
  transition: 0.2s ease width, 0.2s ease height;
}

.radio-wrapper label:hover:before {
  width: calc(var(--size) * .55);
  height: calc(var(--size) * .55);
  box-shadow: inset 0 var(--shadow) #ff9d96;
}

.radio-wrapper label:active {
  transform: scale(0.9);
}

.radio-wrapper .tick_mark {
  position: absolute;
  top: -1px;
  right: 0;
  left: calc(var(--size) * -.05);
  width: calc(var(--size) * .6);
  height: calc(var(--size) * .6);
  margin: 0 auto;
  margin-left: calc(var(--size) * .14);
  transform: rotateZ(-40deg);
}

.radio-wrapper .tick_mark:before,
.radio-wrapper .tick_mark:after {
  content: "";
  position: absolute;
  background-color: #fff;
  border-radius: 2px;
  opacity: 0;
  transition: 0.2s ease transform, 0.2s ease opacity;
}

.radio-wrapper .tick_mark:before {
  left: 0;
  bottom: 0;
  width: calc(var(--size) * .1);
  height: calc(var(--size) * .3);
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
  transform: translateY(calc(var(--size) * -.68));
}

.radio-wrapper .tick_mark:after {
  left: 0;
  bottom: 0;
  width: 100%;
  height: calc(var(--size) * .1);
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
  transform: translateX(calc(var(--size) * .78));
}

.radio-wrapper input[type="radio"]:checked+label {
  background-color: #07d410;
  box-shadow: 0 var(--shadow) #92ff97;
}

.radio-wrapper input[type="radio"]:checked+label:before {
  width: 0;
  height: 0;
}

.radio-wrapper input[type="radio"]:checked+label .tick_mark:before,
.radio-wrapper input[type="radio"]:checked+label .tick_mark:after {
  transform: translate(0);
  opacity: 1;
}
</style>
<script>
function toggleCheckbox(id) {
  var checkbox = document.getElementById(id);
  checkbox.checked = !checkbox.checked;
}
</script>

@section('content')
<div class="container">
  <h2>CHOOSE YOUR PROGRAMS</h2>
  <div class="progress">
    <div class="progress-bar" id="progressBar"></div>
  </div>
  <div class="multistep-form">
    <form id="multistepForm" action="{{ route('sendProgram') }}" method="post">
      @csrf
      <fieldset id="step1" class="show">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>CHOISISSEZ UN PROGRAMME</h2>
          </div>
        </div>

        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
          <div class="card mb-3 col-md-3  oncklick " id="cardProgram1" data-radio-button-id="program1">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/football.png" class="card-img-top"
              style="padding:35px;border-bottom: inset;" alt="Program 1">
            <div class="card-body">
              <h5 class="card-title">FOOTBALL</h5>
              <!-- <p class="card-text">Description of Program 1</p> -->
              <div class="radio-wrapper">
                <input type="radio" name="program" value="program1" id="program1">
                <label for="program1">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-3 col-md-3 oncklick" id="cardProgram2" data-radio-button-id="program2">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/musculation.png" class="card-img-top"
              style="padding:35px;border-bottom: inset;" alt="Program 2">
            <div class="card-body">
              <h5 class="card-title">FITNESS</h5>
              <!-- <p class="text-muted">Description of Program 2</p> -->
              <div class="radio-wrapper">
                <input type="radio" name="program" value="program2" id="program2">
                <label for="program2">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-3 col-md-3 oncklick" id="cardProgram3" data-radio-button-id="program3">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/futsal.png " class="card-img-top"
              style="padding:35px;border-bottom: inset;" alt="Program 3">
            <div class="card-body">
              <h5 class="card-title">FUTSAL</h5>
              <!-- <p class="text-muted">Description of Program 3</p> -->
              <div class="radio-wrapper">
                <input type="radio" name="program" value="program3" id="program3">
                <label for="program3">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn nextStep"
          style="background-color: #212529;float: right;border-radius: initial;color: #fff;height: 45px;width: 90px;display: none;"
          data-step="step1">Suivant</button>

      </fieldset>

      <fieldset id="step2" style="display: none;">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>QUELS JOURS VOULEZ-VOUS EFFECTUER VOTRE PROGRAMME DIPODDI?</h2>
          </div>
        </div>
        <div class="row" style="display: flex; justify-content: center; margin-top: 100px;color:white;">
          <div class="col d-flex justify-content-center" style="gap: 10px;">
            <div class="card col-3 " onclick="toggleCheckbox('monday')">
              <div class="card-body" style="height: 120px;">
                <p class="card-title">Lundi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="monday" id="monday" name="days[]">
                  <label for="monday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
            <div class="card col-3 " onclick="toggleCheckbox('tuesday')">
              <div class="card-body">
                <p class="card-title">Mardi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="tuesday" id="tuesday" name="days[]">
                  <label for="tuesday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
            <div class="card col-3" onclick="toggleCheckbox('wednesday')">
              <div class="card-body">
                <p class="card-title">Mercredi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="wednesday" id="wednesday" name="days[]">
                  <label for="wednesday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
            <div class="card col-3" onclick="toggleCheckbox('thursday')">
              <div class="card-body">
                <p class="card-title">Jeudi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="thursday" id="thursday" name="days[]">
                  <label for="thursday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col d-flex justify-content-center" style="gap: 10px; color:white;height: 120px;">
            <div class="card col-3 " onclick="toggleCheckbox('friday')">
              <div class="card-body">
                <p class="card-title">Vendredi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="friday" id="friday" name="days[]">
                  <label for="friday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
            <div class="card col-3" onclick="toggleCheckbox('saturday')">
              <div class="card-body">
                <p class="card-title">Samedi</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="saturday" id="saturday" name="days[]">
                  <label for="saturday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
            <div class="card col-3" onclick="toggleCheckbox('sunday')">
              <div class="card-body">
                <p class="card-title">Dimanche</p>
                <div class="checkbox-wrapper-10">
                  <input type="checkbox" value="sunday" id="sunday" name="days[]">
                  <label for="sunday">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style=" margin-top: 100px;">
          <div class="col text-center">
            <button type="button" class="btn previousStep"
              style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
            <button type="button" class="btn nextStep"
              style="background-color: #f34e3a;float: right;border-radius: initial;color: #fff;height: 45px;width: 150px;"
              data-step="step2">Suivant</button>
          </div>
        </div>
      </fieldset>

      <fieldset id="step3" style="display: none;">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>VOUS DOUVEZ SPÉCIFIER UN NIVEAU?</h2>
          </div>
        </div>
        <div class="row" style="display: flex; justify-content: center; margin-top: 100px;">
          <div class="col d-flex justify-content-center" style="gap: 20px;height: 130px;">
            <div class="card oui-card oncklick col-4" id="cardYes" data-radio-button-id="yes">
              <div class="card-body">
                <p class="card-title">Oui</p>
                <div class="radio-wrapper">
                  <input type="radio" value="yes" id="yes" name="with_level">
                  <label for="yes">
                    <div class="tick_mark"></div>
                  </label>
                </div>

              </div>
            </div>
            <div class="card non-card oncklick col-4" id="cardNo" data-radio-button-id="no">
              <div class="card-body">
                <p class="card-title">Non</p>
                <div class="radio-wrapper">
                  <input type="radio" value="no" id="no" name="with_level">
                  <label for="no">
                    <div class="tick_mark"></div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style=" margin-top: 100px;">
          <div class="col text-center">
            <button type="button" class="btn previousStep"
              style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
          </div>
        </div>
      </fieldset>


      <fieldset id="step4" style="display: none;">
        <div class="col text-center mt-5">
          <h2>PRÉFÉREZ-VOUS CIBLER UN GROUPE MUSCULAIRE SPÉCIFIQUE OU TRAVAILLER L'ENSEMBLE DU CORPS ?</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 25px;">
          <div class="card mb-3 col-md-3 oncklick" id="cardBeginner" data-radio-button-id="beginner">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-1.png" class="card-img-top" alt="Program 1"
              style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Débutant</h5>
              <div class="radio-wrapper">
                <input type="radio" value="beginner" id="beginner" name="level">
                <label for="beginner">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-3 col-md-3 oncklick" id="cardIntermediate" data-radio-button-id="intermediate">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-2.png" class="card-img-top" alt="Program 2"
              style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Intermédiaire</h5>
              <div class="radio-wrapper">
                <input type="radio" value="intermediate" id="intermediate" name="level">
                <label for="intermediate">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>

          <div class="card mb-3 col-md-3 oncklick" id="cardAdvance" data-radio-button-id="advance">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/niveau-3.png" class="card-img-top" alt="Program 2"
              style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Avancé</h5>
              <div class="radio-wrapper">
                <input type="radio" value="advance" id="advance" name="level">
                <label for="advance">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
      </fieldset>

      <fieldset id="step5" style="display: none;">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>OÙ PRÉFÉREZ-VOUS EFFECTUER VOTRE PROGRAMME D'ENTRAÎNEMENT?</h2>
          </div>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
          <div class="card mb-4 col-md-4 oncklick" id="cardGym" data-radio-button-id="gym">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
              class="card-img-top" style="padding:35px;border-bottom: inset;" alt="Program 1">
            <div class="card-body">
              <h5 class="card-title">Program Salle</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Program_Salle" id="gym" name="place">
                <label for="gym">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-4 col-md-4 oncklick" id="cardHome" data-radio-button-id="home">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/dehors.png" class="card-img-top"
              style="padding:35px;border-bottom: inset;" alt="Program 2">
            <div class="card-body">
              <h5 class="card-title">Program Maison</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Program_Maison" id="home" name="place">
                <label for="home">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
      </fieldset>
      <fieldset id="step6" style="display: none;">
        <div class="col text-center mt-5">
          <h2>QUEL TYPE D'ENTRAÎNEMENT PRÉFÉREZ-VOUS?</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
          <div class="card mb-2 col-md-2  oncklick" id="cardMusculation" data-radio-button-id="musculation">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
              class="card-img-top" alt="Program 1" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">MUSCULATION</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Musculation en Salle" id="musculation" name="type">
                <label for="musculation">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardMusculation_cardio"
            data-radio-button-id="musculation_cardio">
            <img
              src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20et%20cardio%20en%20salle.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title text-center ">MUSCULATION AVEC CARDIO</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Musculation en Salle avec cardio" id="musculation_cardio" name="type">
                <label for="musculation_cardio">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>

          <div class="card mb-2 col-md-2 oncklick" id="cardSpecific_musculation"
            data-radio-button-id="specific_musculation">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title text-center">MUSCULATION SPÉCIFIQUE</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Musculation Spécifique" id="specific_musculation" name="type">
                <label for="specific_musculation">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardCardio" data-radio-button-id="cardio">
            <img
              src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20et%20cardio%20en%20salle.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">CARDIO</h5>
              <!-- <p class="text-muted">Description of Program 2</p> -->
              <div class="radio-wrapper">
                <input type="radio" value="Cardio en Salle" id="cardio" name="type">
                <label for="cardio">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep prevFive"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;display: none;">Précédent</button>
        <button type="button" class="btn initialStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;display: none">Répéter</button>
      </fieldset>

      <fieldset id="step7 " style="display: none;">
        <div class="col card-deck text-center mt-5">
          <h2>PRÉFÉREZ-VOUS CIBLER UN GROUPE MUSCULAIRE SPÉCIFIQUE OU TRAVAILLER L'ENSEMBLE DU CORPS ?</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; margin-top: 50px;gap:40px">
          <div class="card card-deck mb-2 col-md-2 oncklick" id="cardEndurance" data-radio-button-id="endurance">
            <img src="https://dipoddi.com/wp-content/uploads/2022/06/bras.png" class="card-img-top" alt="Program 1"
              style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">ENDURANCE DE FORCE</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Endurance de force" id="endurance" name="target_muscule">
                <label for="endurance">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardForce_max" data-radio-button-id="force_max">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/force%20max.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">FORCE MAX</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Force max" id="force_max" name="target_muscule">
                <label for="force_max">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardMasse" data-radio-button-id="masse">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/masse%20musculaire.png"
              class="card-img-top" alt="Program 3" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">MASSE MUSCULAIRE</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Masse musculaire" id="masse" name="target_muscule">
                <label for="masse">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2  oncklick" id="cardWeightloss" data-radio-button-id="weightloss">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/perte%20de%20poids.png"
              class="card-img-top" alt="Program 4" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">PERTE DE POIDS</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Perte de poids" id="weightloss" name="target_muscule">
                <label for="weightloss">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; margin-top: 20px;gap:40px">
          <div class="card mb-2 col-md-2  oncklick" id="cardFitness" data-radio-button-id="fitness">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/remise%20en%20forme.png"
              class="card-img-top" alt="Program 5" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">REMISE EN FORME</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Remise en forme" id="fitness" name="target_muscule">
                <label for="fitness">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2  oncklick" id="cardEffort_repeitition"
            data-radio-button-id="effort_repeitition">
            <img
              src="https://test.dipoddi.com/static/myapp/images/programmes/icons/r%C3%A9p%C3%A9titions%20des%20efforts.png"
              class="card-img-top" alt="Program 6" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">RÉPÉTITIONS DES EFFORTS</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Répétitions des efforts" id="effort_repeitition" name="target_muscule">
                <label for="effort_repeitition">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardExplosive_force" data-radio-button-id="explosive_force">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/force%20explosive.png"
              class="card-img-top" alt="Program 7" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">FORCE EXPLOSIVE</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Force explosive" id="explosive_force" name="target_muscule">
                <label for="explosive_force">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep prevSix"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;display: none;">Précédent</button>
        <button type="button" class="btn initialStep initialStepSix"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;display: none">Répéter</button>
      </fieldset>


      <fieldset id="step8" style="display: none;">
        <div class="not_dispo">
          <legend>Pas d'étapes pour le moment</legend>
          <p>Vous avez terminé toutes les étapes disponibles pour le moment. Merci!</p>
        </div>
      </fieldset>
      <button type="submit" class="submit-btn btn btn-dark btn-lg btn-block" style="display: none;"
        id="btn_submit">Soumettre</button>

    </form>
    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="messageModalLabel">Message</h5>
          </div>
          <div class="modal-body">
            <p>Veuillez sélectionner au moins un programme.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelModal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {
  const cardos = document.querySelectorAll('.card');

  cardos.forEach(card => {
    card.addEventListener('click', function() {
      const isClicked = this.classList.contains('clicked');

      if (isClicked) {
        this.classList.remove('clicked');
      } else {
        cards.forEach(card => {
          card.classList.remove('clicked');
        });

        this.classList.add('clicked');
      }
    });
  });

  const progressBar = document.getElementById("progressBar");
  const steps = document.querySelectorAll("fieldset");
  const previousBtns = document.querySelectorAll(".previousStep");
  const nextBtns = document.querySelectorAll(".nextStep");

  $('#cancelModal').on('click', function() {
    $('#messageModal').modal('hide');
  });
  let current = 0;
  let lastStep = 0
  let back = 0;
  let caseOne = 0
  let caseTwo = 0
  let caseThree = 0
  let caseFour = 0
  let clickPrevious = 0
  let noChecked = 0
  let noCheckedTwo = 0
  previousBtns.forEach(function(previousBtn) {
    previousBtn.addEventListener("click", () => {
      clickPrevious++;
      steps[current].style.display = "none";
      steps[current].classList.remove('show');
      if (clickPrevious > 1) {
        if (caseOne && caseTwo) {
          steps[lastStep - 2].classList.add('show');
          steps[lastStep - 2].style.display = "block";
          current = lastStep - 2;
          caseOne = 0;
          caseTwo = 0;
          caseThree = 1
        } else {
          if (caseThree) {
            back = 3
            steps[lastStep - back].classList.add('show');
            steps[lastStep - back].style.display = "block";
            current = lastStep - back;
            caseThree = 0;
            caseFour = 1
            console.log("wsol");
          } else if (caseFour) {
            back = 4
            steps[lastStep - back].classList.add('show');
            steps[lastStep - back].style.display = "block";
            current = lastStep - back;
            caseFour = 0

          } else {
            back = clickPrevious - 1
            steps[lastStep - back].classList.add('show');
            steps[lastStep - back].style.display = "block";
            current = lastStep - back;
          }

        }
      } else if (current >= 0 && clickPrevious < 2) {
        steps[lastStep].classList.add('show');
        steps[lastStep].style.display = "block";
        current = lastStep;
        updateProgress();
      }
    });
  });
  // Add event listener to all "Next" buttons
  document.querySelectorAll('.nextStep').forEach(function(button) {
    button.addEventListener('click', function() {
      clickPrevious = 0;
      var stepId = this.getAttribute('data-step');
      if (validateCheckbox(stepId)) {
        steps[current].style.display = "none";
        steps[current].classList.remove('show');
        lastStep = current;
        current++;
        if (current < steps.length) {
          if (current === 3) {
            const ouiChecked = document.getElementById('yes').checked;
            if (ouiChecked) {
              steps[3].classList.add('show');
              steps[3].style.display = "block";
            } else {
              steps[4].classList.add('show');
              steps[4].style.display = "block";
              current = 4;
              caseOne = 1
              noChecked = 1
              noCheckedTwo = 1
            }
          } else if (current === 5) {
            const gymChecked = document.getElementById('gym').checked;
            if (gymChecked) {
              console.log("fofvfvoffo");
              steps[5].classList.add('show');
              steps[5].style.display = "block";
              const previousStepBtn = document.querySelector('.prevFive');
              const initialStepBtn = document.querySelector('.initialStep');
              console.log(caseOne);
              if (noChecked) {
                previousStepBtn.style.display = "none";
                initialStepBtn.style.display = "block";
                noChecked = 0;
              } else {
                previousStepBtn.style.display = "block";
                initialStepBtn.style.display = "none";

              }
            } else {
              steps[7].classList.add('show');
              steps[7].style.display = "block";
            }
          } else if (current === 6) {
            const musculation = document.getElementById('musculation').checked;
            if (musculation) {
              steps[6].classList.add('show');
              steps[6].style.display = "block";
              const previousStepBtnSix = document.querySelector('.prevSix');
              const initialStepBtnSix = document.querySelector('.initialStepSix');
              if (noCheckedTwo) {
                previousStepBtnSix.style.display = "none";
                initialStepBtnSix.style.display = "block";
                noCheckedTwo = 0;
              } else {
                previousStepBtnSix.style.display = "block";
                initialStepBtnSix.style.display = "none";
              }

            } else {
              document.getElementById("btn_submit").click();
            }
          } else if (current == 7) {
            document.getElementById("btn_submit").click();
          } else {
            steps[current].classList.add('show');
            steps[current].style.display = "block";
          }
          updateProgress();
        }
      }
    });
  });
  document.querySelectorAll('.initialStep').forEach(function(button) {
    button.addEventListener('click', function() {
      steps.forEach(step => {
        step.style.display = "none";
        step.classList.remove('show');
      });

      // Set the current step index to 0
      current = 0;

      // Show the first step
      steps[current].style.display = "block";
      steps[current].classList.add('show');

      // Update any progress indicators or other relevant updates
      updateProgress();
    });
  });

  function updateProgress() {
    progressBar.style.width = ((current / (steps.length - 1)) * 100) + "%";
  }


  const cards = document.querySelectorAll('.oncklick');

  // Add click event listeners to card elements
  cards.forEach(function(card) {
    card.addEventListener('click', function() {
      const radioButtonId = this.dataset.radioButtonId;
      document.getElementById(radioButtonId).checked = true;
      document.querySelector('.nextStep').click();
    });
  });

  function validateCheckbox(stepId) {
    // Get all input elements within the specified step
    var inputs = document.querySelectorAll('#' + stepId + ' input');
    var checked = false;

    // Loop through each input element to check if any checkbox or radio button is checked
    inputs.forEach(function(input) {
      if (input.type === 'checkbox' && input.checked) {
        checked = true;
      } else if (input.type === 'radio' && input.checked) {
        checked = true;
      }
    });

    if (!checked) {
      $('#messageModal').modal('show'); // Show the modal
      return false;
    }
    return true;
  }



});
</script>

<!-- previousBtns.forEach(function(previousBtn) {
    previousBtn.addEventListener("click", () => {
      console.log("previous button clicked", pervThree);
      if (pervThree) {
        steps[5].style.display = "none";
        steps[5].classList.remove('show');
        pervThree = 0
      } else {
        steps[current].style.display = "none";
        steps[current].classList.remove('show');

      }
      console.log("before", current);
      current--;
      console.log("after", current);

      if (current >= 0) {
        if (prevOne) {
          steps[current - 1].classList.add('show');
          steps[current - 1].style.display = "block";
          prevOne = 0;
          current--;
        } else {
          steps[current].classList.add('show');
          steps[current].style.display = "block";
        }
        updateProgress();
      }
    });
  });



  document.querySelectorAll('.nextStep').forEach(function(button) {
    button.addEventListener('click', function() {
      var stepId = this.getAttribute('data-step');
      if (validateCheckbox(stepId)) {
        steps[current].style.display = "none";
        steps[current].classList.remove('show');
        current++;
        console.log(current);
        if (current < steps.length) {
          if (current === 3) {
            const ouiChecked = document.getElementById('yes').checked;
            if (ouiChecked) {
              steps[3].classList.add('show');
              steps[3].style.display = "block";
            } else {
              steps[4].classList.add('show');
              steps[4].style.display = "block";
              current++;
              prevOne = 1;
              pervTwo = 1
              pervFour = 1
            }
          } else if (current === 5) {
            const gymChecked = document.getElementById('gym').checked;
            if (gymChecked) {
              steps[5].classList.add('show');
              steps[5].style.display = "block";
              if (pervTwo == 1) {
                console.log("dfbdfbdfb")
                current++;
                pervThree = 1;
              }
            } else {
              steps[8].classList.add('show');
              steps[8].style.display = "block";
            }
          } else if (current === 6) {
            const musculation = document.getElementById('musculation').checked;
            if (musculation) {
              steps[6].classList.add('show');
              steps[6].style.display = "block";
            } else {
              document.getElementById("btn_submit").click();
            }
          } else if (current == 7 && pervFour == 1) {
            steps[5].style.display = "none";
            steps[5].classList.remove('show');

            const musculation = document.getElementById('musculation').checked;
            if (musculation) {
              steps[6].classList.add('show');
              steps[6].style.display = "block";
            } else {
              document.getElementById("btn_submit").click();
            }

          } else if (current == 7) {
            document.getElementById("btn_submit").click();
          } else if (current == 8 && pervFour) {
            console.log("first");
            steps[6].style.display = "none";
            steps[6].classList.remove('show');
            document.getElementById("btn_submit").click();
          } else {
            steps[current].classList.add('show');
            steps[current].style.display = "block";
          }
          updateProgress();
        }
      }
    });
  }); -->
