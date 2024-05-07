<?php

namespace App\Http\Controllers\Programms;

use App\Http\Controllers\Controller;
use App\Mail\NutritionMail;
use App\Models\Program;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class NutritionController extends Controller
{
    public function index()
    {
        return view('programmes.nutrition');
    }

    public function store(HttpFoundationRequest $request)
    {
        dd($request);
        $days = $request->get('days');
        $numberDays = count($days);
        $program = Program::where('program_nb_jours', $numberDays)
            ->where('program_name', 'nutrition')
            ->first();

        $template = $program->Template->first();
        $this->SendMail(auth()->user(), $template->content);
    }

    private function SendMail($user, $content)
    {
        Mail::to($user->email)->send(new NutritionMail($user, $content));
    }
}
