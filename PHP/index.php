<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		include 'modulos/head.php';
	?>
	<link href="../Recursos/css/css.css" rel="stylesheet">
</head>
<body>
	<div class="container text-center">
		<div class="row">
			<form class="form-signin" method="POST" action="modulos/validar.php">
				<h2 class="form-signin-heading">Introduzca los datos</h2>
				<div class="col-lg-4 col-lg-offset-4">
					<input class="form-control" placeholder="Introduzca su nombre" name="nombre" required="" autofocus="" type="text">
				</div>
				<div class="col-lg-4 col-lg-offset-4">
					<input class="form-control" placeholder="Introduzca su contraseña" name="password" required="" type="password">
				</div>
				<div class="col-lg-4 col-lg-offset-4">
					<button class="btn btn-lg btn-default" type="submit">Iniciar Sesión</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>