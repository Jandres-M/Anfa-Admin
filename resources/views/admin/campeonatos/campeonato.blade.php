@extends('app')

@section('htmlheader_title','Lista de campeonatos')
    


@section('content')
	<a href="{{ route('admin.campeonatos.create') }}" class="btn btn-info">Crear nuevo campeonato</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.campeonatos', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Campeonato</th>
				<th>FechaInicio</th>
				<th>FechaTermino</th>
				<th>Acciones</th>

			</thead>
			<tbody>
				@foreach($campeonatos as $campeonato)
					<tr>
						<td>{{ $campeonato->campeonato.' '.$campeonato->tipo.' '.$campeonato->año }}</td>
						<td>{{ $campeonato->fechaInicio }}</td>
						<td>{{ $campeonato->fechaTermino }}</td>
						<td>
                   @if(Auth::user()->rol=='Directivo')   

					  <a href="{{ route('admin.campeonatos.edit', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Editar Campeonato" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>	
							@endif
                      <a href="{{route('admin.campeonatos.partidos', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Partidos" class="btn btn-success">
								<span class="glyphicon glyphicon-globe" aria-hidden="true">
								</span>
							</a>
                     <a href="{{ route('admin.campeonatos.Arbitros', $campeonato->idCampeonato) }}" data-toggle="tooltip" title="Arbitros" class="btn btn-info">
								<span class="glyphicon glyphicon-user" aria-hidden="true">
								</span>
							</a> 

						</td>
											
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $campeonatos->render() !!}
@endsection