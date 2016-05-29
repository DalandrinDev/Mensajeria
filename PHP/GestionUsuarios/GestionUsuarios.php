<!DOCTYPE html>
<?php
	include '../conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
	include '../comprobar.php';
?>
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<script language="JavaScript">
			//Esta sirve para reutilizar el mensaje, y lo hace usando la idenviar.
			function EliminarUsuario(idusuario) {
				var agree=confirm("¿Quieres eliminar este usuario?");
				if (agree) {window.location="EliminarUsuario.php?id="+idusuario; }
			}

			function ModificarUsuario(idusuario) {
				var agree= confirm("¿Quieres modificar este usuario?");
				if (agree) {window.location="ModificarUsuario.php?id="+idusuario; }
			}
		</script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Enviar</title>

		<!-- A partir de aquí se hace la llamada a todos los archivos que usaremos en el CSS -->
	    <link href="../../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- El CSS que usaremos -->
	    <link href="../../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Las fuentes de letras -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<!-- La barra de navegacion -->
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
	                    <li class="hidden"><a href="../home.php"></a></li>
						<li><a href="../GestionEnviar/GestionEnviar.php">Mensajes</a></li>
						<li><a href="../GestionTutores/GestionTutores.php">Tutores</a></li>
						<li><a href="#">Usuarios</a>
	                </ul>
	            </div>
			</div>
	    </nav>
	    <section id="usuarios" class="container content-section text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-4 col-md-offset-4">
		                <h2>Usuarios</h2>     
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellidos</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM usuario";
								$result = mysqli_query($link, $query);
								/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
								y los coloque en la tabla que hemos creado anteriormente*/
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['idusuario'].'</td>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
						</table>
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
	    <script src="../../Recursos/js/jquery.js"></script>
	    <script src="../../Recursos/js/bootstrap.min.js"></script>
		<script src="../../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../../Recursos/js/grayscale.js"></script>
	</body>
</html>