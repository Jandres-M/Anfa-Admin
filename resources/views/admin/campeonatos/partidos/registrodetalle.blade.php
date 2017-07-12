@extends('app')

@section('title', 'Lista de Registro de detalle partidos')

@section('content')
	<a href="{{ route('admin.campeonatos.partidos.detalle') }}" class="btn btn-info">Registrar detalle/a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.campeonatos.partidos.detalle', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Jugador</th>
				<th>Cantidad Gol</th>
				<th>Tarjeta Amarilla</th>
				<th>Tarjeta Roja</th>
				<th>Club</th>

				
			</thead>
			<tbody>
			@foreach($jugadores=$partidos->jugadores as $jugador)
							                               
								<tr>
									
							<td>{{ $jugador->nombres.' '.$jugador->apellidoPaterno.' '.$jugador->apellidoMaterno }}</td>
							<td>{{ $jugador->pivot->cantidad_gol }}	</td>
                            <td>{{ $jugador->pivot->tarjeta_amarilla }}	</td>
                            <td>{{ $jugador->pivot->tarjeta_roja }}	</td>
                            <td>
                      @foreach($clubes=$jugador->clubes as $club)

                            {{ $club->club }}
                            @endforeach
                            	</td>
									
                   
								</tr>
								
						@endforeach
					</tbody>
				</table>
			</div>
		
				
	{!! $partidos->render() !!}
@endsection