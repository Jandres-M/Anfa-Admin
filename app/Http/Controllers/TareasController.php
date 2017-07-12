<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tarea;
use App\User;
use App\Club;
use Laracasts\Flash\Flash;


class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tareas = Tarea::orderBy('fechaInicio', 'DESC')->paginate(10);
        
        return view('admin.tareas.index')->with('tareas', $tareas); 
    }

  public function detalle($id)
    {
       $tareas = Tarea::find($id)->orderBy('fechaInicio', 'ASC')->paginate(10);
        
        return view('admin.tareas.registroDetalle')->with('tareas', $tareas); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('admin.tareas.create');
    }

     public function create_usu()

    {
       // $tareas = Tarea::all()->lists('tarea','IdTarea');
        $users = User::all()->lists('rol','idUsuario');  
       // $clubes= Club::all()->lists('club','idClub');
         return view('admin.tareas.detalle')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tareas = new Tarea($request->all());
           
        $tareas->save();

         Flash::success("Se ha asignado satisfactoriamente una tarea ");
        return redirect()->route('admin.tareas');
    }

     public function store_usu(Request $request)
    {
         $tareas = new Tarea($request->usuario()->all());
        $tareas->usuario()->attach('idtarea','IdUsuario');
        $tareas->usuario()->idtarea = $request->idtarea;
      
        $tareas->save();

         Flash::success("Se ha asignado satisfactoriamente un asignado a tarea ");
        return redirect()->route('admin.tareas.registroDetalle');
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
