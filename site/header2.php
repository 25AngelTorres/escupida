<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Infinish_QMS</title>
		
		<!-- Etiqueta para servidores -->
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		
		<!-- Descripcion de la página -->
        <meta name="description" content="Gestion de documentos para la calidad de Infinish Acabados Industriales" />
		
		<!-- Palabras clave de la página -->
        <meta name="keywords" content="SGC, Infinish, IAI, Sistema, Gestion, Documentación, Documentos" />
		
		<!-- Configuracion de robots de busqueda
			Indez, Follow
			
			Index, Follow 		– Permite la indexación y rastreo de la página y es el valor por defecto. Prescindir de la etiqueta meta robots es lo mismo que utilizarla con esta configuración.
			NoIndex, Follow 	– Evita la indexación pero permite el rastreo. Es la configuración ideal cuando no quieres que una página aparezca en los resultados del buscador.
			Index, NoFollow 	– Permite la indexación pero evita el rastreo.
			NoIndex, NoFollow 	– Evita la indexación y el rastreo.
			-->
		<meta name="robots" content="NoIndex, NoFollow" />
		
		<!-- Persona o entidad que ha creado el contenido -->
        <meta name="author" content="25AngelTorres@gmail.com" />
		
		<!-- Visualizacion en version movil
			width=device-width 	– El tamaño de la página debe ser como el del dispositivo en que se muestra.
			initial-scale=1.0 	– La página debe mostrarse inicialmente tan grande como permita la pantalla.
		-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Icono para barra de favoritos -->
        <link rel="shortcut icon" href="../images/favicon.png" />
		
        <!-- Hojas de Estilo -->
		<!-- Bootstrap core CSS-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
		<!-- fonts a utilizar-->
		<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css" >
		
		<!-- Hoja de estilo personalizada -->
		<link rel="stylesheet" type="text/css" href="../css/style.css" >
		
        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->
	</head>
	
	<body>
	
	<!-- Barra superior -->
	<nav class="navbar navbar-expand navbar-dark static-top ">
		<a class="navbar-brand text-white mr-1" href="">iQMS</a>
		<button class="btn btn-link btn-sm text-white order-1 order-sm-0 sidebarToggle-leftbar" id="sidebarToggle-leftbar" href="#">
			<i class="fas fa-bars"></i>
		</button>
		
		<!-- buscador en barra superior -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0" >
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
	
		<!-- Menú notificaciones/configuración -->
		<ul class="navbar-nav ml-auto ml-md-0">
			
			<!-- Menú notificaciones -->
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<!---Icono de notificaciones---
					Crear función que obtenga el número de notificaciones sin leer para cada usuario
					-->
					<span class="badge badge-danger">4444+</span>
					<i class="fas fa-bell fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<!---Áreas para notificaciones---
					
					-->
					<div class="dropdown-item notification">
						<div class="row">
							<h6>Actualización
							<a>
								<i class="far fa-window-close"></i>
							</a>
							</h6>
						</div>
						<div class="row">
							<p>Texto de notificacion
							</p>
						</div>
					</div>

					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			
			<!-- Menú usuario -->
			<li class="nav-item dropdown no-arrow ">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<!---Agregar aqui nombre de usuario--->
					<i class="fas fa-user-circle "> 
					</i>
				</a>
				<!-- Menú desplegable usuario -->
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="formSettingsUser.php">Settings</a>
					<!-- Barra divisor -->
					<div class="dropdown-divider"></div>
					<!-- Página logout -->
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" >Logout</a>
				</div>
			</li>
		</ul>
		<!--Menú notificaciones/configuración-->
	</nav>
	<!--Barra superior-->
	
	<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
	<!--Logout Modal-->
	
	<!--Barra lateral-->
	<div class="sidebar">
		<ul class="sidebar navbar-nav">
		
		
			<li class="nav-item">
				<a class="nav-link" href="">
					<i class="fas fa-layer-group"></i>
					<span> Lateral </span>

				</a>
			</li>
			<li class="nav-item ">
          <a class="nav-link" href=" ">
            <i class="fas fa-layer-group"></i>
            <span>Manage Documentation</span>
          </a>
        </li>
			
			
		</ul>
	</div>
	<!--Barra Lateral--
	
	<!--Contenido-->
	<div>
		Contenido
	</div>
	<!--Contenido-->
	
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<!--Funciones que ayudan a ocultar la barra lateral -->
	<script src="../js/sidebar.js"></script>
	
</body>
</html>