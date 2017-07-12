@extends('publico.template.main')

@section('title', 'Tarjetas')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">@yield('title')</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<th>Jugadores</th>
						<th>Club</th>
						<th>Goles</th>
						<th>Tarjeta Amarilla</th>
						<th>Tarjeta Roja</th>

					</thead>
					<tbody>
						
							<tr>
								<td>
								@foreach($jugadores as $jugador)
									{{ $jugador->nombres.' '.$jugador->apellidoPaterno.' '.$jugador->apellidoMaterno }}
								</td>
                        
                               <td>
                              	{{ $jugador->clubes->club }}
							   @endforeach	
								</td> 
                   			 <td>
                               @foreach($partidos as $partido )
									{{$partido->pivot->cantidad_gol }}
																		
								</td> 
                            
								 <td>
                               
							 {{$partido->pivot->tarjeta_amarilla }}
																		
								</td> 
                             <td>
                           {{$partido->pivot->tarjeta_roja }} 
                           @endforeach
                             </td>
							</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection