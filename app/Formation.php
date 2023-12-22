<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Formation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sessions()
    {
        return $this->hasMany(session::class);
    }

    public function Responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
    
}
