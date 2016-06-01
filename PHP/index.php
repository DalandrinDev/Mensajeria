<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		include 'modulos/head.php';
	?>
	<link href="../Recursos/css/grayscale.css" rel="stylesheet">
</head>
<body>
	<div class="container content-section text-center">
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
	<script src="../Recursos/js/jquery.js"></script>
    <script src="../Recursos/js/bootstrap.min.js"></script>
	<script src="../Recursos/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
	<script src="../Recursos/js/grayscale.js"></script>
</body>
</html>