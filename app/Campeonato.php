<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;




class Campeonato extends Model
{
    protected $table = "campeonatos";
    protected $primaryKey = 'idCampeonato';

    protected $fillable = ['nombre', 'fechaInicio', 'fechaTermino'];

    public function arbitros()//ok 0
    {
        return $this->belongsToMany('App\Arbitro','arbCampeonato','idCampeonato','rut')->withPivot('estado');
    }

    public function partidos()//ok 0
    {
    	return $this->hasMany('App\Partido','idCampeonato');
    }

   /* public function posiciones()//ok 0
    {
       /* return $this->hasMany('\App\Posicion','idCampeonato');
    }*/


   public function selectBGoleadores($query, $series) {

  return $query->select("CONCAT('nombres',' ','apellidoPaterno',' ','apellidoMaterno') AS NombreCompleto,'club','cantidad_gol' FROM v_campeonatos")->where('serie', 'LIKE', "%$series%")->groupBy('club');

}



 public function selectBuscarTarjetas($query, $series) {

  return $query->select("CONCAT('nombres',' ','apellidoPaterno',' ','apellidoMaterno') AS NombreCompleto,'club','cantidad_gol' FROM v_campeonatos")->where('serie', 'LIKE', "%$series%")->groupBy('club');

}




}
