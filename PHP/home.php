<!-- Este es el archivo principal y te informa un poco de la aplicación -->
<!DOCTYPE html>
<?php
	include 'conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
	session_start(); #Inicia la sesión.
	include 'comprobar.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Home</title>

		<!-- A partir de aquí se hace la llamada a todos los archivos que usaremos en el CSS -->
	    <link href="../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- El CSS que usaremos -->
	    <link href="../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Las fuentes de letras -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		
		<!-- La barra de navegación -->
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div class="container">
	        
	        	<!-- La parte izquierda de la página con el glyphicon del sobre -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand page-scroll" href="#page-top">
	                    <span class="glyphicon glyphicon-envelope"></span><span class="light">Mensajeria</span>
	                </a>
	            </div>

				<!-- Los enlaces al resto de secciones de la aplicación web -->
	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
	                    <li class="hidden"><a href="#page-top"></a></li>
						<li><a href="GestionEnviar/GestionEnviar.php">Mensajes</a></li>
						<li><a href="GestionTutores/GestionTutores.php">Tutores</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistema</a>
							<ul class="dropdown-menu">
								<li><a href="GestionUsuarios/GestionUsuarios.php">Usuarios</a></li>
							</ul>
						</li>
	                </ul>
	            </div>
			</div>
	    </nav>

	    <!-- Comienza la estructura de la página -->
	    <section id="home" class="container content-section text-center">
	    	<div class="seccion-home">
		        <div class="row">
		        	<!-- Indica el espacio de las columnas que va a indicar el contenido -->
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2"> 
	                        <h1 class="brand-heading">Mensajería</h1>
	                        <p class="intro-text">Esta aplicación permite enviar mensajes a una serie de usuarios a través de Telegram.<br>Creado por Daniel Ramírez Sánchez.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

    	<!-- Footer del HTML -->
	    <footer>
			<div class="container text-center">
		        <?php
		        	//Indica la sesión iniciada y cierra la sesión.
					if ( $_SESSION['nombre']) {
			    		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
			    		echo "<br>";
			    		echo "<a href='CerrarSesion.php'>Cerrar sesion</a>";
					}
				?>
	            <p>Copyright &copy; UNED-MELILLA</p>
	        </div>
	    </footer>

	    <!-- Hacemos la llamada a todos los archivos externos .js que utilizaremos -->
	    <script src="../Recursos/js/jquery.js"></script>
	    <script src="../Recursos/js/bootstrap.min.js"></script>
		<script src="../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../Recursos/js/grayscale.js"></script>
	</body>
</html>
			