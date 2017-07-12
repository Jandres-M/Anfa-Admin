<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tarea extends Model
{
    protected $table = "tareas";
    protected $primaryKey = "idtarea";

    protected $fillable = ['tarea','descripcion','fechaInicio','horaInicio','fechaTermino','horaTermino'];

  public function usuario()//ok 0
    {
        return $this->belongsToMany('App\User','tarea_usuarios','idtarea','IdUsuario');
    }


public function Date()//ok 0
    {
    	$fechaact=Carbon::now();
    	$fecha= $fechaact->format('Y-m-d H:i:s');
        return $fecha;
    }

}
