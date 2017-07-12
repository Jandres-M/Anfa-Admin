@extends('admin.template.mainGG')

@section('title', 'Login')

@section('content')

	{!! Form::open(['route' => 'auth.login2', 'method' => 'POST']) !!}

	<!--if(Session::has('error_login'))
			<span class="error">Usuario o contraseña incorrectas.</span>
			endif-->
@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>
						{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
	@endif

 
 <!--if(Session::has('error_message'))
                {{ Session::get('error_message') }}
            @endif-->


		<div class="form-group " > <!--{{$errors->has('name')? ' has-error' : '' }}-->

			{!! Form::label('name', 'Nombre de usuario') !!}
			{!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => 'Nombre de usuario']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Contraseña']) !!}
		</div>

 <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>

                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
     <a href="{{ url('/password/email') }}">I forgot my password</a><br>

		<div class="form-group">

			{!! Form::submit('Ingresar', ['class' => 'btn btn-primary'])  !!}

		</div>

		<a href="{{ url('/password/email') }}">Has olvidado contraseña</a><br>
	{!! Form::close() !!}


	@if(Session::has('mensaje'))
 
            <div id="flash_notice">{{ Session::get('mensaje') }}</div>
                     
         @endif
@endsection