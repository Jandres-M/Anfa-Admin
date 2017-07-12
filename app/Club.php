<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = "clubes";
    protected $primaryKey = "idClub";

    protected $fillable = ['club','fechaFundacion', 'descripcion'];

    public function usuarios()//ok 0
    {
    	return $this->hasMany('\App\User','idClub');
    }

    public function noticias()//ok 0
    {
    	return $this->hasMany('\App\Noticia','idClub');
    }

    public function series()//ok 0
    {
        return $this->hasMany('\App\Serie','idClub');
    }

    public function jugadores()//ok 0
    {
       return $this->belongsToMany('App\Jugador','jugadorClub','idClub','rut')->withPivot('fechaInicio', 'fechaTermino', 'estado');
       // return $this->belongsToMany('\App\Jugador','jugadorClub')->withPivot('idClub','fechaInicio', 'fechaTermino', 'estado');
       

    }
}
