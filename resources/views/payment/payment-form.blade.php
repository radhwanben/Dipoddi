@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-12 ms-auto">
                    <div class="multisteps-form mb-8">
                        <!--form panels-->
                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto"
                                 style="margin-right: 0px !important;margin-top: 100px !important;margin-bottom: 126px !important;">
                                <div class="card w-85 z-index-0 fadeIn3 fadeInBottom">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                            <div class="text-center">
                                                <h6 class="text-white">Complete Payment</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="multisteps-form__content p-4 pt-0">
                                            @if (session('success'))
                                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                                    <span class="text-sm"><b>Success!</b> {{ session('success') ?? 'Success' }}</span>
                                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                            data-bs-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            @if (session('error'))
                                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                                <span
                                                    class="text-sm"><b>Error!</b> {{ session('error') ?? 'Error' }}</span>
                                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                            data-bs-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                            data-bs-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            <div class="row mt-5">
                                                <div class="col-12">
                                                    <form action="{{ route('client.payment.stripe') }}"  id="payment-form" method="POST">
                                                        @csrf

                                                        <div class="input-group input-group-dynamic is-filled">
                                                            <label class="form-label" for="">Name</label>
                                                            <input type="text" name="name" id="card-holder-name" class="form-control" value="" placeholder="Name on the card">
                                                        </div>

                                                        <br>
                                                        <div class="input-group input-group-dynamic is-filled">
                                                            <label class="form-label">Card Details</label>
                                                            <div id="card-element" class="form-control" style='height: 2.4em; padding-top: .7em;'></div>
                                                        </div>
                                                        <br>
                                                        <div id="card-errors" role="alert"></div>
                                                        <input type="hidden" name="plan" id="plan" value="price_1PECnQFHxJnels1IXhsvzdrW">
                                                        <button type="submit" class="btn bg-gradient-primary w-100" id="card-button" data-secret="{{$intent->client_secret}}">Start your free trial</button>
                                                    </form>
                                                    <div class="alert alert-success alert-dismissible text-white mt-3" role="alert"
                                                         style=" background-image: linear-gradient(195deg, #3c3c43 0%, #444446c7 100%); text-align: center; font-size: 16px; ">
                                                        <p class="">Only £40.00/month. Cancel anytime. <br>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection