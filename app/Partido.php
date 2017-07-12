<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = "partidos";
    protected $primaryKey = "idPartido";

    protected $fillable = ['jornada', 'idCancha', 'fecha','Hora', 'local', 'visita', 'golesLocal', 'golesVisita', 'idCampeonato','situacion'];

    public function cancha()//ok 0
    {
        return $this->belongsTo('App\Cancha','idCancha');
    }

	public function campeonato()//ok 0
    {
        return $this->belongsTo('App\Campeonato','idCampeonato');
    }    

    public function serieLocal()//ok 0
    {
        return $this->belongsTo('App\Serie','local');
    }

    public function serieVisita()//ok 0
    {
        return $this->belongsTo('App\Serie','visita');
    }

    public function Jugador()//ok 0
    {
       return $this->belongsToMany('App\Jugador','detalles_partido','idPartido','idjugador')->withPivot('cantidad_gol', 'tarjeta_amarilla','tarjeta_roja');  
    }
}
