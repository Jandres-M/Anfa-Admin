@extends('app')

@section('title', 'Reprogramar evento')

@section('content')
	{!! Form::open(['route' => ['admin.eventos.update',$evento] ,'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('Fecha_inicio', 'Fecha de Inicio') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::date('Fecha_inicio',$evento->Fecha_inicio, ['class' => 'form-control']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>

		 </div>
		 </div>


		 <div class="form-group">
			{!! Form::label('Hora_inicio', 'Hora de Inicio') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::time('Hora_inicio',$evento->Hora_inicio, ['class' => 'form-control']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>

		 </div>
		 </div>

				
		<div class="form-group">
			{!! Form::label('Fecha_termino','Fecha de Termino') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::date('Fecha_termino',$evento->Fecha_termino, ['class' => 'form-control']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>

		 </div>
		 </div>

        <div class="form-group">
			{!! Form::label('Hora_termino', 'Hora de Termino') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::time('Hora_termino',$evento->Hora_termino, ['class' => 'form-control']) !!}
			<span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>

		 </div>
		 </div>









		<div class="form-group">
			{!! Form::label('Ubicacion','Ubicacion') !!}
			{!! Form::text('Ubicacion',$evento->Ubicacion, ['class' => 'form-control', 'required', 'placeholder' => 'Ubicacion']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Reprogramar Evento', ['class' => 'btn btn-primary']) !!}
		</div>

<script type="text/javascript">
        $(function () {
            $('#datetimepicker8').datetimepicker({
            	 format: "yyyy/mm/dd",
                     language: "es",
                     autoclose: true,
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