<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Castigo;
use App\Jugador;
use Laracasts\Flash\Flash;
//use DB;



class CastigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $castigos = Castigo::orderBy('Fecha', 'DESC')->paginate(10);
        
        return view('publico.castigos.index')->with('castigos', $castigos);
    }

     public function castigo()
    {
        $castigos = Castigo::orderBy('Fecha', 'DESC')->paginate(10);
        
        return view('admin.castigos.index')->with('castigos', $castigos);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$arr=(['nombres','apellidoPaterno','apellidoMaterno' ]);
       $jugadores = Jugador::all()->lists('nombres','rut');  

       //lists(['nombres' =>'nombres','apellidoPaterno' =>'apellidoPaterno','apellidoMaterno' =>'apellidoMaterno','rut' ]);
       
         return view('admin.castigos.create')->with('jugadores',$jugadores);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $castigos = new Castigo($request->all());
        $castigos->rut          = $request->rut;
        $castigos->fecha        = $request->fecha;
        $castigos->descripcion  = $request->descripcion;
        $castigos->Sancion  = $request->Sancion;


        $castigos->save();

         Flash::success("Se ha asignado satisfactoriamente un castigo ");
        return redirect()->route('admin.castigos');
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


    /*  public function estado($id)
    {
         $castigo = Castigo::find($id);
       
        return view('admin.castigos.estado',['castigo'=> $castigo]);
    }*/

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

     public function estado(Request $request, $id)
    {
        $castigo = Castigo::find($id);
        $castigo->estado='Deshabilitado';         // = $request->estado;
        $castigo->save();
        
        Flash::success('Al castigo se le ha cambiado el estado exitosamente.');
        return redirect()->route('admin.castigos');
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
