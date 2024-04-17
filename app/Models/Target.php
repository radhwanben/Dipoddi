<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $table = 'targets';

    protected $fillable = [
        'target_description',
    ];

    public function programmes()
    {
        $this->belongsTo(ProgrammModel::class);
    }

    public function Templates()
    {
        $this->hasMany(ProgramTemplate::class);
    }

}
