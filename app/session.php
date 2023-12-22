<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class session extends Model
{

    use HasFactory;
    protected $guarded = [];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function Candidature()
    {
        return $this->hasMany(Candidature::class);
    }
    
}