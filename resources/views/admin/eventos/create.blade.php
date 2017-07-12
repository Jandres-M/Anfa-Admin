
@extends('app')


@section('title', 'Crear evento')


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

	{!! Form::open(['route' => 'admin.eventos.store' , 'method' => 'POST']) !!}

   

		<div class="form-group">
			{!! Form::label('Evento', 'Evento') !!}
			{!! Form::text('Evento', null, ['class' => 'form-control', 'required', 'placeholder' => 'Evento']) !!}
		</div>

	   	
		<div class="form-group">
		{!! Form::label('Fecha_inicio', 'Fecha de Inicio') !!}

		<div class='input-group'>  
  
  {!! Form::date('Fecha_inicio', null, ['class' => 'form-control pull-right', 'required' ]) !!}	
		
			<span class="input-group-addon"> 
                    <span class="fa fa-calendar"> </span>
                </span>

                    </div>
                    </div>
<div class="form-group">
 {!! Form::label('Hora_inicio', 'Hora de Inicio') !!}
      <div class='input-group'>  

 {!! Form::time('Hora_inicio', null, ['class' => 'form-control', 'required' ]) !!}	
 <span class="input-group-addon"> 
  <span class="fa fa-clock-o"> </span>
</span>
      </div>
      </div>

                   
       <div class="form-group">
		{!! Form::label('Fecha_termino', 'Fecha de Termino') !!}

		<div class='input-group'>  
  
  {!! Form::date('Fecha_termino', null, ['class' => 'form-control pull-right', 'required' ]) !!}	
		
			<span class="input-group-addon"> 
                    <span class="fa fa-calendar"> </span>
                </span>

                    </div>
                    </div>

  <div class="form-group">
  {!! Form::label('Hora_termino', 'Hora de Termino') !!}

      <div class='input-group'>  

 {!! Form::time('Hora_termino', null, ['class' => 'form-control', 'required' ]) !!}	
  <span class="input-group-addon">
  <span class="fa fa-clock-o"> </span>
 </span>
      </div>
      </div>             
               		
		 


		<div class="form-group">
			{!! Form::label('Descripcion', 'Descripcion') !!}
			{!! Form::textarea('Descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Descripcion de Evento']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Ubicacion', 'Ubicacion') !!}
			{!! Form::text('Ubicacion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ubicacion']) !!}
		</div>


		
		<div class="form-group">
			{!! Form::submit('Organizar', ['class' => 'btn btn-primary']) !!}
		</div>


 
	{!! Form::close() !!}
@endsection