<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome_1');
});



Route::group(['prefix' => 'publico'], function(){
	Route::resource('noticias','NoticiasController@index');
	Route::resource('castigos','CastigosController@index');
	Route::resource('jugadores','JugadoresController');
	Route::resource('clubes','ClubesController');
	Route::resource('campeonatos','CampeonatosController@index');
		Route::get('/institucional', [
	'uses'	=>	'NoticiasController@institucional',
	'as'	=>	'publico.institucional'
]);
	//Route::resource('template','LteController@main');

Route::get('clubes/{id}/detalle',[
	'uses'	=>	'ClubesController@detalle',
	'as'	=>	'clubes.detalle'
]);
Route::get('campeonatos/{id}/info',[
	'uses'	=>	'CampeonatosController@info',
	'as'	=>	'campeonatos.info'
]);
Route::get('campeonatos/{id}/resultados',[
	'uses'	=>	'CampeonatosController@resultados',
	'as'	=>	'campeonatos.resultados'
]);
Route::get('campeonatos/{id}/tablas',[
	'uses'	=>	'CampeonatosController@tablas',
	'as'	=>	'campeonatos.tablas'
]);
Route::get('campeonatos/{id}/goleadores',[
	'uses'	=>	'CampeonatosController@goleadores',
	'as'	=>	'campeonatos.goleadores'
]);

Route::get('campeonatos/{id}/detalle',[
	'uses'	=>	'PartidosController@resultado_detalle',
	'as'	=>	'campeonatos.detalle'
]);
Route::get('campeonatos/{id}/arbitros',[
	'uses'	=>	'CampeonatosController@arbitros',
	'as'	=>	'campeonatos.arbitros'
]);






});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {  //'auth'

  Route::get('users/index',[
		'uses'	=>	'UsersController@index',
		'as'	=>	'admin.users'
	]);
  Route::get('users/create',[
		'uses'	=>	'UsersController@create',
		'as'	=>	'admin.users.create'
	]);
	Route::post('users/store',[
		'uses'	=>	'UsersController@store',
		'as'	=>	'admin.users.store'
	]);


  Route::get('users/{id}/edit',[
		'uses'	=>	'UsersController@edit',
		'as'	=>	'admin.users.edit'
	]);

  Route::put('users/{id}/update',[
	'uses'	=>	'UsersController@update',
	'as'	=>	'admin.users.update'
	]);

	

 Route::get('users/{id}/resetPassword',[
		'uses'	=>	'UsersController@resetPassword',
		'as'	=>	'admin.users.resetPassword'
	]);

	Route::get('users/{id}/estado',[
		'uses'	=>	'UsersController@estado',
		'as'	=>	'admin.users.estado'
	]);

	Route::put('users/{id}/update_estado',[
	'uses'	=>	'UsersController@update_estado',
	'as'	=>	'admin.users.update_estado'
	]);
 Route::get('users/{id}/destroy',[
	'uses'	=>	'UsersController@destroy',
	'as'	=>	'admin.users.destroy'
	]);


 Route::get('castigos/index',[
	'uses'	=>	'CastigosController@castigo',
	'as'	=>	'admin.castigos'
	]);
 Route::get('castigos/create',[
	'uses'	=>	'CastigosController@create',
	'as'	=>	'admin.castigos.create'
	]);


	Route::post('castigos/store',[
	'uses'	=>	'CastigosController@store',
	'as'	=>	'admin.castigos.store'
	]);


 Route::get('jugadores/index',[
	'uses'	=>	'JugadoresController@jugador',
	'as'	=>	'admin.jugadores'
	]);
 Route::get('jugadores/create',[
	'uses'	=>	'JugadoresController@create',
	'as'	=>	'admin.jugadores.create'
	]);

 Route::get('jugadores/store',[
	'uses'	=>	'JugadoresController@store',
	'as'	=>	'admin.jugadores.store'
	]);


 Route::get('jugadores/{id}/destroy',[
	'uses'	=>	'JugadoresController@destroy',
	'as'	=>	'admin.jugadores.destroy'
	]);

 Route::get('noticias/index',[
	'uses'	=>	'NoticiasController@noticia',
	'as'	=>	'admin.noticias'
]);
 Route::get('noticias/create',[
	'uses'	=>	'NoticiasController@create',
	'as'	=>	'admin.noticias.create'
	]);
 Route::post('noticias/store',[
	'uses'	=>	'NoticiasController@store',
	'as'	=>	'admin.noticias.store'
	]);

  Route::get('eventos/index',[
	'uses'	=>	'EventosController@index',
	'as'	=>	'admin.eventos'
]);
 
	Route::get('eventos/create',[
	'uses'	=>	'EventosController@create',
	'as'	=>	'admin.eventos.create'
	]);
	Route::post('eventos/store',[
	'uses'	=>	'EventosController@store',
	'as'	=>	'admin.eventos.store'
	]);

   Route::get('eventos/{id}/edit',[
	'uses'	=>	'EventosController@edit',
	'as'	=>	'admin.eventos.edit'
	]);

   Route::put('eventos/{id}/update',[
	'uses'	=>	'EventosController@update',
	'as'	=>	'admin.eventos.update'
	]);


	Route::get('eventos/{id}/situacion',[
	'uses'	=>	'EventosController@situacion',
	'as'	=>	'admin.eventos.situacion'
	]);

	Route::put('eventos/{id}/update_situacion',[
	'uses'	=>	'EventosController@update_situacion',
	'as'	=>	'admin.eventos.update_situacion'
	]);


 Route::get('tareas/index',[
	'uses'	=>	'TareasController@index',
	'as'	=>	'admin.tareas'
	]);
Route::get('tareas/create',[
	'uses'	=>	'TareasController@create',
	'as'	=>	'admin.tareas.create'
	]);
	Route::post('tareas/store',[
	'uses'	=>	'TareasController@store',
	'as'	=>	'admin.tareas.store'
	]);

	Route::get('tareas/detalle',[
	'uses'	=>	'TareasController@create_usu',
	'as'	=>	'admin.tareas.detalle'
	]);

	Route::post('tareas/store_usu',[
	'uses'	=>	'TareasController@store_usu',
	'as'	=>	'admin.tareas.store_usu'
	]);

Route::get('tareas/{id}/registroDetalle',[
	'uses'	=>	'TareasController@detalle',
	'as'	=>	'admin.tareas.registroDetalle'
	]);



 
   Route::get('campeonatos/campeonato',[
	'uses'	=>	'CampeonatosController@campeonato',
	'as'	=>	'admin.campeonatos'
]);

 Route::get('campeonatos/create',[
	'uses'	=>	'CampeonatosController@create',
	'as'	=>	'admin.campeonatos.create'
]);

 Route::post('campeonatos/store',[
	'uses'	=>	'CampeonatosController@store',
	'as'	=>	'admin.campeonatos.store'
]);

  Route::get('campeonatos/{id}/edit',[
	'uses'	=>	'CampeonatosController@edit',
	'as'	=>	'admin.campeonatos.edit'
]);

Route::put('campeonatos/{id}/update',[
	'uses'	=>	'CampeonatosController@update',
	'as'	=>	'admin.campeonatos.update'
]);
 

 
Route::get('campeonatos/partidos/{id}/index',[
	'uses'	=>	'CampeonatosController@partido',
	'as'	=>	'admin.campeonatos.partidos'
]);


Route::get('campeonatos/partidos/create',[
	'uses'	=>	'PartidosController@create',
	'as'	=>	'admin.campeonatos.partidos.create'
]);

 Route::post('campeonatos/partidos/store',[
	'uses'	=>	'PartidosController@store',
	'as'	=>	'admin.campeonatos.partidos.store'
]);



 Route::get('campeonatos/partidos/create_detalle',[
	'uses'	=>	'PartidosController@create_detalle',
	'as'	=>	'admin.campeonatos.partidos.detalle'
]);


Route::post('campeonatos/partidos/store_detalle',[
	'uses'	=>	'PartidosController@store_detalle',
	'as'	=>	'admin.campeonatos.partidos.store_detalle'
]);

 Route::get('campeonatos/partidos/{id}/detalle',[
	'uses'	=>	'PartidosController@detalle',
	'as'	=>	'admin.campeonatos.partidos.registrodetalle'
]);

Route::get('campeonatos/partidos/{id}/edit',[
	'uses'	=>	'PartidosController@edit',
	'as'	=>	'admin.campeonatos.partidos.edit'
]);

Route::put('campeonatos/partidos/{id}/update',[
	'uses'	=>	'PartidosController@update',
	'as'	=>	'admin.campeonatos.partidos.update'
]);


Route::get('campeonatos/partidos/{id}/resultado',[
	'uses'	=>	'PartidosController@edit_res',
	'as'	=>	'admin.campeonatos.partidos.resultado'
]);

Route::put('campeonatos/partidos/{id}/update_resultado',[
	'uses'	=>	'PartidosController@update_resultado',
	'as'	=>	'admin.campeonatos.partidos.update_resultado'
]);





Route::get('campeonatos/partidos/{id}/situacion',[
	'uses'	=>	'PartidosController@situacion',
	'as'	=>	'admin.campeonatos.partidos.situacion'
]);

Route::put('campeonatos/partidos/{id}/update_situacion',[
	'uses'	=>	'PartidosController@update_situacion',
	'as'	=>	'admin.campeonatos.partidos.update_situacion'
]);



Route::get('campeonatos/Arbitros/{id}/arbitro_campeonato',[
	'uses'	=>	'CampeonatosController@arbitro_campeonato',
	'as'	=>	'admin.campeonatos.Arbitros'
]);


Route::get('campeonatos/Arbitros/create',[
	'uses'	=>	'ArbitrosController@create',
	'as'	=>	'admin.campeonatos.Arbitros.create'
]);


Route::post('campeonatos/Arbitros/store',[
	'uses'	=>	'ArbitrosController@store',
	'as'	=>	'admin.campeonatos.Arbitros.store'
]);

Route::get('campeonatos/Arbitros/{id}/estado',[
	'uses'	=>	'ArbitrosController@estado',
	'as'	=>	'admin.campeonatos.Arbitros.estado'
]);


Route::put('campeonatos/Arbitros/{id}/update_estado',[
	'uses'	=>	'PartidosController@update_estado',
	'as'	=>	'admin.campeonatos.Arbitros.update_estado'
]);





Route::get('notificaciones/mailbox2',[
	'uses'	=>	'EmailController@Crear',
	'as'	=>	'admin.notificaciones.mailbox'
]);


Route::post('notificaciones/index',[
	'uses'	=>	'EmailController@Enviar',
	'as'	=>	'admin.notificaciones'
]);

Route::post('notificaciones/store',[
	'uses'	=>	'EmailController@store',
	'as'	=>	'admin.notificaciones.store'
]);



});


Route::group(['prefix' => 'Dirigente', 'middleware' => 'auth'], function() { 

Route::get('clubes/club',[
	'uses'	=>	'ClubesController@edit',
	'as'	=>	'Dirigente.clubes'
]);

Route::put('clubes/update',[
	'uses'	=>	'ClubesController@update',
	'as'	=>	'Dirigente.clubes.update'
]);





});






//auth
Route::get('auth/login', [
	'uses'	=>	'Auth\AuthController@getLogin',
	'as'	=>	'auth.login'
]);
Route::post('auth/login', [
	'uses'	=>	'Auth\AuthController@postLogin',
	'as'	=>	'auth.postLogin'
]);
Route::get('auth/logout', [
	'uses'	=>	'Auth\AuthController@getLogout',
	'as'	=>	'auth.getLogout'
]);

















