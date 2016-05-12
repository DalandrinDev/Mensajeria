<html>
	<head>
		<body>
			<form id="Mensaje" name="Mensaje" method="post" onsubmit="return validar();" action="../GestionMensajes/EnviarMensaje.php" width="150" height="500">
				<textarea class="form-control" rows="3" name="texto"></textarea>
				<span>Autor:</span><input type="text" class="autor" name="autor" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</body>
	</head>
</html>