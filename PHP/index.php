<!-- Este archivo es un formulario para el login -->
<!DOCTYPE html>
<html>
	<head>
		<?php
			include 'modulos/head.php'; //Esta linea llama al archivo que contiene todos los archivos externos.
		?>
		<!-- Llama al archivo CSS -->
		<link href="../Recursos/css/css.css" rel="stylesheet">
	</head>
	<body>
		<div class="container text-center separarmuytop">
			<div class="row">
			<!-- Aqui empieza el formulario de login -->
				<form class="form-signin" method="POST" action="modulos/validar.php">
					<h2 class="form-signin-heading">Introduzca los datos</h2>
					<!-- Indica el numero de columnas que va a ocupar este div y empieza el campo del nombre -->
					<div class="col-lg-4 col-lg-offset-4"> 
						<input class="form-control separartop" placeholder="Introduzca su nombre" name="nombre" required="" autofocus="" type="text">
					</div>

					<!-- Indica el numero de columnas que va a ocupar este div y empieza el campo de la contrasena -->
					<div class="col-lg-4 col-lg-offset-4"> 
						<input class="form-control separartop" placeholder="Introduzca su contraseña" name="password" required="" type="password">
					</div>

					<!-- Indica el numero de columnas que va a ocupar este div y empieza el boton de iniciar sesion -->
					<div class="col-lg-4 col-lg-offset-4"> 
						<button class="btn btn-lg btn-default separartop" type="submit">Iniciar Sesión</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>