@extends('publico.template.main')

@section('title', 'Lista de campeonatos')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">@yield('title')</h3>
	  	</div>
	  	<div class="panel-body">
			<table class="table table-striped table-bordered">
			<thead>
				<th>Nombre campeonato</th>
				<th>Fechas</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($campeonatos as $campeonato)
					<tr>
						<td>
							{{ $campeonato->campeonato.' '.$campeonato->tipo.' '.$campeonato->año }}
						</td>
						<td>
							{{ $campeonato->fechaInicio.' | '.$campeonato->fechaTermino }}
						</td>
						<td>
							<a href="{{ route('campeonatos.info', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Ver Programación" class="btn btn-warning">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true">
								</span>
							</a>
							<a href="{{ route('campeonatos.arbitros', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Ver Listado de árbitros" class="btn btn-info">
								<span class="glyphicon glyphicon-user" aria-hidden="true">
								</span>
							</a>
							<a href="{{ route('campeonatos.tablas', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Tablas de posiciones" class="btn btn-danger">
								<span class="glyphicon glyphicon-list-alt" aria-hidden="true">
								</span>
							</a>
							<a href="{{ route('campeonatos.resultados', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Resultados" class="btn btn-success">
								<span class="glyphicon glyphicon-ok" aria-hidden="true">
								</span>
							</a>

                           <a href="{{ route('campeonatos.goleadores', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Ver Ranking de Goleadores" class="btn btn-info">
								<span class="glyphicon glyphicon-globe" aria-hidden="true">
								</span>
							</a> 


							
						</td>
					</tr>
				@endforeach
			</tbody>
			</table> 
			<img src="/images/campeonato.jpg" class="img-responsive center-block">	
	  	</div>
	</div>
	
	{!! $campeonatos->render() !!}
@endsection