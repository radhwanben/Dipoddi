<fieldset id="step4" class="step-4">
  <div class="row mt-3">
    <div class="col text-center">
      <h2>OÙ PRÉFÉREZ-VOUS EFFECTUER VOTRE PROGRAMME D'ENTRAÎNEMENT?</h2>
    </div>
  </div>
  <div class="row card-deck" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px;">
    <div class="card mb-3 col-md-3 oncklick" id="cardGym" data-radio-button-id="gym">
      <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/musculation%20en%20salle.png"
        class="card-img-top" style="padding:35px;border-bottom: inset;" alt="Program 1">
      <div class="card-body">
        <h5 class="card-title">Program Salleeeee</h5>
        <div class="radio-wrapper">
          <input type="radio" value="Program_Salle" id="gym" name="place">
          <label for="gym">
            <div class="tick_mark"></div>
          </label>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-3 oncklick" id="cardHome" data-radio-button-id="home">
      <img src="https://test.dipoddi.com/static/myapp/images/programmes/icons/dehors.png" class="card-img-top"
        style="padding:35px;border-bottom: inset;" alt="Program 2">
      <div class="card-body">
        <h5 class="card-title">Program DEHORS</h5>
        <div class="radio-wrapper">
          <input type="radio" value="Program_DEHORS" id="home" name="place">
          <label for="home">
            <div class="tick_mark"></div>
          </label>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-3 oncklick" id="cardOutdoors" data-radio-button-id="outdoors">
      <img src="https://cdn-icons-png.flaticon.com/512/93/93624.png" class="card-img-top"
        style="padding:35px;border-bottom: inset;" alt="Program 3">
      <div class="card-body">
        <h5 class="card-title">Program Maison</h5>
        <div class="radio-wrapper">
          <input type="radio" value="Program_Outdoor" id="outdoors" name="place">
          <label for="outdoors">
            <div class="tick_mark"></div>
          </label>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="btn previousStep"
    style="background-color: #f34e3a; float: left; border-radius: initial; color: #fff; height: 45px; width: 150px;">Précédent</button>
</fieldset>