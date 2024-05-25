      <fieldset id="step5" style="display: none;">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>CHOISSISEZ VOTRE FOCUS</h2>
          </div>
        </div>
        <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
          <div class="card mb-3 col-md-3 oncklick" id="cardMobile" data-radio-button-id="mobilite">
            <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
              class="card-img-top" style="padding:35px;border-bottom: inset;" alt="Program 1">
            <div class="card-body">
              <h5 class="card-title">Mobilité</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Mobilite" id="mobilite" name="target_kine">
                <label for="mobilite">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="card mb-3 col-md-3 oncklick" id="cardRenforcementKine" data-radio-button-id="renforcementKine">
            <img
              src="https://test.dipoddi.com/static/myapp/images/programmes/icons/r%C3%A9p%C3%A9titions%20des%20efforts.png"
              class="card-img-top" style="padding:35px;border-bottom: inset;" alt="Program 2">
            <div class="card-body">
              <h5 class="card-title">Renforcement</h5>
              <div class="radio-wrapper">
                <input type="radio" value="Renfercement Kine" id="renforcementKine" name="target_kine">
                <label for="renforcementKine">
                  <div class="tick_mark"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn previousStep"
          style="
background-color:  #f34e3a;float: left;border-radius: initial;color: #fff;height: 45px;width: 150px;">Précédent</button>

      </fieldset>