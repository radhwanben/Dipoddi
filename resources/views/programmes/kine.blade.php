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
      @include('programmes.steps.step-1')
      @include('programmes.steps.step-2')
      @include('programmes.steps.step-3')
      @include('programmes.steps.step-4')
      @include('programmes.steps.step-5-kine')
      @include('programmes.steps.step-6')
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
              current = 4;
              caseOne = 1
              noChecked = 1
              noCheckedTwo = 1

            }
          }
          if (current === 5) {
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
