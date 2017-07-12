<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = "series";
    protected $primaryKey = "idSerie";

    protected $fillable = ['serie', 'idClub'];

    public function club()//ok 0
    {
        return $this->belongsTo('App\Club','idClub');
    }

    public function partidosLocal()//ok 0
    {
    	return $this->hasMany('\App\Partido','local');
    }

    public function partidosVisita()//ok 0
    {
        return $this->hasMany('\App\Partido','visita');
    }

    public function posiciones()//ok 0
    {
       // return $this->hasMany('\App\Posicion','idSerie');
    }
}
