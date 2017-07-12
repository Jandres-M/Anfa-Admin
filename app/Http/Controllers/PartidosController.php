<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Campeonato;
use App\Partido;
use App\Jugador;
use App\Cancha;
use App\Club;
use App\Serie;
use Laracasts\Flash\Flash;
use App\Http\Requests\PartidoRequest;




class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $partido = Partido::find($id);
        return view('admin.campeonatos.partidos.index')->with('partido', $partido);*/
    }

   

     public function detalle($id) {

  $jugadores = Partido::find($id)->$jugadores;
      return view('admin.campeonatos.partidos.registrodetalle')->with('jugadores', $jugadores);

 }



    public function resultado_detalle($id)
    {
       // $camp = Campeonato::find($id);

        $partidos = Partido::find($id);
        $jugadores = Jugador::all();
      //  $jugadores = $jugad->whereHas('Partido');
        //Jugador::all();

        
       // $jugadores = $jugadores->sortByDesc()->paginate(3);

        return view('publico.campeonatos.detalle')->with('partidos', $partidos,'jugadores', $jugadores );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {
        $canchas = Cancha::all()->lists('cancha','idCancha');
       $series = Serie::all();    //->lists('serie','local','visita');
       // $clubes = Club::all()->lists('club','idClub');
     //   $clubes = Club::all()->lists('club','local','visita');
        
      return view('admin.campeonatos.partidos.create')->with('canchas','series',$canchas, $series);
    }


     public function create_detalle()
    { 
    $jugadores = Jugador::all()->lists('nombres','rut');   

         return view('admin.campeonatos.partidos.detalle')>with('jugadores', $jugadores);
    }


   

  /*   public function resultado($id)  {
    $partidos = Partido::find($id);

      return view('admin.campeonatos.partidos.resultado')->with('partidos', $partidos);
    }*/



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $partido = new Partido($request->all());
         $partido->campeonatos()->idCampeonato = $request->idCampeonato;
       

         $partido->save();
         
        Flash::success("Se ha creado satisfactoriamente el partido " );
        return redirect()->route('admin.campeonatos.partidos');
         
    }

   public function store_detalle(Request $request)
    {
         $partido = new Partido($request->Jugador()->all());
        // $partido->Jugador->attach('idPartido','idjugador',array('cantidad_gol'=>$input['cantidad_gol'],            'tarjeta_amarilla'=>$input['tarjeta_amarilla'],'tarjeta_roja'=>$input['tarjeta_roja']);
         
         $partido->save();
         
        Flash::success("Se ha creado satisfactoriamente el detalle partido");
        return redirect()->route('admin.campeonatos.partidos');
         
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
        $partido = Partido::find($id);
       return view('admin.campeonatos.partidos.edit',['partido'=>$partido]);
    }

     public function edit_res($id)
    {
        $partido = Partido::find($id);
       return view('admin.campeonatos.partidos.resultado',['partido'=>$partido]);//->$id
    }


     public function situacion($id)
    {
       $partido = Partido::find($id);
        return view('admin.campeonatos.partidos.situacion',['partido'=>$partido]); //->$id
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $partido = Partido::find($id);
       $partido->idCancha = $request->idCancha;
       $partido->fecha =  $request->fecha;
      // $partido->date('fecha') =  $request->date('fecha);
        
        
       
       $partido->save();
        Flash::success('El partido ha sido editado exitosamente.');
        return redirect()->route('admin.campeonatos.partidos');    

    }

    public function update_resultado(Request $request,$id)
    {
       $partido = Partido::find($id);
       $partido->golesLocal =  $request->golesLocal;
       $partido->golesVisita = $request->golesVisita; 
        
       
       $partido->save();
        Flash::success('El resultado se ha publicado exitosamente.');
        return redirect()->route('admin.campeonatos.partidos');    

    }


     public function update_situacion(Request $request,$id)
    {
       $partido = Partido::find($id);
       $partido->situacion;
                 
       $partido->save();
        Flash::success('La situacion de partido ha sido cambiado exitosamente.');
        return redirect()->route('admin.campeonatos.partidos');    

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
