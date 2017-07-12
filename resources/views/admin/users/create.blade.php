@extends('app')

@section('title', 'Crear usuario')

@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>
						{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'admin.users.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre de usuario') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de usuario']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Contraseña']) !!}
		</div>
		

		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombres']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos ') !!}
			{!! Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Apellidos']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-mail') !!}
			{!! Form::email('email',null, ['class' => 'form-control', 'required', 'placeholder' => 'e-mail']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('rol', 'Tipo de usuario') !!}
			{!! Form::select('rol', ['Dirigente' => 'Dirigente', 'Directivo' => 'Directivo'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un rol', 'required']) !!}
		</div>

		<!--el habilitado debe ir por defecto-->
		
		<div class="form-group">
			{!! Form::label('idClub', 'Club') !!}
			{!! Form::select('idClub',$clubes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione club al que pertenece el usuario']) !!}
		</div>
		
		
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection