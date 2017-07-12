<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;
/*use Carbon\Carbon;*/
use Laracasts\Flash\Flash;


class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('fecha', 'DESC')->paginate(3);
        
        return view('publico.noticias.index')->with('noticias', $noticias);
    }

  public function noticia()
    {
        $noticiass = Noticia::orderBy('fecha', 'DESC')->paginate(3);
        
        return view('admin.noticias.index')->with('noticiass', $noticiass);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    public function institucional()
    {
        return view('publico.noticias.institucional');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //imagen
        $file = $request->file('imagen');
        $nombreArchivo = $request->titulo . '_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path().'/images/noticias/';
        $file->move($path, $nombreArchivo);

        //dd($request->all());
        $noticia = new Noticia($request->all());
        $noticia->idClub = $request->user()->idClub;
        $noticia->fecha = date('Y/m/d H:i:s');         
        $noticia->imagen = '/images/noticias/'.$nombreArchivo;
        $noticia->save();

               

        Flash::success("Se ha publicado la noticia ".$noticia->titulo);
        return redirect()->route('admin.noticias');
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
