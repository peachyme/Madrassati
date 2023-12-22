<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entretien extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    } 
}
