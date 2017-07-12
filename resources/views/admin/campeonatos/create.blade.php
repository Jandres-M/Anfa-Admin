@extends('app')

@section('htmlheader_title','Crear campeonato')
    


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

	{!! Form::open(['route' => 'admin.campeonatos.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('campeonato', 'campeonato') !!}
			{!! Form::text('campeonato', null, ['class' => 'form-control', 'required', 'placeholder' => 'Campeonato']) !!}
		</div>

		
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo',['Apertura' => 'Apertura','Clausura' => 'Clausura'],null,['class' => 'form-control', 'placeholder' => 'Seleccione el tipo de campeonato', 'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('año', 'Año') !!}
			{!! Form::select('tipo',['2015' => '2015','2016' => '2016','2017' => '2017','2018' => '2018'],null,['class' => 'form-control', 'placeholder' => 'Seleccione el año de campeonato', 'required']) !!}
			
		</div>
		

		<div class="form-group">
			{!! Form::label('fechaInicio', 'fecha de Inicio') !!}
			<div class="input-group">
			{!! Form::date('fechaInicio', null, ['class' => 'form-control datepicker ', 'required', 'placeholder' => 'Fecha de Inicio']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
			
		</div>

				
		<div class="form-group">
			{!! Form::label('fechaTermino', 'fecha de Termino') !!}
			<div class="input-group">
			{!! Form::date('fechaTermino', null, ['class' => 'form-control datepicker', 'required', 'placeholder' => 'Fecha de Termino']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
		</div>

		<!--<div class="form-group">
			{!! Form::label('idClub', 'Club') !!}
			{!! Form::select('idClub', ['1' => 'Galpones', '2' => 'Tricolor El Bolsico'], null, ['class' => 'form-control']) !!}
		</div>-->

		<div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
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