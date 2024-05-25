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
      <div class="steps-free-one">
        @include('programmes.steps-free-one.step-1')
        @include('programmes.steps-free-one.step-2')
        @include('programmes.steps-free-one.step-3')
        @include('programmes.steps-free-one.step-4')
        @include('programmes.steps-free-one.step-5')

        <div class="step-6-option gym" style="display: none;">
          @include('programmes.steps-free-one.step-6-1')
        </div>
        <div class="step-6-option home" style="display: none;">
          @include('programmes.steps-free-one.step-6-2')
        </div>
        <div class="step-6-option outdoors" style="display: none;">
          @include('programmes.steps-free-one.step-6-3')
        </div>

        <div class="step-7-option musculation" style="display: none;">
          @include('programmes.steps-free-one.step-7-1')
        </div>
        <div class="step-7-option cardio" style="display: none;">
          @include('programmes.steps-free-one.step-7-2')
        </div>
      </div>

      {{-- Steps Free Two --}}
      <div class="steps-free-two" style="display: none;">
        @include('programmes.steps-free-two.step-4')

        <div class="step-6-option gym" style="display: none;">
          @include('programmes.steps-free-two.step-5-1')
        </div>
        <div class="step-6-option home" style="display: none;">
          @include('programmes.steps-free-two.step-5-2')
        </div>
        <div class="step-6-option outdoors" style="display: none;">
          @include('programmes.steps-free-two.step-5-3')
        </div>

        <div class="step-7-option musculation" style="display: none;">
          @include('programmes.steps-free-two.step-6-1')
        </div>
        <div class="step-7-option cardio" style="display: none;">
          @include('programmes.steps-free-two.step-6-2')
        </div>
      </div>





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
  let step6 = 0;
  previousBtns.forEach(function(previousBtn) {
    previousBtn.addEventListener("click", () => {
      steps[current].style.display = "none";
      if (current >= 5) {
        steps[current].style.display = "block";
        document.querySelectorAll('.step-6-option').forEach(function(el) {
          el.style.display = 'none';
        });
      }
      if (current >= 6) {
        steps[current].style.display = "block";

        document.querySelectorAll('.step-7-option').forEach(function(el) {
          el.style.display = 'none';
        });
        let step6 = document.querySelector('.step-6-option.' + 'gym');
        step6.style.display = "block"
      }
      current--;
      if (current >= 0) {
        steps[current].className = 'show';
        steps[current].style.display = "block";
        updateProgress();
      }
    });
  });
  // Add event listener to all "Next" buttons
  document.querySelectorAll('.nextStep').forEach(function(button) {
    button.addEventListener('click', function() {
      let stepId = this.getAttribute('data-step');
      if (validateCheckbox(stepId)) {
        steps[current].style.display = "none";
        steps[current].classList.remove('show');
        current++;

        if (current < steps.length) {
          if (current === 5) {
            let selectedOption = document.querySelector('input[name="place"]:checked');
            if (selectedOption) {
              let step6Class = selectedOption.id;
              let step6Element = document.querySelector('.step-6-option.' + step6Class);

              document.querySelectorAll('.step-6-option').forEach(function(el) {
                el.style.display = 'none';
              });
              if (step6Element) {
                step6Element.style.display = 'block';
              }

            } else {
              console.error('Element not found:', '.step-6-option.' + step6Class);
              return;
            }
          }
          if (current === 6) {
            let cardChecked = document.querySelector('input[name="type"]:checked');
            if (cardChecked) {
              let step7Class = cardChecked.id;
              if (step7Class.includes('musculation')) {
                step7Class = "musculation";
              }
              let step7Element = document.querySelector('.step-7-option.' + step7Class);
              document.querySelectorAll('.step-7-option').forEach(function(el) {
                el.style.display = 'none';
              });
              step7Element.style.display = 'block'
            }
          }
          steps[current].className = 'show';
          steps[current].style.display = "block";
          updateProgress();
        }
      }
    });
  });
  document.querySelectorAll('.oncklick').forEach(function(card) {
    card.addEventListener('click', function() {
      let radioButtonId = this.getAttribute('data-radio-button-id');
      let radioButton = document.getElementById(radioButtonId);
      if (radioButton) {
        radioButton.checked = true;
      }

      let selectedOptionOne = document.querySelector('input[name="Program_DEHORS"]:checked');
      let selectedOptionTwo = document.querySelector('input[name="Program_Outdoor"]:checked');
      let selectedOptionThree = document.querySelector('input[name="target_muscule"]:checked');
      let selectedOptionfour = document.querySelector('input[name="target_cardio"]:checked');

      if (selectedOptionOne || selectedOptionTwo || selectedOptionThree || selectedOptionfour) {
        document.getElementById("btn_submit")
          .click();
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