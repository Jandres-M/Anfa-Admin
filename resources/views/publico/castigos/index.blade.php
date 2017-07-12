@extends('publico.template.main')

@section('title', 'Castigos')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">@yield('title')</h3>
	  	</div>
	  	<div class="panel-body">
			<table class="table table-striped table-bordered">
			<thead>
				<th>Nombre jugador</th>
				<th>Fecha </th>
				<th>Descripción castigo
				<span class="label label-warning" title="En Proceso" >P</span>
			   <span class="label label-success" title="Cumplido">C</span>
				</th>
				<th>Sancion </th>
				
			</thead>
			<tbody>
				@foreach($castigos as $castigo)
					<tr>
						<td>
							{{ $castigo->jugador->nombres.' '.$castigo->jugador->apellidoPaterno.' '.$castigo->jugador->apellidoMaterno }}
						</td>

						<td>
						           
						{{$castigo->fecha}}	

						</td>

						<td>
						@if($castigo->estado=='Habilitado')
						<span class="label label-warning">{{ $castigo->descripcion }}</span>
						@elseif($castigo->estado=='Deshabilitado')
						<span class="label label-success">{{ $castigo->descripcion }}</span>
						@endif
						</td>
                       <td> {{$castigo->Sancion}}  </td>
					</tr>
				@endforeach
			</tbody>
			</table> 
			<img src="/images/fairplay.jpg" class="img-responsive center-block">	
	  	</div>
	</div>
	{!! $castigos->render() !!}
@endsection