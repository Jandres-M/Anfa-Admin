@extends('app')

@section('title', 'Crear Tarea')

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

	{!! Form::open(['route' => 'admin.tareas.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('tarea', 'Tarea') !!}
			{!! Form::text('tarea', null, ['class' => 'form-control', 'required', 'placeholder' => 'Tarea']) !!}
		</div>

		
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripcion', 'required']) !!}
			
		</div>

		
		<div class="form-group">
		{!! Form::label('fechaInicio', 'Fecha de Inicio') !!}

		<div class='input-group'>  
  
  {!! Form::date('fechaInicio', null, ['class' => 'form-control pull-right', 'required' ]) !!}	
		
			<span class="input-group-addon"> 
                    <span class="fa fa-calendar"> </span>
                </span>

                    </div>
                    </div>
<div class="form-group">
 {!! Form::label('horaInicio', 'Hora de Inicio') !!}
      <div class='input-group'>  

 {!! Form::time('horaInicio', null, ['class' => 'form-control', 'required' ]) !!}	
 <span class="input-group-addon"> 
  <span class="fa fa-clock-o"> </span>
</span>
      </div>
      </div>

                   
       <div class="form-group">
		{!! Form::label('fechaTermino', 'Fecha de Termino') !!}

		<div class='input-group'>  
  
  {!! Form::date('fechaTermino', null, ['class' => 'form-control pull-right', 'required' ]) !!}	
		
			<span class="input-group-addon"> 
                    <span class="fa fa-calendar"> </span>
                </span>

                    </div>
                    </div>

  <div class="form-group">
  {!! Form::label('horaTermino', 'Hora de Termino') !!}

      <div class='input-group'>  

 {!! Form::time('horaTermino', null, ['class' => 'form-control', 'required' ]) !!}	
  <span class="input-group-addon">
  <span class="fa fa-clock-o"> </span>
 </span>
      </div>
      </div>             
               		
		 <div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@endsection