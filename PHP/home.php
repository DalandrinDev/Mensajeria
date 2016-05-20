<<<<<<< HEAD
<!--Este es el archivo donde te envían cada vez que te logeas y te informa un poco de la aplicación-->
<!DOCTYPE html>
<?php
	include 'conectar.php';
	session_start();
=======
<!--Archivo principal, donde se encuentra, el acceso a la gestion de tutores y usuarios-->
<!DOCTYPE html>
<?php
	include "comprobar.php";
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>
<html>
	<head>
		<meta charset="UTF-8">
<<<<<<< HEAD
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Home</title>

		<!-- Bootstrap Core CSS -->
	    <link href="../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<!-- Navigation -->
	    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand page-scroll" href="#page-top">
	                    <span class="glyphicon glyphicon-envelope"></span><span class="light">Mensajeria</span>
	                </a>
	            </div>


	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>

	                    <li>
	                        <a href="GestionEnviar/GestionEnviar.php">Mensajes</a>
	                    </li>
	                    <li>
	                        <a href="GestionTutores/GestionTutores.php">Tutores</a>
	                    </li>
		                <li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistema</a>
					        <ul class="dropdown-menu">
					          <li><a href="GestionUsuarios/GestionUsuarios.php">Usuarios</a></li>
					          <li><a href="#">Opción 1</a></li>
					          <li><a href="#">Opción 2</a></li>
					        </ul>
						</li>
	                </ul>
	            </div>
			</div>
	    </nav>
	    <section id="home" class="container content-section text-center">
	    	<div class="seccion-home">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
	                        <h1 class="brand-heading">Mensajería</h1>
	                        <p class="intro-text">Esta aplicación permite enviar mensajes a una serie de usuarios a través de Telegram.<br>Creado por Daniel Ramírez Sánchez.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <footer>

	        <div class="container text-center">
		        <?php
					if ( $_SESSION['nombre']) {
			    		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
			    		//echo "<a href='CerrarSesion.php'>Cerrar sesion</a>";
					}
				?>
	            <p>Copyright &copy; UNED-MELILLA</p>
	        </div>
	    </footer>

	    <script src="../Recursos/js/jquery.js"></script>
	    <script src="../Recursos/js/bootstrap.min.js"></script>
		<script src="../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../Recursos/js/grayscale.js"></script>
=======
		<link rel="stylesheet" href="../Recursos/Css/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../Recursos/js/script.js"></script>
		<title>Mensajeria</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='#'><span>Inicio</span></a></li>
				<li><a href='GestionTutores/GestionTutores.php'><span>Gestionar Tutores</span></a></li>
				<li><a href='GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../recursos/js/main.js"></script>
		<script type="text/javascript" src="../recursos/js/jquery.fullpage.js"></script>  
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
	</body>
</html>
			