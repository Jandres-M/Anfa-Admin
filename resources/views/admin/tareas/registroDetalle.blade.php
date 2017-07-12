@extends('app')

@section('title', 'Detalle de tareas')

@section('content')
	<a href="{{ route('admin.tareas.detalle') }}" class="btn btn-info" data-toggle="tooltip" title="Asignar Tarea">
	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.tareas.registroDetalle', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}
	
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Tarea</th>
				<th>Descripcion</th>
				<th>FechaInicio</th>
				<th>FechaTermino</th>
				<th>Estado</th>
				<th>Asignados</th>
				

			</thead>
			<tbody>
				@foreach($tareas as $tarea)
					<tr>
						<td>{{ $tarea->tarea }}</td>
						<td>{{ $tarea->descripcion }}</td>
						<td>{{ $tarea->fechaInicio.'  '.$tarea->horaInicio }}</td>
						<td>{{ $tarea->fechaTermino.'  '.$tarea->horaTermino }}</td>
  
				<td> 

<td> <!--getCurrentTime()-->
     	@if($tarea->Date >= $tarea->fechaInicio.'  '.$tarea->horaInicio && $tarea->Date < $tarea->fechaTermino.' '.$tarea->horaTermino)
				<span class="glyphicon glyphicon-time">En proceso</span>
		@elseif($tarea->Date == $tarea->fechaTermino.' '.$tarea->horaTermino) 
             <span class="glyphicon glyphicon-ok">Finalizado</span>

        @elseif($tarea->Date > $tarea->fechaTermino.' '.$tarea->horaTermino) 
             <span class="glyphicon glyphicon-remove">Expirado</span>
		@endif
				</td>


						<td>
				

                  </td>










				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $tareas->render() !!}
@endsection