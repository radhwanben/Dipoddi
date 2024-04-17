<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramType extends Model
{
    use HasFactory;

    protected $table = 'program_types';

    protected $fillable = [
        'type_name',
    ];


    public function programmes()
    {
        $this->hasMany(ProgrammModel::class);
    }
}
