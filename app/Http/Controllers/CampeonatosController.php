<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Campeonato;
use App\Partido;
//use App\Posicion;
use App\Serie;
use App\Arbitro;
use App\Jugador;
use Laracasts\Flash\Flash;

class CampeonatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('fechaInicio', 'DESC')->paginate(5);
        
        return view('publico.campeonatos.index')->with('campeonatos', $campeonatos);
    }


     public function campeonato()
    {
        $campeonatos = Campeonato::orderBy('fechaInicio', 'DESC')->paginate(3);
        
        return view('admin.campeonatos.campeonato')->with('campeonatos', $campeonatos);
    }

   public function partido($id) {

  $campeonato = Campeonato::find($id);
      return view('admin.campeonatos.partidos.index')->with('campeonato', $campeonato);

 }
 

 public function arbitro_campeonato($id)
    {
        $campeonato = Campeonato::find($id);

        return view('admin.campeonatos.Arbitros.index')->with('campeonato', $campeonato);
    }


  

    public function info($id)
    {
        $campeonato = Campeonato::find($id);
        return view('publico.campeonatos.info')->with('campeonato', $campeonato);
    }

    public function resultados($id)
    {
        $campeonato = Campeonato::find($id);
        return view('publico.campeonatos.resultados')->with('campeonato', $campeonato);
    }

  /*  public function tablas($id)
    {
        $posiciones = Campeonato::find($id)->posiciones;

        $posiciones = $posiciones->sortByDesc('Puntaje_total');  /*puntos

        return view('publico.campeonatos.tablas')->with('posiciones', $posiciones);
    }*/

    public function arbitros($id)
    {
        $arbitros = Campeonato::find($id)->arbitros;

        return view('publico.campeonatos.arbitros')->with('arbitros', $arbitros);
    }

    public function goleadores(Request $request,$id)//id
    {
       $jugadores = Campeonato::find($id);
         $jugadores = Campeonato::BGoleadores($request->serie)->orderBy('cantidad_gol', 'DESC')->fake(10)->get();
         //jugadores->sortByDesc(count('cantidad_gol'))->paginate(10);   //->fake(10)->get();
   // $jugadores = Campeonato::whereHas('jugadores')->pluck(count('cantidad_gol'))->fake(10)->get();
       // $jugadores = $jugadores->sortByDesc('cantidad_gol')->fake(10)->get($id);

        return view('publico.campeonatos.goleadores')->with('jugadores',$jugadores );
    }

    public function tarjetas($id)
    {
        $jugadores = Campeonato::find($id)->jugadores;
        
       // $jugadores = $jugadores->sortByDesc()->paginate(3);

        return view('publico.campeonatos.tarjetas')->with('jugadores',$jugadores );
    }

     


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.campeonatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    $campeonato = new Campeonato($request->all());
    $campeonato->save();
        
        Flash::success("Se ha creado satisfactoriamente el campeonato ".$campeonato->campeonato );
        return redirect()->route('admin.campeonatos');


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
      $campeonato = Campeonato::find($id);
       return view('admin.campeonatos.edit',['campeonato'=>$campeonato]);
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
         $campeonato = Campeonato::find($id);
        
        /*$campeonato->campeonato   = $request->campeonato;
        $campeonato->tipo         = $request->tipo;
        $campeonato->año          = $request->año;*/
        $campeonato->fechaInicio  = $request->fechaInicio;
        $campeonato->fechaTermino  = $request->fechaTermino;
        $campeonato->save();
        
        Flash::success('El usuario '.$campeonato->campeonato.' ha sido editado exitosamente.');
        return redirect()->route('admin.campeonatos');    }

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
