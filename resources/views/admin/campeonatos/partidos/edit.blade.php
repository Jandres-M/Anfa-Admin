@extends('app')

@section('title', 'Reprogramar Partido ')

@section('content')
	{!! Form::open(['route' => ['admin.campeonatos.partidos.update', $partido] , 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('idCancha', 'Cancha') !!}
			{!! Form::select('idCancha',$canchas, $partido->idCancha, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fecha', 'Fecha') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::text('fecha',$partido->fecha, ['class' => 'form-control datepicker']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>

		 </div>
		 </div>

		<div class="form-group">
			{!! Form::submit('Reprogramar', ['class' => 'btn btn-primary']) !!}
		</div>


  
<script type="text/javascript">
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
    </script>


	{!! Form::close() !!}
@endsection