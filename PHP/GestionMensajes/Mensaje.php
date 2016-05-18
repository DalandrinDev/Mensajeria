<!--Es un formulario donde se almacenará el mensaje y se enviará pormetodo POST a EnviarMensaje.php-->
<html>
	<head>
		<body>
			<form id="Mensaje" name="Mensaje" method="post" onsubmit="return validar();" action="EnviarMensaje.php" width="150" height="500">
				<textarea class="form-control" rows="3" name="texto"></textarea>
				<input type="submit" class="boton" value="Enviar">
			</form>
			<?php
				include '../conectar.php';
				session_start();
				echo "El mensaje se enviará a: {$_SESSION['nombretutor']}";
				echo "<br>";
				echo "El mensaje estará firmado por: {$_SESSION['nombre']}";
			?>
		</body>
	</head>
</html>