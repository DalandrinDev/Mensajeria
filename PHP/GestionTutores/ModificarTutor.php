<!--Archivo que se encarga de almacenar los datos para agregar a un nuevo tutor a la base de datos-->
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
		<title>Mensajeria - Agregar Tutor</title>

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
			<!-- Aquí empieza el formulario -->
			<form role="form" method="POST" action="EnviarModificarTutor.php" class="col-md-4 col-md-offset-4">
			<h3>Modifica el Tutor</h3>
				<!-- Nombre del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Apellidos del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				</div>

				<!-- Alias del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="alias" placeholder="Introduce el alias de Telegram" pattern="^@[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Facultad del tutor -->
				<div class="form-group">
					<select class='form-control' name="facultad">
						<?php
							$_SESSION['idmodificar']=$_GET['id'];
							$query ="SELECT * FROM facultad"; //Selecciona todas las tablas de la tabla facultad
							$result = mysqli_query($link, $query); //Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

							//Este bucle permite recorrer la consulta y que muestre cada elemento, para poder seleccionarlo.
							while ($registro = mysqli_fetch_array($result)) {
									echo "<option value='".$registro['idfacultad']."'>".$registro['facultad']."</option>";
							}
						?>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
				<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
			</form>
		</div>

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