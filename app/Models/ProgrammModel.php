<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammModel extends Model
{
    use HasFactory;

    protected $table = 'programs';

    protected $fillable = [
        'program_name',
    ];

    public function ProgramTyope()
    {
        $this->belongsTo(ProgramType::class);
    }

    public function target()
    {
        $this->hasMany(Target::class);
    }

}
