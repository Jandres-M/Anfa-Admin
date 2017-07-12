@extends('app')

@section('title', 'Asignar tarea')

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

	{!! Form::open(['route' => 'admin.tareas.store_usu' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('IdUsuario', 'Usuario a asignar') !!}
			{!! Form::select('IdUsuario', $users, $clubes, ['class' => 'form-control', 'placeholder' => 'Seleccione usuario a asignar', 'required']) !!}
		</div>
      

				<div class="form-group">
			{!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@endsection