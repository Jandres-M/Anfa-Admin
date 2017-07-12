<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Club;
use App\User;
use Laracasts\Flash\Flash;


class ClubesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubes = Club::orderBy('fechaFundacion', 'DESC')->paginate(6);
       
       // $users =  Club::find($id)->$users;
        
        return view('publico.clubes.index')->with('clubes', $clubes);
    }




     public function detalle($id)
    {

      $club = Club::find($id);
      $users= User::all();
      $users->club()->where('idClub');
      
      //$users= $us;
     //  return view('publico.campeonatos.resultados')->with('campeonato', $campeonato);
       view('publico.clubes.detalle')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // $club = Club::find($id);
        return view('Dirigente.clubes.club');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         // $club = Club::find($id);
         $descripcion = $request->descripcion;
          Flash::success('La informacion de club ha sido editado exitosamente.');
        return redirect()->route('Dirigente.clubes');
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
