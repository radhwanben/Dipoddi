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
                <p class="card-title" style="color:black;">Lundi</p>
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
                <p class="card-title" style="color:black;">Mardi</p>
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
                <p class="card-title" style="color:black;">Mercredi</p>
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
                <p class="card-title" style="color:black;">Jeudi</p>
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
                <p class="card-title" style="color:black;">Vendredi</p>
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
                <p class="card-title" style="color:black;">Samedi</p>
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
                <p class="card-title" style="color:black;">Dimanche</p>
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