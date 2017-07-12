@extends('publico.template.main')

@section('title', 'Campeonato '.$campeonato->campeonato)

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
						<th> </th>
						<th>Visita</th>
						<th>Cancha</th>
						<th>Fecha</th>
					</thead>
					<tbody>
						@foreach($partidos=$campeonato->partidos as $partido)
							
                              @if( $partido->serieLocal->serie == 'Diente de Leche' && $partido->serieVisita->serie == 'Diente de Leche' || $partido->serieLocal->serie == 'Sub11' && $partido->serieVisita->serie == 'Sub11' || $partido->serieLocal->serie == 'Sub13' && $partido->serieVisita->serie == 'Sub13' || $partido->serieLocal->serie == 'Sub17' && $partido->serieVisita->serie == 'Sub17' || $partido->serieLocal->serie == 'Primera' && $partido->serieVisita->serie == 'Primera' || $partido->serieLocal->serie == '35' && $partido->serieVisita->serie == '35' || $partido->serieLocal->serie == '45' && $partido->serieVisita->serie == '45'  || $partido->serieLocal->serie == '50' &&  $partido->serieVisita->serie == '50' ||
                                 $partido->serieLocal->serie == 'Honor' &&  $partido->serieVisita->serie == 'Honor' )
								<tr>
									<td>
										{{ $partido->jornada }}
									</td>
									<td>
										{{ $partido->serieLocal->Club->club.'  ||  '.$partido->serieLocal->serie }}
									</td>
									<td>
										vs
									</td>
									<td>
										{{ $partido->serieVisita->Club->club.' ||  '.$partido->serieVisita->serie }}
									</td>
									<td>
										{{ $partido->Cancha->cancha }}
									</td>
									<td>
										{{ $partido->fecha.'  '.$partido->Hora }}
									</td>
									<td>
										@if($partido->situacion == "Suspendido")
								<span class="glyphicon glyphicon-asterisk">{{ $partido->situacion}}</span>
							@else
								<span></span>
							@endif
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection