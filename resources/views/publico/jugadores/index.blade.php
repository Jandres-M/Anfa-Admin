@extends('publico.template.main')

@section('title', 'Buscador de jugadores')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">@yield('title')</h3>
	    	<p>En este buscador se puede buscar por nombre del jugador, por apellido, o por rut.</p>
	  	</div>
	  	<div class="panel-body">

			
			<!-- Buscador -->
			 {!! Form::open(['route' => 'publico.jugadores.index', 'method' => 'GET', 'class' => 'navbar-form']) !!}
    
				<div class="input-group">
					{!! Form::text('nombre', null, ['class' => 'form-control', 
					'placeholder' => 'Buscar jugador', 
					'aria-describedby' => 'buscar', 
					"data-toggle" => "tooltip", 
					"title" => "Al buscar por rut debe ser sin dígito verificador"]) !!}

					<span class="input-group-btn" id="buscar">
						<button type="button submit" class="btn btn-default" aria-label="Left Align">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</span>
				</div>
			{!! Form::close() !!} 
			<!-- Buscador -->
			

			@if($jugadores->isEmpty())
				<div class="alert alert-danger alert-dismissible fade in" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					No se encontraron resultados. 
				</div>				
			@else
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
					<thead>
						<th>Nombre completo</th>
						<th>Rut</th>
						<th>Fecha de Nacimiento</th>
						<th>Clubes en los que ha jugado
						<span class="label label-success" title="Vigencia en Contrato" >V</span>
						<span class="label label-danger" title="Realizado">R</span>
						</th>
						<th>Castigos recibidos</th>
					</thead>
					<tbody>
						@foreach($jugadores as $jugador)
							<tr>
								<td>{{ $jugador->nombres.' '.$jugador->apellidoPaterno.' '.$jugador->apellidoMaterno }}</td>
								<td>{{ $jugador->rut.'-'.$jugador->dv }}</td>
								<td>{{ $jugador->fechaNacimiento }}</td>
								<td>
									@foreach($clubes=$jugador->clubes as $club)
										@if($club->pivot->estado=='Habilitado')
											<span class="label label-success">{{$club->club}}</span>
										@elseif($club->pivot->estado=='Deshabilitado')
											<span class="label label-danger">{{$club->club}}</span>
										@endif
									@endforeach
								</td>
								<td>
									@foreach($castigos=$jugador->castigos as $castigo)
										{{$castigo->descripcion.' | '}}
									@endforeach
								</td>
							</tr>
						@endforeach
					</tbody>
					</table>
				</div>
			@endif    	
	  	</div>
	</div>
	
	{!! $jugadores->render() !!}
@endsection