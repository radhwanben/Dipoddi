<?php

namespace App\Http\Controllers\Programms;

use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        return view('programmes.new');
    }
    public function sendMail()
    {

    }
}
