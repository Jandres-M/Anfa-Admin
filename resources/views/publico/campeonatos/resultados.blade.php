@extends('publico.template.main')

@section('title', 'Resultados campeonato '.$campeonato->campeonato)

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">@yield('title')</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Jornada</td>
						<th>Local</th>
						<th>Goles local</th>
						<th>Goles visita</th>
						<th>Visita</th>
						<th>Detalle</th>

					</thead>
					<tbody>
						@foreach($partidos=$campeonato->partidos as $partido)
							<tr>
								<td>
									{{ $partido->jornada }}
								</td>
								<td>
									{{ $partido->serieLocal->club->club.' || '.$partido->serieLocal->serie }}
								</td>
								@if(is_null($partido->golesLocal &&  $partido->golesVisita))
									<td> {-} </td>
									<td> {-} </td>
								@else
									<td>{{ $partido->golesLocal }}</td>
									<td>{{ $partido->golesVisita }}</td>
								@endif
								<td>
									{{ $partido->serieVisita->club->club.' '.$partido->serieVisita->serie }}
								</td>

                               <td>
                 <a href="{{ route('campeonatos.detalle', $partido->idPartido) }}" data-toggle="tooltip" title="Ver detalle" class="btn btn-warning">
								<span class="glyphicon glyphicon-list-alt" aria-hidden="true">
								</span>
							</a>	




                               </td>   


							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection