@extends('app')

@section('title', 'Asignar jugador')

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

	{!! Form::open(['route' => 'admin.jugadores.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('rut', 'Rut') !!}
			{!! Form::select('rut',$jugadores, null, ['class' => 'form-control', 'required', 'placeholder' => 'Rut']) !!}   <!--  ->clubes()->attach(rut)-->
		</div>

		
		<div class="form-group">
			{!! Form::label('idClub', 'Club') !!}
			{!! Form::select('idClub',$clubes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione club para asignar a usuario', 'required']) !!}    <!-- ->jugadores()->attach(idClub)-->
			   
		</div>

				

		<div class="form-group">
			{!! Form::label('fechaInicio', 'fecha de Inicio') !!}
			<div class="input-group">
			{!! Form::text('fechaInicio', null, ['class' => 'form-control datepicker ', 'required', 'placeholder' => 'Fecha de Inicio']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
			
		</div>

				
		<div class="form-group">
			{!! Form::label('fechaTermino', 'fecha de Termino') !!}
			<div class="input-group">
			{!! Form::text('fechaTermino', null, ['class' => 'form-control datepicker', 'required', 'placeholder' => 'Fecha de Termino']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
		</div>

		

		<div class="form-group">
			{!! Form::submit('asignar', ['class' => 'btn btn-primary']) !!}
		</div>

		<script>
    $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
       // autoclose: true
    });
</script>

	{!! Form::close() !!}
@endsection