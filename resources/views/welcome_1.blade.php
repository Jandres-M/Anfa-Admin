<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/slider.css') }}">
@extends('publico.template.main')

@section('title','ANFA Curico')

@section('content')
	<!--div class="panel panel-default">
		<div class="panel-body">
			<!h3>Bienvenido a ANFA Curico</h3-->
			<!--Responsive image-->

  
<div id="captioned-gallery">

  <figure class="slider" > <!--name="sli"-->
    <figure>
  
   <!--foreach en--> 
     <img src="{{ asset('images/index.jpg') }}" style="max-width:100%;width:2000;height:650;" class="img-responsive" alt="Responsive image" >
      <figcaption>  Bienvenido a Anfa Curico  </figcaption>
   
    </figure>

<figure>
  
  
     <img src="{{ asset('images/celebracion.jpg') }}" style="max-width:100%;width:1500;height:650;" class="img-responsive" alt="Responsive image" >
     <figcaption> ANFA Curicó celebró sus 105 años de vida | Municipalidad de Curicó </figcaption>
    </figure> 	


	<figure>
  
   <!--foreach en--> 
     <img src="{{ asset('images/anfa.jpg') }}" style="max-width:100%;width:auto;height:650;" class="img-responsive" alt="Responsive image" >
     <figcaption> 90% de avance en su construcción tiene Estadio ANFA de Curicó </figcaption>
    </figure>

	  <figure>
  
  
     <img src="{{ asset('images/anfa1.jpg') }}" style="max-width:100%;width:auto;height:650;" class="img-responsive" alt="Responsive image">
     <figcaption> Capacitan a jóvenes como nuevo árbitros ANFA </figcaption>
    </figure> 	
    	<render figure>
        
	  	</figure class="slider">
	  
	</div>
@endsection
