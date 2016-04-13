<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div class="formulario">
			<form id="AltaUsuario" name="AltaUsuario" method="post" onsubmit="return validar();" action="EnviarDatos.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required/>
				<span>Apellido:</span><input type="text" class="apellido" name="apellido" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required />
				<span>Telefono:</span><input type="text" class="telefono" name="telefono" pattern="^[6]+[0-9]{8}$" maxlength="9" required />
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	</body>
</html>