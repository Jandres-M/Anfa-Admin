@extends('app')

@section('title', 'Lista de Arbitros'.$campeonato->campeonato)

@section('content')
	<a href="{{ route('admin.campeonatos.Arbitros.create') }}" class="btn btn-info">Asignar nuevo arbitro</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.campeonatos.Arbitros', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Nombres</th>
				<th>estado</th>
				<th>Accion</th>

			</thead>
			<tbody>
		    @foreach($arbitros=$campeonato->arbitros as $arbitro)
							<tr>
								<td>
									{{ $arbitro->nombres.' '.$arbitro->apellidos }}
								</td>

								<td>
						@if($arbitro->pivot->estado=='Habilitado')
						<span class="label label-success">{{ $arbitro->pivot->estado }}</span>
					  @elseif($arbitro->pivot->estado=='Deshabilitado')
							<span class="label label-danger">{{ $arbitro->pivot->estado }}</span>
										@endif
								</td>
									

                   <td>
                   			<a href="{{ route('admin.campeonatos.Arbitros.estado', $arbitro->rut)}}" data-toggle="tooltip" title="cambiar estado" class="btn btn-danger">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
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