<!--Este es el archivo donde te envían cada vez que te logeas y te informa un poco de la aplicación-->
<!DOCTYPE html>
<?php
	include 'conectar.php';
	session_start();
?>
<html>
	<head>
		<script language="JavaScript">
			function EliminarTutor(clavetutores) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="GestionTutores/EliminarTutor.php";}
			}

			function ModificarTutor(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="GestionTutores/ModificarTutor.php"; }
			}
			
			function Enviar(clavetutores) {
				var agree= confirm("¿Quieres enviar un mensaje a este tutor?");
				if (agree) {window.location="GestionMensajes/Mensaje.php"}
			}
		</script>
		<meta charset="UTF-8">
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
	                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
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
	                        <a class="page-scroll" href="#tutores">Gestionar tutores</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#usuarios">Gestionar usuarios</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="GestionMensajes/GestionMensajes.php">Gestionar mensajes</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="GestionEnvios/GestionEnvios.php">Mensajes por enviar</a>
	                    </li>
	                </ul>
	            </div>
	            
	        </div>
	        <!-- /.navbar-collapse -->
	            <?php
        			if ( $_SESSION['nombre']) {
                		echo "Has iniciado sesion como".$_SESSION['nombre']."";
                		echo "<a href='CerrarSesion.php'>Cerrar sesion</a>";
            		}
				?>
	        <!-- /.container -->
	    </nav>
		
		<!-- Intro Header -->
	    <header class="intro">
	        <div class="intro-body">
	            <div class="container ">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h1 class="brand-heading">Mensajería</h1>
	                        <p class="intro-text">Esta aplicación permite enviar mensajes a una serie de usuarios a través de Telegram.<br>Creado por Daniel Ramírez Sánchez.</p>
	                        <a href="#tutores" class="btn btn-circle page-scroll">
	                            <i class="fa fa-angle-double-down animated"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
		<!--Sección de gestion tutores-->
	    <section id="tutores" class="container content-section text-center">
	    	<div class="seccion-tutor">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <h2>Gestión de Tutores</h2>     
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Alias</th>
									<th>Facultad</th>
									<th>Escribir mensaje</th>
									<th>Modificar</th>
									<th>Eliminar</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM tutores";
								$result = mysqli_query($link, $query);
								/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
								y los coloque en la tabla que hemos creado anteriormente*/
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$_SESSION['idtutores']=$registro['clavetutores'].'</td>';
											echo '<td>'.$_SESSION['nombretutor']=$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
											echo '<td>'.$registro['alias'].'</td>';
											echo '<td>'.$registro['facultad'].'</td>';
											//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
											echo '<td>'.'<input type="button" class="btn btn-danger" onclick="EliminarTutor(this.id)" value="Eliminar Tutor">'.'</td>';
											echo '<td>'.'<input type="button" class="btn btn-warning" onclick="ModificarTutor(this.id)" value="Modificar Tutor">'.'</td>';
											echo '<td>'.'<input type="button" class="btn btn-success" onclick="Enviar(this.id)" value="Enviar Mensaje">'.'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
						</table>
					</div>
		        </div>
		    </div>
    	</section>

	    <!-- Download Section -->
	    <section id="usuarios" class="content-section text-center">
	        <div class="seccion-usuario">
	            <div class="container">
	                <div class="col-lg-8 col-lg-offset-2">
	                    <h2>Download Grayscale</h2>
	                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
	                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Contact Section -->
	    <section id="contact" class="container content-section text-center">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2">
	                <h2>Contact Start Bootstrap</h2>
	                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
	                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
	                </p>
	                <ul class="list-inline banner-social-buttons">
	                    <li>
	                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
	                    </li>
	                    <li>
	                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
	                    </li>
	                    <li>
	                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </section>

	    <!-- Map Section -->
	    <div id="map"></div>

	    <!-- Footer -->
	    <footer>
	        <div class="container text-center">
	            <p>Copyright &copy; Your Website 2014</p>
	        </div>
	    </footer>

	    <script src="../Recursos/js/jquery.js"></script>
	    <script src="../Recursos/js/bootstrap.min.js"></script>
		<script src="../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../Recursos/js/grayscale.js"></script>
	</body>
</html>
			