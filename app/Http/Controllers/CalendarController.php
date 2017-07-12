<?php
 
namespace App\Http\Controllers;
 
use App\Evento;
use App\Tarea;

use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class CalendarController extends Controller
{
    public function calendar()
    {
        //evento
       $data = array(); //declaramos un array principal que va contener los datos
    //tarea 
       $data1 = array();  

        $id = Evento::all()->lists('Id_Evento'); //listamos todos los id de los eventos
        $nombre = Evento::all()->lists('Evento'); 
        $fechaI = Evento::all()->lists('Fecha_inicio');                  //range('Fecha_inicio'->date(format), 
        $fechaT = Evento::all()->lists('Fecha_termino');               
        $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos


      
         $idt = Tarea::all()->lists('idtarea'); //listamos todos los id de los eventos
        $tarea = Tarea::all()->lists('tarea'); 
        $fechaIn = Tarea::all()->lists('fechaInicio');                  //range('Fecha_inicio'->date(format), 
        $fechaTer = Tarea::all()->lists('fechaTermino');               
        $count = count($idt); //contamos los ids obtenidos para saber el numero exacto de eventos

        //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        //for($i=0; $i&lt; $count; $i++){
       /* for($i=0; $count[$i&lt]; $i++){
            $data[$i] = array(
                "title"= $nombre[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
                "start"= $fechaI[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
                "end" = $fechaT[$i],
                "url" = "http://localhost:8000/admin/calendar/".$id[$i]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }

    // for($t=0;$t&lt;$count;$t++){
     for($i=0; $count[$i&lt]; $i++){
            $data1[$t] = array(
                "title"= $tarea[$t], //obligatoriamente "title", "start" y "url" son campos requeridos
                "start"= $fechaIn[$t], //por el plugin asi que asignamos a cada uno el valor correspondiente
                "end" = $fechaTer[$t],
              "url" = "http://localhost:8000/admin/calendar/".$idt[$t]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }*/


        return response()->json($data,$data1); //para luego retornarlo y estar listo para consumirlo
 
    }

      public function agregar() {

      \Cache::put('external-events',0);  
    //  array apcu_store ( array $external-events [, mixed $unused = NULL [, int $ttl = 0 ]] )
  
}



}