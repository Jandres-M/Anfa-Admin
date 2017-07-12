@extends('app')

@section('title', 'Lista de Jugadores')

@section('content')
	<a href="{{ route('admin.jugadores.create') }}" class="btn btn-info">Asignar Jugador</a>
	<!-- Buscador -->
	
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
			    <!--th>Rut</th-->
				<th>Nombres</th>
				<th>FechaInicio</th>
				<th>FechaTermino</th>
				<th>estado</th>
				<th>Club</th>
				<th>Castigos</th>
				@if(Auth::user()->rol=='Directivo')
				<th>Acciones</th>
				@endif

			</thead>
			<tbody>
				@foreach($jugadoress as $jugador)
					<tr>
					    <!--td>{{ $jugador->rut.'-'.$jugador->dv }}</td-->
						<td>{{ $jugador->nombres.' '.$jugador->apellidoPaterno.' '.$jugador->apellidoMaterno }}</td>
						<td>{{ $jugador->fechaNacimiento }}</td>
						<td>{{ $jugador->pivot->fechaInicio }}</td>
						<td>{{ $jugador->pivot->fechaTermino }}</td>
                        <td>@if($jugador->pivot->estado=='Habilitado')
                        <span class="label label-success">{{ $jugador->pivot->estado }}</span>
                        @elseif($jugador->pivot->estado=='Deshabilitado')
                       <span class="label label-danger">{{ $jugador->pivot->estado }}</span>
                       	@endif
                        </td>
						<td>
						@foreach($clubes=$jugador->clubes as $club)
						<span class="label label-success">{{$club->club}}</span>
						
						@endforeach
						</td>

						<td>
						@foreach($castigos=$jugador->castigos as $castigo)
						{{$castigo->descripcion.' | '}}
						@endforeach
						</td>
							

						<td>

						  @if(Auth::user()->rol=='Directivo')
						<a href="{{ route('admin.jugadores.estado', $jugador->rut) }}" data-toggle="tooltip" title="cambiar estado"  class="btn btn-danger">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a> 
						
					  <a href="{{ route('admin.jugadores.edit', $jugador->rut) }}" data-toggle="tooltip" title="editar jugador" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>	

					 <a href="{{ route('admin.jugadores.delete', $jugador->rut) }}" data-toggle="tooltip" title="Desvincular jugador" class="btn btn-warning">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>	
							@endif
                     
						</td>
						
						
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>
	{!! $jugadoress->render() !!}
@endsection