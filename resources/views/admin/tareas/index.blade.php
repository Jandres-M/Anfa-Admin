@extends('app')

@section('title', 'Lista de tareas')

@section('content')
	<a href="{{ route('admin.tareas.create') }}" class="btn btn-info" data-toggle="tooltip" title="Crear Nueva Tarea">
	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.tareas', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Tarea</th>
				<th>Descripcion</th>
				<th>FechaInicio</th>
				<th>FechaTermino</th>
				<!--th>Estado</th>
				<th>Asignados</th-->
				<th>Accion</th>

			</thead>
			<tbody>
				@foreach($tareas as $tarea)
					<tr>
						<td>{{ $tarea->tarea }}</td>
						<td>{{ $tarea->descripcion }}</td>
						<td>{{ $tarea->fechaInicio.'  '.$tarea->horaInicio }}</td>
						<td>{{ $tarea->fechaTermino.'  '.$tarea->horaTermino }}</td>
  
				
                      
                      
			
			<td>			
			 <a href="{{route('admin.tareas.registroDetalle', $tarea->idtarea) }}" data-toggle="tooltip" title="Ver detalle" class="btn btn-success">
			<span class="glyphicon glyphicon-list" aria-hidden="true">	</span>
						</a>		
        </td>

					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $tareas->render() !!}
@endsection