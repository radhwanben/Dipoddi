<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTemplate extends Model
{
    use HasFactory;
    
    protected $table = 'programs_templates';

    protected $fillable = [
        'template_content',
        'status',
        'nb_days',
    ];


    public function target()
    {
        $this->belongsTo(Target::class);
    }
}


