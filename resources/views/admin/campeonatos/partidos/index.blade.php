@extends('app')

@section('title', 'Lista de partidos de'.$campeonato->campeonato)

@section('content')
	<a href="{{ route('admin.campeonatos.partidos.create') }}" class="btn btn-info"> Crear nuevo partido</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.campeonatos.partidos', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Jornada</th>
				<th>Cancha</th>
				<th>Fecha</th>
				<th>Local</th>
				<th>L</th>
				<th>V</th>
				<th>Visita</th>
				<th>Situacion</th>
				<th>Acciones</th>

			</thead>
			<tbody>
			@foreach($partidos=$campeonato->partidos as $partido)
							
         @if($partido->serieLocal->serie == 'Diente de Leche' && $partido->serieVisita->serie == 'Diente de Leche' || $partido->serieLocal->serie == 'Sub11' && $partido->serieVisita->serie == 'Sub11' || $partido->serieLocal->serie == 'Sub13' && $partido->serieVisita->serie == 'Sub13' || $partido->serieLocal->serie == 'Sub17' && $partido->serieVisita->serie == 'Sub17' || $partido->serieLocal->serie == 'Primera' && $partido->serieVisita->serie == 'Primera' || $partido->serieLocal->serie == '35' && $partido->serieVisita->serie == '35' || $partido->serieLocal->serie == '45' && $partido->serieVisita->serie == '45' || $partido->serieLocal->serie == '50' &&  $partido->serieVisita->serie == '50' ||
          $partido->serieLocal->serie == 'Honor' &&  $partido->serieVisita->serie == 'Honor' )
								<tr>
									<td>
										{{ $partido->jornada }}
									</td>

									
									<td>
										{{ $partido->Cancha->cancha }}
									</td>

									<td>
										{{ $partido->fecha.'  '.$partido->Hora }}
									</td>

									<td>

										{{ $partido->serieLocal->Club->club }}
									</td>

									@if(is_null($partido->golesLocal &&  $partido->golesVisita))
									<td> {-} </td>
									<td> {-} </td>
								@else
									<td>{{ $partido->golesLocal }}</td>
									<td>{{ $partido->golesVisita }}</td>
								@endif

									<td>
										{{ $partido->serieVisita->Club->club }}
									</td>
									
									
									<td>
										@if($partido->situacion=='Suspendido')
								<span class="glyphicon glyphicon-asterisk">{{ $partido->situacion}}</span>
							@else
								<span></span>
							@endif
									</td>

                   <td>
                              
                   			<a href="{{ route('admin.campeonatos.partidos.edit',$partido->idPartido) }}" data-toggle="tooltip" title="Reprogramar Partido" class="btn btn-success">
								<span class="glyphicon glyphicon-repeat" aria-hidden="true">
								</span>
							</a> 
                         <a href="{{ route('admin.campeonatos.partidos.situacion',$partido->idPartido)}}" data-toggle="tooltip" title="cambiar estado" class="btn btn-warning">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a> 
   

							<a href="{{ route('admin.campeonatos.partidos.resultado',$partido->idPartido) }}" data-toggle="tooltip" title="Publicar Resultado" class="btn btn-warning">
								<span class="glyphicon glyphicon-play-circle" aria-hidden="true">
								</span>
							</a>  
							<a href="{{ route('admin.campeonatos.partidos.registrodetalle', $partido->idPartido) }}" data-toggle="tooltip" title="Ver Detalle" class="btn btn-success">
								<span class="glyphicon glyphicon-list-alt" aria-hidden="true">
								</span>
							</a>     

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