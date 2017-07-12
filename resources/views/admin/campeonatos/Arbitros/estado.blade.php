@extends('app')

@section('title', 'Alterar estado de arbitro '.$arbitro->nombres.' '.$arbitro->apellidos.' || '.$arbitro->pivot->estado)

@section('content')
	{!! Form::open(['route' => ['admin.campeonatos.Arbitros.update_estado', $arbitro] ,'method' => 'PUT']) !!}
	
		

		<div class="form-group">
			{!! Form::label('estado', 'Tipo de estado') !!}
			{!! Form::select('estado', ['Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'], $arbitro->pivot->estado, ['class' => 'form-control']) !!}
		</div>

		<!--el habilitado debe ir por defecto-->

		

		<div class="form-group">
			{!! Form::submit('Alterar estado', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection