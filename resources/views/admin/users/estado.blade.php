@extends('app')
@section('title', 'Editar estado a  usuario '.$user->name.' | '.$user->estado)

@section('content')
	{!! Form::open(['route' => ['admin.users.update_estado', $user] , 'method' => 'PUT']) !!}

		
		

		<div class="form-group">
			{!! Form::label('estado', 'Tipo de estado') !!}
			{!! Form::select('estado', ['Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'], $user->estado, ['class' => 'form-control']) !!}
		</div>

		<!--el habilitado debe ir por defecto-->

		

		<div class="form-group">
			{!! Form::submit('Alterar estado', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection