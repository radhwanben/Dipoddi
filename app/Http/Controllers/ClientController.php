<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    public function clientPaymentStripe()
    {
    }

    public function clientPaymentForm()
    {
        $data = [
            'intent' => auth()->user()->createSetupIntent(),
        ];

        return view('payment.payment-form')->with($data);
    }
}
