
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="footer">
	
	<div class="container">
		
			<div class="col-sm-4 col-md-3 col-lg-3">
				<ul>
					<h4>ANFA Curico</h4>
					<li><a href="/">Home</a></li>
					<li><a href="{{ route('publico.noticias.index' )}}">Noticias</a></li>
					<li><a href="{{ route('publico.institucional') }}">Institucional</a></li>
					<li><a href="{{ route('publico.campeonatos.index') }}">Campeonatos</a></li>
					<li><a href="{{ route('publico.jugadores.index') }}">Buscar jugadores</a></li>
					<li><a href="{{ route('publico.clubes.index') }}">Clubes</a></li>
					<li><a href="{{ route('publico.castigos.index') }}">Castigos</a></li>
				</ul>
			</div>
			<div class="col-sm-4 col-md-3 col-lg-3">
				<ul>
					<h4>Enlaces de interés</h4>
					<li><a href="http://www.anfachile.cl" target="_blank">ANFA Chile</a></li>
					<li><a href="http://www.anfadelmaule.cl" target="_blank">ANFA del Maule</a></li>
					<li><a href="http://www.anfp.cl" target="_blank">ANFP</a></li>
				</ul>
			</div>
			<!--@if(Auth::user())
				<div class="col-sm-4 col-md-3 col-lg-3">
					<ul>
						<h4>Acceso a usuarios</h4>
						<li><a href="{{ url('auth.getLogout') }}">Cerrar sesión</a></li>
					</ul>
				</div>
			@else
			<div class="col-sm-4 col-md-3 col-lg-3">
				<ul>
					<h4>Acceso a usuarios</h4>
					<li><a href="{{ url('auth/login') }}">Iniciar sesión</a></li>
				</ul>
			</div>
			@endif-->
			<!--div class="clearfix visible-sm"></div-->
			<div class="col-sm-4 col-md-3 col-lg-3">
				<ul>
					<h4>Contacto</h4>
					<address>
					<!--i class="icon-facebook2"--> 
			  <p class="glyphicon glyphicon-home"> Apolonia 1860,Curicó,VII Región,Chile</p><br>
				
				 <li><a href="https://www.facebook.com/Anfa-Curicó-1002509156529387/" target="_blank">
				 <i class="fa fa-facebook"></i> <strong>AnfaCurico</strong> </a></li>
										 	 
					</address>
			</ul>
			</div>


			
			
			<div class="col-sm-4 col-md-3 col-lg-4">
			<ul>
             <img src="{{ asset('images/publicidad/multihogar.jpg')}}" class="img-responsive center-block">
             </ul>
             </div>
             <div class="col-sm-4 col-md-3 col-lg-4">
			<ul>
             <img src="{{ asset('images/publicidad/sparta.jpg')}}" class="img-responsive">	
             </ul>
		
			</div>
			</div>
			</div>
		


		
		


			
			
		
		
		



			
		
		


		
		

		





	
	

	
