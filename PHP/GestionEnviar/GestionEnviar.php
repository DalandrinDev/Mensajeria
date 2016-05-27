<!DOCTYPE html>
<?php
	include '../conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
	session_start(); #Inicia la sesión.
	include '../comprobar.php';
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<script language="JavaScript">

			//Esta sirve para reutilizar el mensaje, y lo hace usando la idenviar.
			function ReutilizarMensaje(idenviar) {
				var agree= confirm("¿Quieres reutilizar este mensaje?");
				if (agree) {window.location="ReutilizarMensaje.php?id="+idenviar; }
			}
		</script>
		<meta charset="UTF-8">
		<title>Mensajeria - Enviar</title>

		<!-- A partir de aquí se hace la llamada a todos los archivos que usaremos en el CSS -->
	    <link href="../../Recursos/css/bootstrap.css" rel="stylesheet">

	    <!-- El CSS que usaremos -->
	    <link href="../../Recursos/css/grayscale.css" rel="stylesheet">
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
						<li><a href="#">Mensajes</a></li>
						<li><a href="../GestionTutores/GestionTutores.php">Tutores</a></li>
						<li class="dropdown">
						<li><a href="../GestionUsuarios/GestionUsuarios.php">Usuarios</a>
	                </ul>
	            </div>
			</div>
	    </nav>

	    <!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container content-section text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-6 col-md-offset-3">
		                <h2>Lista de mensajes</h2>
	                	<input type="button" class="btn btn-default" onclick="window.location.href = 'Mensaje.php';" value="Enviar Nuevo Mensaje">
	                	<!-- Crea una tabla para mostrar la tabla mensaje -->
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Mensaje</th>
									<th>Autor</th>
									<th>Reutilizar Mensaje</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM mensaje"; #Consulta que muestra los mensajes.
								$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tr>';
										echo '<td>'.$registro['idmensaje'].'</td>';
										echo '<td>'.$registro['texto'].'</td>';
										echo '<td>'.$registro['autor'].'</td>';

										//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
										echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar Mensaje">'.'</td>';
									echo '</tr>';
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
	    <script src="../../Recursos/js/bootstrap.js"></script>
		<script src="../../Recursos/js/grayscale.js"></script>
	</body>
</html>