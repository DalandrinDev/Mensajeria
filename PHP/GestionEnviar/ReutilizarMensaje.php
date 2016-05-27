<!--No funciona-->
<!DOCTYPE html>
<?php
	include '../conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
	session_start(); #Inicia la sesión.
	include '../comprobar.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Reutilizar Mensaje</title>

		<!-- A partir de aquí se hace la llamada a todos los archivos que usaremos en el CSS -->
	    <link href="../../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- El CSS que usaremos -->
	    <link href="../../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Las fuentes de letras -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container content-section text-center">
			<article class="row">
				<!-- Aquí empieza el formulario -->
				<form role="form" method="POST" action="EnviarReutilizarMensaje.php">
					<!-- Esta es la parte donde se escribe el mensaje a enviar -->
					<div class="col-xs-12 col-sm-9 col-md-6">
						<h2>Mensaje</h2>
						<!-- Esta linea indicará en todo momento el Autor del mensaje -->
						<?php
							echo "<p>El mensaje será firmado por: {$_SESSION['nombre']}</p>";
						?>
						<!--<textarea class="form-control" rows="5" id="comment" name="texto"></textarea>-->
						<!-- Botones de navegación -->
						<button type="submit" class="btn btn-default">Enviar</button>
						<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
					</div>
					<!-- Esta es la parte donde se selecciona a los tutores -->
					<div class="col-xs-12 col-sm-9 col-md-6">
						<h3>Selecciona los Tutores:</h3>
						<div class="checkbox">
							<?php
								$_SESSION['clavemensaje']=$_GET['id'];
								$query ="SELECT * FROM tutor"; #Selecciona a todos los tutores.
								$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
										echo "<div class='checkbox'>";
	  										echo "<label><input type='checkbox' name='contacto_".$registro['idtutor']."' value='".$registro['idtutor']."'>".$registro['nombre']."</label>";
										echo "</div>";
								}
							?>
						</div>
					</div>
				</form>
			</article>
		</div>
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