@extends('publico.template.main')

@section('title', 'Noticias')

@section('content')

	@foreach($noticias as $noticia)
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $noticia->titulo}}</h3>
			</div>
			<div class="panel-body">
				<img src="{{ URL::to('/') }}{{$noticia->imagen}}" class="img-responsive center-block" alt="Responsive image"  width:auto height:auto>
				
				{{$noticia->descripcion}}
			</div>
  @if($noticia->idClub=='')
			<div class="panel-footer"> publicado el {{ $noticia->fecha }}</div>
			@else
			<div class="panel-footer">{{$noticia->club->club}} publicado el {{ $noticia->fecha }}</div>
			@endif
		</div>	
	@endforeach
	
	{!! $noticias->render() !!}
@endsection