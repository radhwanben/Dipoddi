<?php

namespace App\Http\Controllers\Programms;

use App\Http\Controllers\Controller;
use App\Mail\ProgramMail;
use App\Providers\Programms\ProgrammServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Request;

class ProgramController extends Controller
{
    public ProgrammServiceProvider $programService;

    public function __construct(ProgrammServiceProvider $programService)
    {
        $this->programService = $programService;
    }

    public function index()
    {
        return view('programmes.new');
    }

    public function sendProgram(Request $request)
    {
        // dd($request->get('days'));
        $programType = $request->get('place');
        $program = $request->get('type');
        $targetName = $request->get('target_muscule');
        $daysNumber = count($request->get('days'));
        $tempalte = $this->programService->getProgramm($programType, $program, $targetName, $daysNumber);

        // send mail

        try {
            Mail::to(Auth::user())
            ->send(new ProgramMail($tempalte));

            return redirect(route('thanks'));
        } catch (\Exception $e) {
            Log::error($$e->getMessage());
        }
    }
}
