@extends('app')

@section('title', 'Publicar Resultado ')

@section('content')
	{!! Form::open(['route' => ['admin.campeonatos.partidos.update_resultado', $partido] , 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('golesLocal', 'Club Local') !!}
			{!! Form::number('golesLocal', null, ['class' => 'form-control','required', 'placeholder' => 'marcador local']) !!}
			
		</div>
		<div class="form-group">
			{!! Form::label('golesVisita', 'Club Visita') !!}
			{!! Form::number('golesVisita', null, ['class' => 'form-control' ,'required', 'placeholder' => 'marcador visita']) !!}
		</div>
		 

		<div class="form-group">
			{!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection