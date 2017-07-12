@extends('app')

@section('title', 'Editar usuario '.$user->name)

@section('content')
	{!! Form::open(['route' => ['admin.users.update', $user] , 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre de usuario') !!}
			{!! Form::text('name', $user->name , ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de usuario']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('email', 'E-mail') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'e-mail']) !!}
		</div>

		<!--div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', $user->nombres, ['class' => 'form-control', 'required', 'placeholder' => 'Nombres']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos ') !!}
			{!! Form::text('apellidos',$user->apellidos , ['class' => 'form-control', 'required', 'placeholder' => 'Apellidos']) !!}
		</div-->
		

		<div class="form-group">
			{!! Form::label('rol', 'Tipo de usuario') !!}
			{!! Form::select('rol', ['Directivo' => 'Directivo','Dirigente' => 'Dirigente'], $user->rol, ['class' => 'form-control']) !!}
		</div>

		<!--el habilitado debe ir por defecto-->

		@if($user->rol=='Dirigente')

		<div class="form-group">
			{!! Form::label('idClub', 'Club') !!}
			{!! Form::select('idClub', $clubes, $user->idClub, ['class' => 'form-control']) !!}
		</div>
		@elseif($user->rol=='Directivo')
		@endif
		<div class="form-group">
			{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection