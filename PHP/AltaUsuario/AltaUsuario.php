<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<!--<?php
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$telefono=$_POST['telefono'];
			$datos=mysql_query('ALTER TABLE contactos AUTO_INCREMENT=2');
			$insertar="INSERT INTO contactos VALUES($nombre, $apellidos, $telefono)";
			$resultado=mysql_query($insertar) or trigger_error(mysql_error().' in '.$insertar) or die ("No
				se ha podido mandar la información correctamente.")
		?>-->
		<div class="formulario">
			<form id="AltaUsuario" name="AltaUsuario" method="post" onsubmit="return validar();" action="enviardatos.php"
			width="150" height="500">
				<span>Nombre:</span><input type="text" class="nombre" name="nombre" pattern="^[A-Za-z0-9_-]{1,15}$" required/>
				<span>Apellido:</span><input type="text" class="apellido" name="apellido" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required />
				<span>Telefono:</span><input type="text" class="telefono" name="telefono" pattern="^[6]+[0-9]{8}$" maxlength="9" required />
				<input type="submit" class="boton" value="Enviar">
			</form>
		</div>
	</body>
</html>