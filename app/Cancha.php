<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $table = "canchas";
    protected $primaryKey = "idCancha";

    protected $fillable = ['nombreCancha', 'descripcion'];

    public function partidos()//ok 0
    {
    	return $this->hasMany('\App\Partido','idCancha');
    }
}
