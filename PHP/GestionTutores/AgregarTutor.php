<!--Formulario para insertar usuario-->
<!DOCTYPE html>
<?php
	include "../comprobar.php";
?>
<html>
	<body>
		<div class="formulario">
			<form id="AltaUsuario" name="AltaUsuario" method="post" onsubmit="return validar();" action="EnviarAgregarTutor.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Apellidos:</span><input type="text" class="apellidos" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Alias:</span><input type="text" class="alias" name="alias" placeholder="Introduce un alias" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Facultad:</span><input type="text" class="facultad" name="facultad" placeholder="Introduce la facultad del tutor" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	</body>
</html>