<!--Este archivo se encarga de guardar el formulario que habrá que rellenar para que modificar los datos del tutor-->
<!DOCTYPE html>
<?php
	include '../conectar.php';
	session_start();
	$_SESSION['idmodificar']=$_GET['id'];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Modificar Tutor</title>

		<!-- Bootstrap Core CSS -->
	    <link href="../../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="../../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>
	<body>
		<form role="form" method="POST" action="EnviarModificarTutor.php">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
			</div>
			<div class="form-group">
				<label for="apellidos">Apellidos:</label>
				<input type="text" class="form-control" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
			</div>
			<div class="form-group">
				<label for="alias">Alias:</label>
				<input type="text" class="form-control" name="alias" placeholder="Introduce el alias de Telegram" pattern="^@[A-Za-z0-9_-]{1,15}$" required>
			</div>
			<div class="form-group">
				<label for="facultad">Facultad:</label>
				<select class='form-control' name="facultad">
					<?php
						$query ="SELECT * FROM facultad";
						$result = mysqli_query($link, $query);
						while ($registro = mysqli_fetch_array($result)) {
								echo "<option value='".$registro['idfacultad']."'>".$registro['facultad']."</option>";
						}
					?>
				</select>
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
		<div class="col-lg-8 col-lg-offset-2">
			<input type="button" class="btn btn-default" onclick="window.history.back();" value="Volver atras">
		</div>
		<script src="../../Recursos/js/jquery.js"></script>
	    <script src="../../Recursos/js/bootstrap.min.js"></script>
		<script src="../../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../../Recursos/js/grayscale.js"></script>
	</body>
</html>