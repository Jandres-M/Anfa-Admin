<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">ANFA Curico</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('publico.noticias.index') }}">Noticias</a></li>
        <li><a href="{{ route('publico.institucional') }}">Institucional</a></li>
        <li><a href="{{ route('publico.campeonatos.index') }}">Campeonatos</a></li>
        <li><a href="{{ route('publico.jugadores.index') }}">Buscar jugadores</a></li>
        <li><a href="{{ route('publico.clubes.index') }}">Clubes</a></li>
        <li><a href="{{ route( 'publico.castigos.index' ) }}">Castigos</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        
            <p class="navbar-btn">
              <a class="btn btn-success" href="{{ route('auth.login') }}" role="button">Iniciar sesión</a>
            </p>
      </ul>
      </div>
      </div>
      </nav>
   

