@extends('app')

@section('title', 'Cambiar situacion de Partido ')

@section('content')
	{!! Form::open(['route' => ['admin.campeonatos.partidos.update_situacion', $partido] , 'method' => 'PUT']) !!}

	<div class="form-group">
            {!! Form::label('situacion', 'Tipo de estado') !!}
            {!! Form::select('situacion', ['' => '', 'Suspendido' => 'Suspendido'], $partido->situacion, ['class' => 'form-control']) !!}
        </div>

		<div class="form-group">
			{!! Form::submit('Alterar Situacion', ['class' => 'btn btn-primary']) !!}
		</div>

  


	{!! Form::close() !!}
@endsection