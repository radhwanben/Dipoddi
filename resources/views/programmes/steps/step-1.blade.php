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