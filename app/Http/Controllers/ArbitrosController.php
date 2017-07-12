<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Arbitro;

class ArbitrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arbitros=Arbitro::all()->lists(concat('(nombres," ", apellidos)'),'rut');  
        return view('admin.campeonatos.Arbitros.create')->with('arbitros', $arbitros);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     $arbitro = new Arbitro($request->all());
     $arbitro->campeonatos()->attach('rut','idCampeonato');
     $arbitro->campeonatos()->idCampeonato = $request->idCampeonato;
     $arbitro->save();
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
        //
    }


      public function estado($id)
    {
         $arbitro = Arbitro::find($id);
       
        return view('admin.campeonatos.Arbitros.estado',['arbitro'=>$arbitro]);
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
        //
    }



     public function update_estado(Request $request,$id)
    {
        $arbitro = Arbitro::find($id);
         $arbitro->estado=  $request->campeonatos()->pivot->estado;
        $arbitro->save();
        
        Flash::success('El arbitro '.$arbitro->nombres.' '.$arbitro->apellidos.' se le ha cambiado el estado exitosamente.');
        return redirect()->route('admin.campeonatos.Arbitros');
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
