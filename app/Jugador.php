<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = "jugadores";
    protected $primaryKey = "rut";

    protected $fillable = ['rut', 'dv', 'nombres', 'apellidoPaterno', 'apellidoMaterno', 'fechaNacimiento'];

    public function castigos()//ok 0
    {
    	return $this->hasMany('\App\Castigo','rut');
    }

    public function clubes() //ok 0
    {
     return $this->belongsToMany('\App\Club','jugadorClub','rut','idClub')->withPivot('fechaInicio', 'fechaTermino', 'estado');
       // return $this->belongsToMany('\App\Club','jugadorClub')->withPivot('rut','fechaInicio', 'fechaTermino', 'estado');
    }
    
    //scope para buscar por nombre
    public function scopeBuscarNombre($query, $nombres)
    {
        //return $query->where('nombres', 'LIKE', "%$nombres%");
        return $query->where('nombres', 'LIKE', "%$nombres%")->orWhere('apellidoPaterno', 'LIKE', "%$nombres%")->orWhere('apellidoMaterno', 'LIKE', "%$nombres%")->orWhere('rut', 'LIKE', "%$nombres%");
    }

     public function Partido()//ok 0
    {
       return $this->belongsToMany('\App\Partido','detalles_partido','idjugador','idPartido')->withPivot('cantidad_gol', 'tarjeta_amarilla','tarjeta_roja');  
    }

  


}
