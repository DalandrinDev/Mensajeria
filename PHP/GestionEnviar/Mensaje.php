<!--Es un formulario donde se almacenará el mensaje y se enviará pormetodo POST a EnviarMensaje.php-->
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
		<div class="container content-section text-center">
			<form  role="form" method="post" action="EnviarMensaje.php">
				<div class=class="form-group">
					<h2 class="form-signin-heading">Escribe el mensaje</h2>
					<?php
						include '../conectar.php';
						session_start();
						echo "<p>El mensaje será firmado por: {$_SESSION['nombre']}</p>";
					?>
					<textarea class="form-control" rows="5" id="comment" name="texto"></textarea>
				</div>
				<div class="form-group"><br>
					<h4 for="contacto">Selecciona los Tutores:</h4>
					<div class="checkbox">
						<?php
							$query ="SELECT * FROM tutor";
							$result = mysqli_query($link, $query);
							while ($registro = mysqli_fetch_array($result)) {
									echo "<div class='checkbox'>";
  										echo "<label><input type='checkbox' name='contacto' value='".$registro['idtutor']."'>".$registro['nombre']."</label>";
									echo "</div>";
							}
						?>
					</div>
				</div>
			<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>
		<div class="col-lg-8 col-lg-offset-2">
			<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
		</div>
	    <script src="../../Recursos/js/jquery.js"></script>
	    <script src="../../Recursos/js/bootstrap.min.js"></script>
		<script src="../../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../../Recursos/js/grayscale.js"></script>
	</body>
</html>