@extends('app')

@section('title', 'Registrar Detalle')

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

	{!! Form::open(['route' => 'admin.campeonatos.partidos.store_detalle' , 'method' => 'POST']) !!}

			<div class="form-group">
			{!! Form::label('idjugador', 'Jugador) !!}
			{!! Form::select('idjugador', $jugadores, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el jugador', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cantidad_gol', 'Cantidad de gol') !!}
			{!! Form::number('cantidad_gol', null, ['class' => 'form-control']) !!}
		
		 </div>

		 <div class="form-group">
			{!! Form::label('tarjeta_amarilla', 'Cantidad de tarjeta amarilla') !!}
			{!! Form::number('tarjeta_amarilla', null, ['class' => 'form-control']) !!}
		
		 </div>
		  <div class="form-group">
			{!! Form::label('tarjeta_roja', 'Cantidad de tarjeta roja ') !!}
			{!! Form::number('tarjeta_roja', null, ['class' => 'form-control']) !!}
		
		 </div>
		
						
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>




	{!! Form::close() !!}
@endsection