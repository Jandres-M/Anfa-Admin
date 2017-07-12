@extends('app')
@section('htmlheader_title','Asignar Castigo')
    


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

	{!! Form::open(['route' => 'admin.castigos.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('rut', 'Nombre de Jugador') !!}
			{!! Form::select('rut', $jugadores, null, ['class' => 'form-control', 'placeholder' => 'Seleccione jugador para castigo', 'required']) !!}
		</div>
		

		<div class="form-group">
			{!! Form::label('fecha', 'fecha de castigo') !!}
			<div class="input-group">
			{!! Form::date('fecha', null, ['class' => 'form-control datepicker ', 'required', 'placeholder' => 'Fecha de castigo']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
			
		</div>

		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion ') !!}
			{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Descripcion de castigo']) !!}
		</div>

       <div class="form-group">
			{!! Form::label('Sancion', 'Sancion') !!}
			{!! Form::select('Sancion', ['suspensión de un año o más* a expulsion' => 'suspensión de un año o más* a expulsion', 'suspensión de cuatro partidos* a un año' => 'suspensión de cuatro partidos* a un año','suspensión por 1 a 3 partidos' => 'suspensión por 1 a 3 partidos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una sancion', 'required']) !!}
		</div>


			
		<div class="form-group">
			{!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
		</div>

	<script>
    $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
       autoclose: true
    });
 </script>

	{!! Form::close() !!}
@endsection