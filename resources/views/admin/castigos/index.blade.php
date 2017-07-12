
@extends('app')
@section('htmlheader_title','Castigo')
@section('content')
 

	<a href="{{ route('admin.castigos.create') }}" class="btn btn-info">Asignar nuevo castigo</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.castigos', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Nombres</th>
				<th>Fecha</th>
				<th>Descripcion</th>
				<th>Sancion</th>
				<th>Estado</th>
				
			</thead>
			<tbody>
				@foreach($castigos as $castigo)
					<tr>
						<td>{{ $castigo->jugador->nombres.' '.$castigo->jugador->apellidoPaterno.' '.$castigo->jugador->apellidoMaterno }}

						</td>
						
						<td>
						            
						{{ $castigo->fecha }}	

						</td>


						<td>
						{{ $castigo->descripcion }}	
						</td>
      					<td> {{$castigo->Sancion}}  </td>

						<td>

						@if($castigo->estado=='Habilitado')
							<span class="label label-success">{{ $castigo->estado }}</span>
						@elseif($castigo->estado=='Deshabilitado')
							<span class="label label-danger">{{ $castigo->estado }}</span>
							@endif

								</td>
               
						     
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!!$castigos->render() !!}

@endsection
