<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Candidature extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
    public function session()
    {
        return $this->belongsTo(session::class);
    }
    public function entretien()
    {
        return $this->hasOne(Entretien::class);
    } 
    
}
