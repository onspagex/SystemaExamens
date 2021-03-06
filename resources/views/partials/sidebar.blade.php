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
                <a href="#"><i class="fa fa-circle text-success"></i> en línea</a>
            </div>
        </div>

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-street-view'></i> <span>Administrador </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Usuarios</a></li>
                    <li><a href="{{ url('admin/roles') }}">Roles</a></li>
                    <!--li><a href="">Permisos</a></li-->
                </ul>
            </li>
            
            
            

            <li class="treeview">
                <a href="#"><i class='fa fa-pencil-square-o'></i> <span>Registro </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('almacenRegis/create')}}">Regis</a></li>
                    <li><a href="{{url('almacenRegis')}}">Editar </a></li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Registro </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('empleado/create')}}">lista</a></li>
                    <li><a href="{{url('empleado')}}">Editar</a></li>
                </ul>
            </li>
            

        </ul><!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>
