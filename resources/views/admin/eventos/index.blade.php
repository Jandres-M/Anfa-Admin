@extends('app')

@section('htmlheader_title', 'Lista de eventos')

@section('content')

	<a href="{{ route('admin.eventos.create') }}" class="btn btn-info">Organizar un nuevo evento</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.eventos', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
	@if(session('success'))	
<div class="container">
<div class="alert alert-success">
{{ session('success')}}
</div>
</div>
@endif
		
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Evento</th>
				<th>FechaInicio</th>
				<th>FechaTermino</th>
				<th>Descripcion</th>
				<th>Ubicacion</th>
				<th>Situacion</th>
				<th>Acciones</th>

			</thead>
			<tbody>
				@foreach($eventos as $evento)
					<tr>
						<td>{{ $evento->Evento }}</td>
						<td>{{ $evento->Fecha_inicio.'  '.$evento->Hora_inicio }}</td>
						<td>{{ $evento->Fecha_termino.'  '.$evento->Hora_termino }}</td>
						<td>{{ $evento->Descripcion }}</td>
						<td>{{ $evento->Ubicacion }}</td>
						<td>@if($evento->Situacion=='Suspendido')
						<span class="glyphicon glyphicon-asterisk">{{ $evento->Situacion }}</span>
							@else
								<span></span>
							@endif
							</td>

						<td>


				<a href="{{ route('admin.eventos.situacion',$evento->Id_Evento) }}" data-toggle="tooltip" title="cambiar estado" class="btn btn-warning">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a> 	
						
					  <a href="{{ route('admin.eventos.edit',$evento->Id_Evento) }}" data-toggle="tooltip" title="Reprogramar Evento" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>	
                     
						</td>
						
						
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>








	{!! $eventos->render() !!}
@endsection
