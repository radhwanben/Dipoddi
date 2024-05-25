      <fieldset id="step5" class="step-5">
        <div class=" col text-center mt-5">
          <h2>QUEL TYPE D'ENTRAÎNEMENT PRÉFÉREZ-VOUS?</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
          <div class="card mb-2 col-md-2  oncklick" id="cardMusculation" data-radio-button-id="musculation">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
              class="card-img-top" alt="Program 1" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">MUSCULATION222</h5>
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
        <button type="button" class="btn previousStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
      </fieldset>