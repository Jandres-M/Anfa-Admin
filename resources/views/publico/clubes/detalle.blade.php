@extends('publico.template.main')

@section('title', 'Contacto')

@section('content')


{!! Form::open(['route' => 'publico.clubes.detalle', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		
	{!! Form::close() !!}



<div class="row">
	@foreach($users as $user)
		<!--div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"-->
<div class="col-lg-4 col-md-4">	
 <div class="well">
<hr>
<div class="form-group">
  <label>Dirigente</label>
  <span class="badge pull-right">{{$user->nombres.' '.$user->apellidos  }}</span>
</div>

   <div class="form-group">
    <label>Email</label>
      <span class="badge pull-right">{{$user->email}}</span>
	</div>	    
		            
		   </div>
		   
  </div>
  
	  	
  	 </div>

	
		
  	@endforeach

	</div>
@endsection