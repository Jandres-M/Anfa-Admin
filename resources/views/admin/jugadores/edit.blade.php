@extends('app')

@section('title', 'Editar jugador '.$jugador->nombres)

@section('content')
	{!! Form::open(['route' => ['admin.jugadores.update', $jugador] , 'method' => 'PUT']) !!}


		
		<div class="form-group">
			{!! Form::label('idClub', 'Club') !!}
			{!! Form::select('idClub',$clubes, $jugador->idClub, ['class' => 'form-control', 'placeholder' => 'Seleccione club para asignar a usuario', 'required']) !!}    
			   
		</div>

				
		<div class="form-group">
			{!! Form::label('fechaInicio', 'fecha de Inicio') !!}
			<div class="input-group">
			{!! Form::text('fechaInicio',$jugador->pivot->fechaInicio, ['class' => 'form-control datepicker ', 'required', 'placeholder' => 'Fecha de Inicio']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
			
		</div>

				
		<div class="form-group">
			{!! Form::label('fechaTermino', 'fecha de Termino') !!}
			<div class="input-group">
			{!! Form::text('fechaTermino',$jugador->pivot->fechaTermino, ['class' => 'form-control datepicker', 'required', 'placeholder' => 'Fecha de Termino']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
		</div>
				

		<div class="form-group">
			{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
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