<!--Formulario para eliminar usuario-->
<!DOCTYPE html>
<?php
	include "../comprobar.php";
?>
<html>
	<body>
		<div class="formulario">
			<form id="BajaUsuario" name="BajaUsuario" method="post" action="EnviarDatos.php"
			width="150" height="500">
				<span>ID:</span><input type="text" class="clavecontactos" name="clavecontactos" placeholder="Introduce la ID del usuario que deseas eliminar" required>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	</body>
</html>