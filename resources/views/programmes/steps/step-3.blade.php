      <fieldset id="step3" style="display: none;">
        <div class="row mt-3">
          <div class="col text-center">
            <h2>ÊTES-VOUS DANS UN CLUB</h2>
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