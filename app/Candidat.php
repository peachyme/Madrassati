<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Candidat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
    public function cursus()
    {
        return $this->hasMany(Cursu::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class); 
    }


}
