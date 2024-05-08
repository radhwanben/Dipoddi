<?php

namespace App\Providers\Programms;

use App\Models\Target;
use App\Models\ProgramType;
use App\Models\ProgrammModel;
use App\Models\ProgramTemplate;

class ProgrammServiceProvider
{
    public function getProgramm($programType,$programName,$targetName,$DaysNumber)
    {
        $programTypeName=ProgramType::Where('type_name',$programType)->first();
        $program = ProgrammModel::Where('program_type_id',$programTypeName->id)->where('program_name',$programName)->first();
        $target= Target::Where('program_id',$program->id)->where('target_description',$targetName)->first();
        $template = ProgramTemplate::Where('target_id',$target->id)->where('nb_days',$DaysNumber)->first();
        return $template;

    }

    
}