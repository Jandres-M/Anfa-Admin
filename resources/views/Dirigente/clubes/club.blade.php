@extends('app')

@section('title', 'Club')

@section('content')
	{!! Form::open(['route' => ['Dirigente.clubes.update'] , 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('club', 'Club') !!}
			{!! Form::label('club',Auth::user()->club->club, ['class' => 'form-control']) !!}
         
		</div>

		<div class="form-group">
			{!! Form::label('fechaFundacion', 'Fecha de Fundacion') !!}
			
             <span> {{ Auth::user()->club->fechaFundacion }} </span>
		 </div>
		
     <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion') !!}
            {!! Form::textarea('descripcion',Auth::user()->club->descripcion, ['class' => 'form-control','required']) !!}
          
        </div>



		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		</div>


  



	{!! Form::close() !!}
@endsection