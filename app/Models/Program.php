<?php


namespace App\Models;

use App\Models\Template;
use Illuminate\Database\Eloquent\Model;

class Program extends  Model
{
    protected $table = 'program';

    protected $fillable = [
        'program_nb_jours',
        'program_name',
        'program_mode',
        'program_level',
        'program_type_exercice',
        'program_objectif',
        'program_group'
    ];

    public function Template()
    {
        return $this->hasMany(Template::class);
    }
}