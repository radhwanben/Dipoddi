      <fieldset id="step5" class="step-5">
        <div class="col card-deck text-center mt-5">
          <h2>CHOISSEZ VOTRE TYPE D'EXERCICE</h2>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; margin-top: 50px;gap:40px">
          <div class="card card-deck mb-2 col-md-2 oncklick" id="cardPertePoids" data-radio-button-id="perte_poids">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/perte%20de%20poids.png"
              class="card-img-top" alt="Program 1" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Perte de poids</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Perte de poids" id="perte_poids" name="Program_DEHORS">
                <label for="perte_poids">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardPuissance" data-radio-button-id="puissance">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/force%20max.png"
              class="card-img-top" alt="Program 2" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Puissance</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Puissance" id="puissance" name="Program_DEHORS">
                <label for="puissance">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2 oncklick" id="cardRepetitionEffort" data-radio-button-id="repitionDesEfforts">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/masse%20musculaire.png"
              class="card-img-top" alt="Program 3" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Répetitions des efforts</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Repetition des efforts" id="repitionDesEfforts" name="Program_DEHORS">
                <label for="repitionDesEfforts">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-2 col-md-2  oncklick" id="cardWeightloss" data-radio-button-id="boxTobox">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/perte%20de%20poids.png"
              class="card-img-top" alt="Program 4" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">Box to box</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Box to box" id="boxTobox" name="Program_DEHORS">
                <label for="boxTobox">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; margin-top: 20px;gap:40px">
          <div class="card mb-2 col-md-2  oncklick" id="cardRemise" data-radio-button-id="remiseEnForme">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/remise%20en%20forme.png"
              class="card-img-top" alt="Program 5" style="padding:35px;border-bottom: inset;">
            <div class="card-body">
              <h5 class="card-title">REMISE EN FORME</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Remise en forme" id="remiseEnForme" name="Program_DEHORS">
                <label for="remiseEnForme">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep"
          style="background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>
      </fieldset>