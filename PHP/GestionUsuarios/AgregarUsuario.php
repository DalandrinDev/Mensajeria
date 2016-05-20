<<<<<<< HEAD
<!--Este archivo se encargará de insertar un usuario a travé de un formulario, y luego se le enviará a un archivo donde se realizará la consulta y se introducirán los datos almacenados por metodo POST-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Agregar Tutor</title>

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
		<form role="form" method="post" action="EnviarAgregarUsuario.php">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
			</div>
			<div class="form-group">
				<label for="apellidos">Apellidos:</label>
				<input type="text" class="form-control" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
			</div>
			<div class="form-group">
				<label for="contrasena">Contraseña:</label>
				<input type="password" class="form-control" name="contrasena" placeholder="Introduce una contraseña" pattern="^[A-Za-z0-9_-]{1,15}$" required>
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
=======
<!--Formulario para insertar tutor-->
<!DOCTYPE html>
<?php
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../Recursos/Css/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../../Recursos/js/script.js"></script>
		<title>Mensajeria</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='../home.php'><span>Inicio</span></a></li>
				<li><a href='../GestionTutores/GestionTutores.php'><span>Gestionar Tutores</span></a></li>
				<li><a href='../GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<div class="formulario">
			<form id="AgregarUsuario" name="AgregarUsuario" method="post" onsubmit="return validar();" action="EnviarAgregarUsuario.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Apellidos:</span><input type="text" class="apellidos" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Rol:</span><input type="text" class="rol" name="rol" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Contraseña:</span><input type="text" class="contrasena" name="contrasena" placeholder="Introduce una contraseña" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	    <a href="javascript:window.history.back();">&laquo; Volver atrás</a>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
	</body>
</html>