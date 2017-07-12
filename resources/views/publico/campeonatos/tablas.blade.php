@extends('publico.template.main')

@section('title', 'Tablas de posiciones')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">@yield('title')</h3>
		</div>
		<div class="panel-body">

			<!--una tabla-->
			<h4>Serie honor</h4>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Club</td>
						<th>puntos</th>
						<th>pj</th>
						<th>pg</th>
						<th>pe</th>
						<th>pp</th>
						<th>gf</th>
						<th>gc</th>
						<th>dg</th>
					</thead>
					<tbody>
						@foreach($posiciones as $posicion)
							@if($posicion->serie->nombre=='Honor')
								<tr>
									<td>
										{{ $posicion->serie->club->club }}
									</td>
									<td>
										{{ $posicion->puntos }}
									</td>
									<td>
										{{ $posicion->pj }}
									</td>
									<td>
										{{ $posicion->pg }}
									</td>
									<td>
										{{ $posicion->pe }}
									</td>
									<td>
										{{ $posicion->pp }}
									</td>
									<td>
										{{ $posicion->gf }}
									</td>
									<td>
										{{ $posicion->gc }}
									</td>
									<td>
										{{ $posicion->dg }}
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
			<h4>Serie segunda</h4>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Club</td>
						<th>puntos</th>
						<th>pj</th>
						<th>pg</th>
						<th>pe</th>
						<th>pp</th>
						<th>gf</th>
						<th>gc</th>
						<th>dg</th>
					</thead>
					<tbody>
						@foreach($posiciones as $posicion)
							@if($posicion->serie->nombre=='Segunda')
								<tr>
									<td>
										{{ $posicion->serie->club->club }}
									</td>
									<td>
										{{ $posicion->puntos }}
									</td>
									<td>
										{{ $posicion->pj }}
									</td>
									<td>
										{{ $posicion->pg }}
									</td>
									<td>
										{{ $posicion->pe }}
									</td>
									<td>
										{{ $posicion->pp }}
									</td>
									<td>
										{{ $posicion->gf }}
									</td>
									<td>
										{{ $posicion->gc }}
									</td>
									<td>
										{{ $posicion->dg }}
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
			<h4>Serie senior</h4>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Club</td>
						<th>puntos</th>
						<th>pj</th>
						<th>pg</th>
						<th>pe</th>
						<th>pp</th>
						<th>gf</th>
						<th>gc</th>
						<th>dg</th>
					</thead>
					<tbody>
						@foreach($posiciones as $posicion)
							@if($posicion->serie->nombre=='Senior')
								<tr>
									<td>
										{{ $posicion->serie->club->club }}
									</td>
									<td>
										{{ $posicion->puntos }}
									</td>
									<td>
										{{ $posicion->pj }}
									</td>
									<td>
										{{ $posicion->pg }}
									</td>
									<td>
										{{ $posicion->pe }}
									</td>
									<td>
										{{ $posicion->pp }}
									</td>
									<td>
										{{ $posicion->gf }}
									</td>
									<td>
										{{ $posicion->gc }}
									</td>
									<td>
										{{ $posicion->dg }}
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
			<h4>Serie juvenil</h4>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Club</td>
						<th>puntos</th>
						<th>pj</th>
						<th>pg</th>
						<th>pe</th>
						<th>pp</th>
						<th>gf</th>
						<th>gc</th>
						<th>dg</th>
					</thead>
					<tbody>
						@foreach($posiciones as $posicion)
							@if($posicion->serie->nombre=='Juvenil')
								<tr>
									<td>
										{{ $posicion->serie->club->club }}
									</td>
									<td>
										{{ $posicion->puntos }}
									</td>
									<td>
										{{ $posicion->pj }}
									</td>
									<td>
										{{ $posicion->pg }}
									</td>
									<td>
										{{ $posicion->pe }}
									</td>
									<td>
										{{ $posicion->pp }}
									</td>
									<td>
										{{ $posicion->gf }}
									</td>
									<td>
										{{ $posicion->gc }}
									</td>
									<td>
										{{ $posicion->dg }}
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection