@extends('app')
@section('htmlheader_title','Asignar Arbitro')
    
@endsection

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

	{!! Form::open(['route' => 'admin.campeonatos.Arbitros.store' , 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('rut', 'Arbitro') !!}
			{!! Form::select('rut', $arbitros, null, ['class' => 'form-control', 'placeholder' => 'Seleccione arbitro para campeonato', 'required']) !!}
		</div>


				<div class="form-group">
			{!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@endsection