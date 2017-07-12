@extends('app')


@section('htmlheader_title','Editar campeonato')
    



@section('content')
	{!! Form::open(['route' => ['admin.campeonatos.update', $campeonato] , 'method' => 'PUT']) !!}

		<!--div class="form-group">
			{!! Form::label('campeonato', 'Nombre') !!}
			{!! Form::text('campeonato', $campeonato->campeonato, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', ['Apertura'=>'Apertura','Clausura'=>'Clausura'], $campeonato->tipo, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('año', 'Año') !!}
			{!! Form::select('año',['2015'=>'2015','2016'=>'2016','2017'=>'2017','2018'=>'2018'], $campeonato->año, ['class' => 'form-control']) !!}
		</div-->

		<div class="form-group">
			{!! Form::label('fechaInicio', 'Fecha Inicio') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::date('fechaInicio',$campeonato->fechaInicio, ['class' => 'form-control']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
		 </div>
		
       <div class="form-group">
			{!! Form::label('fechaTermino', 'Fecha Termino') !!}
			<div class='input-group date' id='datetimepicker8'>
			{!! Form::date('fechaTermino',$campeonato->fechaTermino, ['class' => 'form-control']) !!}
			<div class="input-group-addon">
			 <span class="glyphicon glyphicon-calendar"></span>
		 </div>
		 </div>
		 </div>
		

		<div class="form-group">
			{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
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