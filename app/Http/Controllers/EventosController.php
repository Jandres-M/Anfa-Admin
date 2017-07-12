<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evento;
use Laracasts\Flash\Flash;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('Fecha_inicio', 'DESC')->paginate(15);
        
        return view('admin.eventos.index')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento($request->all());

       


        //$evento->Situacion->defaul('');
        $evento->save();

        Flash::success("Se ha asignado satisfactoriamente un evento ");
        return redirect()->route('admin.eventos');
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
        $evento = Evento::find($id);
         return view('admin.eventos.edit',['evento'=>$evento]);
    }

     public function situacion($id)
    {
        $evento = Evento::find($id);
        return view('admin.eventos.situacion',['evento'=>$evento]); //->$id
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
         $evento = Evento::find($id);
         $evento->Fecha_inicio  = $request->Fecha_inicio;
         $evento->Fecha_termino = $request->Fecha_termino;
         $evento->Ubicacion; 
       
        $evento->save();
        
        Flash::success('El evento '.$evento->Evento.' ha sido editado exitosamente');
        return redirect()->route('admin.eventos');
    }


     public function update_situacion(Request $request,$id)
    {
       $evento = Evento::find($id);
       $evento->Situacion =  $request->Situacion;
                 
       $evento->save();
        Flash::success('La situacion de evento '.$evento->Evento.' ha sido cambiado exitosamente');
        return redirect()->route('admin.eventos');    

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
