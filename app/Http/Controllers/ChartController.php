<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    /**
     * Show the application layout.
     *
     * @return \Illuminate\Http\Response
     */
    public function layout()
    {
    	return view('admin.estadisticas.grafica');
    }

    /**
     * Show the application dataAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataAjax(Request $request)
    {
    	$data = [];

        /*if($request->has('q')){
            $search = $request->q;*/
         /*   $data = DB::table("campeonatos","series","clubes")
            		->select("campeonato","tipo","año","serie","club")->groupby('idCampeonato')
            		->get();
        }*/
        $data = DB::view("v_campeonato")
                ->select("campeonato","tipo","año","serie","club")->get();   


        return response()->json($data);
    }
}