<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | ANFA Curico</title>
	
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap1.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/footer.css') }}">


	<!--link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/estilo.css') }}"-->

	<!--link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/barra.css') }}"-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		@include('publico.template.partes.nav')
		<section>
			@yield('content')
   
		</section>
	</div>
	@include('publico.template.partes.footer')
	
	<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip(); 
	});
	</script>
</body>
</html>