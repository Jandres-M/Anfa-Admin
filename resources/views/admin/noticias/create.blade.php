@extends('app')

@section('title', 'Publicar Noticia')

@section('content')
	
	{!! Form::open(['route' => 'admin.noticias.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('titulo', 'Titulo de la noticia') !!}
			{!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo de la noticia', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion', 'Cuerpo de la noticia') !!}
			{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('imagen', 'Imagen') !!}
			{!! Form::file('imagen') !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Publicar Noticia', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection