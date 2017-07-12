@extends('publico.template.main')

@section('title', 'Ranking de goleadores')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">@yield('title')</h3>
		</div>
		<div class="panel-body">

 {!! Form::open(['route' => 'publico.campeonatos.goleadores', 'method' => 'GET', 'class' => 'navbar-form']) !!}
    
				<div class="input-group">
		{!! Form::select('serie',['Diente de Leche' => 'Diente de Leche', 'Sub11' => 'Sub11','Sub13' => 'Sub13','Sub17' => 'Sub17','Primera' => 'Primera','35' => '35','45' => '45','50' => '50','Honor'=>'Honor'] null, ['class' => 'form-control','placeholder' => 'Seleccione una serie para realizar busquedad',"data-toggle" => "tooltip"]) !!}

					<span class="input-group-btn" id="buscar">
						<button type="button submit" class="btn btn-default" aria-label="Left Align">
							<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
						</button>
					</span>
				</div>
			{!! Form::close() !!} 

           

			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<th>Goleadores</th>
						<th>Club</th>
						<th>Goles</th>
						

					</thead>
					<tbody>
					@foreach($jugadores as $jugador)
					<tr>
                  <td> {{ $jugador->NombreCompleto }}	</td>

				 <td> {{ $jugador->club }} </td>

				 <td> {{ $jugador->cantidad_gol }}</td>

                   </tr>
               @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection