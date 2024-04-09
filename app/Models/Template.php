<?php


namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name',
        'content',
        'program_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}