<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";
    protected $primaryKey = "idNoticia";

    protected $fillable = ['titulo', 'descripcion', 'idClub', 'fecha'];

    public function club()//ok 0
    {
        return $this->belongsTo('App\Club','idClub');
    }
}

