@extends('publico.template.main')

@section('title', 'Nómina de árbitros')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">@yield('title')</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<td>Nombre árbitro
						<span class="label label-success" title="Habilitado">H</span>
						<span class="label label-danger" title="Deshabilitado">I</span>
						</td>
					</thead>
					<tbody>
						@foreach($arbitros as $arbitro)
							<tr>
								<td>
								@if($arbitro->pivot->estado=='Habilitado')
						<span class="label label-success">{{ $arbitro->nombres.' '.$arbitro->apellidos }}</span>	

                            @elseif($arbitro->pivot->estado=='Deshabilitado')
							<span class="label label-danger">{{ $arbitro->nombres.' '.$arbitro->apellidos }}</span>
								@endif

								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection