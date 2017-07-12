<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Castigo extends Model
{
    protected $table = "castigos";
    protected $primaryKey = "idCastigo";

    protected $fillable = ['rut','fecha','descripcion','estado'];

    public function jugador()//ok 0
    {
        return $this->belongsTo('App\Jugador','rut');
    }

 /* public function getNombresAttribute()
 {
    return $this->nombres . " " . $this->last_name;
 }*/




}
