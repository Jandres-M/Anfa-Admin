@extends('publico.template.main')

@section('title', 'Clubes')

@section('content')
	<div class="row">
	@foreach($clubes as $club)
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		    <div class="well">
		      <label class="text-center">{{$club->club}} <a href="{{ route('clubes.detalle', $club->idClub) }}" data-toggle="tooltip" title="Ver Programación" class="btn btn-success">
								<span class="glyphicon glyphicon-th-list" aria-hidden="true">
								</span>
							</a>                </label>
		      <div class="text-center">
		        <img src="{{ URL::to('/') }}/images/clubes/{{$club->idClub}}.jpg" alt="..." class="img-rounded img-responsive center-block">    
		      </div>
		      
		      
		      <hr>
		      <label>Fundación</label>
		      <span class="badge pull-right">{{$club->fechaFundacion}}</span>
		      <hr>
		       <label>Descripción</label>
		       <p>{{ $club->descripcion }}</p>

		       <hr>
      
		    </div>
		    </div>
	  	
  	@endforeach
  	</div>

	
		{!! $clubes->render() !!}
	</div>
@endsection