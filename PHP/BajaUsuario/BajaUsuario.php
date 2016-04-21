<!--Formulario para insertar usuario-->
<!DOCTYPE html>
<html>
	<body>
		<div class="formulario">
			<form id="BajaUsuario" name="BajaUsuario" method="post" onsubmit="return validar();" action="EnviarDatos.php"
			width="150" height="500">
				<span>ID:</span><input type="text" class="clavecontactos" name="clavecontactos" placeholder="Introduce la ID del usuario que sedeas eliminar" required/>
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	</body>
</html>