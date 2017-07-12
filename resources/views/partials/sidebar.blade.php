<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
               <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Opciones Adicionales</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.castigos') }}"><i class="fa fa-circle-o"></i> Castigos</a></li>
            <li><a href="{{ route('admin.jugadores') }}"><i class="fa fa-circle-o"></i> Jugadores</a></li>
            <li><a href="{{ route('admin.noticias') }}"><i class="fa fa-circle-o"></i> Noticias</a></li>
           </ul>
        </li>
        <li>
          <a href="{{ route('admin.eventos') }}">
            <i class="fa fa-th"></i> <span>Eventos</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <!--li class="treeview">
          <a href="{{ url('/admin/estadisticas/grafica') }}">
            <i class="fa fa-pie-chart"></i>
            <span>Estadisticas y Rendimiento</span>
            </a>
          </li-->
         <li class="treeview">
          <a href="{{ route('admin.tareas') }}">
            <i class="fa fa-edit"></i> <span>Tareas</span>
            
          </a> 
          </li>
        <li class="treeview">
          <a href="{{ route('admin.campeonatos') }}">
            <i class="fa fa-table"></i> <span>Campeonatos</span>
             </a>
              <!--span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
           <ul class="treeview-menu">
            <li><a href="{{ route('admin.campeonatos.partidos') }}"><i class="fa fa-circle-o"></i> Partidos</a></li>
            <li><a href="{{ route('admin.campeonatos.Arbitros') }}"><i class="fa fa-circle-o"></i>Arbitros</a></li>
             </ul-->        
        </li>
        <!--li>
          <a href="{{ url('/admin/calendar/calendar') }}">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li-->
        <li>
          <a href="{{ route('admin.notificaciones.mailbox') }}">
            <i class="fa fa-envelope"></i> <span>Notificaciones</span>
            <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
             </span>
          </a>
        </li>          
        </li>
        </ul>





    </section>
    <!-- /.sidebar -->
</aside>
