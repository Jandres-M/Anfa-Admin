<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
    protected $primaryKey = "Id_Evento";

protected $fillable = ['Evento','Fecha_inicio','Hora_inicio','Fecha_Termino','Hora_Termino','Descripcion','Ubicacion','Situacion'];

/*public function usuario()//ok 0
    {
        return $this->belongsToMany('App\User','usuario_eventos','Id_Evento','IdUsuario');
    }*/


}
