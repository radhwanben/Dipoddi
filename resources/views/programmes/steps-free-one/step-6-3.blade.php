      <fieldset id="step6">
        <div class="col card-deck text-center mt-5">
          <h2>CHOISSEZ VOTRE TYPE D'EXERCICE</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; margin-top: 50px;gap:40px">
          <div class="card card-deck mb-2 col-md-2 oncklick" id="cardCardioHome" data-radio-button-id="cardio_home">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/perte%20de%20poids.png"
              class="card-img-top" alt="Program 1" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Cardio</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Perte de poids" id="cardio_home" name="Program_Outdoor">
                <label for="cardio_home">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardRenfercement" data-radio-button-id="renfercement">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/force%20max.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Renfercement</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Renfercement" id="renfercement" name="Program_Outdoor">
                <label for="renfercement">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardBruler" data-radio-button-id="brulerCalorie">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/masse%20musculaire.png"
              class="card-img-top" alt="Program 3" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Brûler des calories</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Repetition des efforts" id="brulerCalorie" name="Program_Outdoor">
                <label for="brulerCalorie">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
      </fieldset>