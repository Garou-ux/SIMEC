

<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SIMEC</title>
@include('Utilities.MainHeader')


	<header class="site-header" style="background-color: #212b30">
	    <div class="container-fluid">
	        <a href="{{ url('Login/ValidateUser') }}" class="site-logo">
	            {{-- <img class="hidden-md-down" src="{{ URL::asset('Template/img/logo-2-white.png')}}" alt="">
	            <img class="hidden-lg-up" src="{{ URL::asset('Template/img/logo-2-mob.png')}}" alt=""> --}}
	            <strong style="color: white;"> SIMEC</strong>
	        </a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="{{ URL::asset('Template/img/avatar-2-64.png')}}" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Configuración</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda/Documentación</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesión</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	             
	                    
	                 
	                    
	                    
	        
	                      
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">   
			<li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Procesos</span>
	            </span>
	            <ul>
	                <li><a href="{{ url('Compras/Requisiciones') }}"><span class="lbl">Requisiciones</span></a></li>
	            </ul>
	        </li>
	        <li class="pink-red">
	            <a href="">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Reportes</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="">
	                <i class="font-icon font-icon-calend"></i>
	                <span class="lbl">Calendario</span>
	            </a>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Catalogos</span>
	            </span>
	            <ul>
	                <li><a href=""><span class="lbl">Usuarios</span></a></li>
					<li><a href=""><span class="lbl">Proveedores</span></a></li>
					<li><a href=""><span class="lbl">Clientes</span></a></li>
	            </ul>
	        </li>
	 
	
	        <li class="brown with-sub">
	            <span>
	                <span class="font-icon font-icon-chart"></span>
	                <span class="lbl">Indicadores</span>
	            </span>
	        </li>	
	    </ul>
	
	</nav><!--.side-menu-->

