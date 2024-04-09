@extends('layouts.app')


@section('content')
<div class="container">
  <h2>CHOOSE YOUR PROGRAMS</h2>
  <div class="progress">
    <div class="progress-bar" id="progressBar"></div>
  </div>
  <div class="multistep-form">
  <form id="multistepForm" action="{{ route('SaveNutrition') }}" method="post">
    @csrf
          <div class="row mt-3">
        <div class="col text-center">
          <h2>QUELS JOURS VOULEZ-VOUS EFFECTUER VOTRE PROGRAMME DIPODDI?</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="monday" name="days[]" value="Lundi">
                <label class="form-check-label" for="monday">Lundi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Mardi">
                <label class="form-check-label" for="monday">Mardi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Mercredi">
                <label class="form-check-label" for="monday">Mercredi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Jeudi">
                <label class="form-check-label" for="monday">Jeudi</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Vendredi">
                <label class="form-check-label" for="monday">Vendredi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Samedi">
                <label class="form-check-label" for="monday">Samedi</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Dimanche">
                <label class="form-check-label" for="monday">Dimanche</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col text-center">
          <button type="submit" class="btn btn-primary ">Next</button>
        </div>
      </div>

  </form>
  </div>
</div>

@endsection
