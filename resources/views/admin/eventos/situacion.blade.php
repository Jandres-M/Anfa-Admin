@extends('app')

@section('title', 'Cambiar situacion de Evento '.$evento->Evento.' | '.$evento->Situacion)

@section('content')
	{!! Form::open(['route' => ['admin.eventos.update_situacion',$evento] , 'method' => 'PUT']) !!}

	<div class="form-group">
            {!! Form::label('Situacion', 'Tipo de situacion') !!}
            {!! Form::select('Situacion', ['' => '', 'Suspendido' => 'Suspendido'], $evento->Situacion, ['class' => 'form-control']) !!}
        </div>

		<div class="form-group">
			{!! Form::submit('Alterar Situacion', ['class' => 'btn btn-primary']) !!}
		</div>

  


	{!! Form::close() !!}
@endsection