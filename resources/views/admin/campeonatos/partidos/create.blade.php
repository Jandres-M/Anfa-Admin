@extends('app')

@section('title', 'Crear partido')

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

	{!! Form::open(['route' => 'admin.campeonatos.partidos.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('jornada', 'Jornada') !!}
			{!! Form::select('jornada', ['1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8', '9' => '9', '10' => '10','11' => '11', '12' => '12','13' => '13', '14' => '14','15' => '15', '16' => '16'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una jornada', 'required']) !!}
		</div>

		

		<div class="form-group">
			{!! Form::label('idCancha', 'Cancha') !!}
			{!! Form::select('idCancha', $canchas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la cancha al encuentro', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fecha', 'Fecha') !!}
			<div class='input-group date'>
			{!! Form::date('fecha', null, ['class' => 'form-control','required']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
                </div>

          <div class="form-group">
         {!! Form::label('Hora', 'Hora') !!} 
          <div class='input-group time'>
			{!! Form::time('Hora', null, ['class' => 'form-control','required']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>


		 </div>
		 </div>
		
		

		
		<div class="form-group">
			{!! Form::label('local', 'club local') !!}
			{!! Form::select('local',$series->partidosLocal,  null, ['class' => 'form-control', 'placeholder' => 'Seleccione club local', 'required']) !!}
		</div>

		<!--el habilitado debe ir por defecto-->
		
		<div class="form-group">
			{!! Form::label('visita', 'Club visita') !!}
			{!! Form::select('visita',$series, $clubes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione club visita', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
		</div>


	<!--script type="text/javascript">
        $(function () {
            $('#datetimepicker8').datetimepicker({
            	 format: "yyyy/mm/dd",
                     language: "es",
                    // autoclose: true,
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
            });
        });
    </script-->



	{!! Form::close() !!}
@endsection