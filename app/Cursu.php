<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cursu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
