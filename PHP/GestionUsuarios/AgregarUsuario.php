<!--Formulario para insertar tutor-->
<!DOCTYPE html>
<?php
	include "../comprobar.php";
?>
<html>
	<body>
		<div class="formulario">
			<form id="AltaUsuario" name="AltaUsuario" method="post" onsubmit="return validar();" action="EnviarAgregarUsuario.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" placeholder="Introduce el nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<span>Apellidos:</span><input type="text" class="apellidos" name="apellidos" placeholder="Introduce los apellidos" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				<span>Contraseña:</span><input type="text" class="contrasena" name="contrasena" placeholder="Introduce una contraseña" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	    <a href="javascript:window.history.back();">&laquo; Volver atrás</a>
	</body>
</html>