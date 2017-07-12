<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jugador;
use App\Club;
use Laracasts\Flash\Flash;


class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jugadores = Jugador::BuscarNombre($request->nombre)->orderBy('rut', 'ASC')->paginate(30);

        //$jugadores = Jugador::orderBy('id', 'ASC')->paginate(4);
        return view('publico.jugadores.index')->with('jugadores', $jugadores);
    }  

     public function jugador()
    {
       $jugadoress = Jugador::orderBy('rut', 'ASC')->paginate(30);

        //$jugadores = Jugador::orderBy('id', 'ASC')->paginate(4);
        return view('admin.jugadores.index')->with('jugadoress', $jugadoress);
    }  

      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()    
    {
        $jugadores = Jugador::all()->lists('nombres','rut')
   //$jugadores=Jugador::all()->lists(concat('nombres'," ",'apellidoPaterno'," ",'apellidoMaterno'),'rut');      
  // $clubes = Club::all()->lists('club','idClub');
       return view('admin.jugadores.create')->with('jugadores', $jugadores;     
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {    //input

        $jugadores = new Jugador($request->all());
        $jugadores->clubes()->attach('rut','idClub', array('fechaInicio'=>'fechaInicio','fechaTermino'=>'fechaTermino','estado'=>'Habilitado'));
        $jugadores->pivot->estado; 
        $jugadores->save();

         Flash::success("Se ha asignado satisfactoriamente un jugador a un club ". $jugadores->nombres. $clubes->club );
        return redirect()->route('admin.jugadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $jugador = Jugador::find($id);
        $clubes = Club::all()->lists('club','idClub');
        return view('admin.jugadores.edit',['jugador'=> $jugador, 'clubes'=>$clubes]);
    }



  public function estado($id)
    {
        $jugador = Jugador::find($id);
       
        return view('admin.jugadores.estado',['jugador'=>$jugador]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jugador = Jugador::find($id);
        $jugador->idClub         = $request->idClub;
        $jugador->fechaInicio    = $request->fechaInicio;
        $jugador->fechaTermino   = $request->fechaTermino;
        
        $jugador->save();
        
        Flash::success('El jugador '.$jugador->nombres.' ha sido editado exitosamente.');
        return redirect()->route('admin.jugadores');
    }



     public function update_estado(Request $request, $id)
    {
      $jugador = Jugador::find($id);
      $jugador->clubes()->estado;
      $jugador->save();
        
        Flash::success('El jugador '.$jugador->nombres.' se le ha cambiado el estado exitosamente.');
        return redirect()->route('admin.jugadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);
        $jugador->delete();

        Flash::error('El jugador ha sido desvinculado');
        return redirect()->route('admin.jugadores');
    }
}
