<!--Formulario para insertar tutor-->
<!DOCTYPE html>
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
			<form id="ModificarTutor" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="ModificarTutor" method="post" onsubmit="return validar();"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Apellidos:</span><input type="text" class="apellidos" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Alias:</span><input type="text" class="alias" name="alias" placeholder="Introduce un alias" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Facultad:</span><input type="text" class="facultad" name="facultad" placeholder="Introduce la facultad del tutor" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	    <a href="javascript:window.history.back();">&laquo; Volver atras</a>
	    <?php
			include "../comprobar.php";
			$clavetutores= $_GET['id'];
		    $nombre = $_GET['nombre'];
		    $apellido = $_GET['apellidos'];
		    $alias = $_POST['alias'];
		    $facultad = $_POST['facultad'];
			$resultado="UPDATE tutores SET nombre='$nombre', apellidos='$apellido', alias='$alias', facultad='$facultad' WHERE clavetutores='$clavetutores'";
			echo "$resultado";
			$insertar = mysqli_query($link, $resultado);
			header("location: GestionTutores.php");
		?>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>