@extends('app')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<!-- Buscador -->
	{!! Form::open(['route' => 'admin.users', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		<!--div class="input-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario', 'aria-describedby' => 'buscar']) !!}
			<span class="input-group-addon" id="buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div-->
	{!! Form::close() !!}
	<!-- Buscador -->
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>Nombre de usuario</th>
				<th>Nombre Completo</th>
				<th>Rol</th>
				<th>Estado</th>
				<th>Acciones</th>
				
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->nombres.' '.$user->apellidos }}</td>
						<td>
							 @if($user->rol=='Dirigente')  
								<span class="label label-info">{{ $user->rol.'  '.$user->club->club}}</span>
							@else
								<span class="label label-primary">{{ $user->rol }}</span>
							@endif
						</td>
						<td>
							@if($user->estado=='Habilitado')
								<span class="label label-success">{{ $user->estado }}</span>
							@else
								<span class="label label-danger">{{ $user->estado }}</span>
							@endif
						</td>

			
						
						<td>
                    <a href="{{ route('admin.users.estado', $user->name)}}" data-toggle="tooltip" title="cambiar estado"  class="btn btn-warning">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a> 
                                    
							</a> 
							<a href="{{ route('admin.users.edit', $user->name) }}" data-toggle="tooltip" title="Editar usuario" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>
							<a href="{{ route('admin.users.resetPassword', $user->name) }}" data-toggle="tooltip" title="Reestablecer contraseña" onClick="return confirm('¿Seguro  que desea reestablecer la contraseña?')" class="btn btn-info">
								<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
							</a>


							<a href="{{ route('admin.users.destroy', $user->name)}}" data-toggle="tooltip" title="Eliminar Usuario" onClick="return confirm('¿Seguro que desea destituir este usuario?')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</a> 
						</td>
               

					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $users->render() !!}
@endsection