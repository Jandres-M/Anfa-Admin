<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Arbitro extends Model
{
    protected $table = "arbitros";
    protected $primaryKey = "rut";

    protected $fillable = ['rut', 'nombres', 'apellidos','estado'];

    public function campeonatos()//ok 0
    {
        return $this->belongsToMany('App\Campeonato','arbCampeonato','rut','idCampeonato')->withPivot('estado');
    }

/* public function arbitros()//ok 0
    {
        return 
    }*/


}
