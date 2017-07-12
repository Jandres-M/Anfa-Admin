<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>C</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Anfa</b>curico </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    </li>
                <!-- Tasks Menu -->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>  <!--{{ Auth::user()->name }}-->
                    </a>
                    <ul class="dropdown-menu">
                
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                            <p>
                              {{ Auth::user()->name }}
                            @if(Auth::user()->rol=='Dirigente')    
                                <small>{{ Auth::user()->rol.'  '.Auth::user()->club->club }}</small>
                             @else
                                <small>{{ Auth::user()->rol }}</small>                                              
                             @endif
                            </p>
                        </li>
                        <!-- Menu Body -->
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                             @if(Auth::user()->rol=='Dirigente' && Auth::user()->estado=='Habilitado')    
                                <a href="{{ route('Dirigente.clubes') }}" class="btn btn-default btn-flat">Perfil</a>
                                @endif
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                       
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                @if(Auth::user()->rol=='Directivo')
                    <a href="{{ route('admin.users') }}" title="Opciones Administrativas"><i class="fa fa-gears"></i>
                    </a> 
                 @endif
                </li>
            </ul>
        </div>
    </nav>
</header>