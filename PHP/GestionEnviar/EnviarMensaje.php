<?php
	include '../conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
	include '../comprobar.php';
	session_start(); #Inicia la sesión.
	$mensaje=$_POST['texto']; #Variable almacenada por metodo POST
	$fecha = date('Y/m/d H:i'); #Variable almacenada que rellena el campo con la fecha actual

	//Hace el ingreso de datos en la tabla mensaje.
	$enviar="INSERT INTO mensaje VALUES(NULL, '$mensaje', '{$_SESSION['nombre']}')";
	$insertar = mysqli_query($link, $enviar); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

	//Selecciona la id mayor en la tabla mensaje, para usarla luego en una consulta.
	$consulta = "SELECT max(idmensaje) FROM mensaje";
	$result = mysqli_query($link, $consulta); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

	#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
	while ($registro = mysqli_fetch_array($result)) {

		//Cada metodo POST recogido en el formulario anterior lo convierte en la variable $contacto.
		foreach($_POST as $contacto) {

			if ($contacto != $mensaje) {# Con esta linea entramos en un condicional en el que no entrará el mismo contenido $mensaje que $contacto, así evitamos introducir el texto.
				//Hace el ingreso de datos en la tabla enviar con los datos recogidos.
		 		$envios="INSERT INTO enviar VALUES(NULL, '{$registro['max(idmensaje)']}', '$fecha', '', '$contacto', 'No')";
				$insercion = mysqli_query($link, $envios); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.
			}
		}
	}		
	header("location: GestionEnviar.php");#Te lleva GestionEnviar.php
?>