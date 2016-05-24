<?php
	include '../conectar.php';
	session_start();
	$mensaje=$_POST['texto'];
	$fecha = date('d/m/Y H:i');

	$enviar="INSERT INTO mensaje VALUES(NULL, '$mensaje', '{$_SESSION['nombre']}')";
	$insertar = mysqli_query($link, $enviar);
	
	
	foreach($_POST as $contacto) {
		if ($contacto != $mensaje) {
	 		$envios="INSERT INTO enviar VALUES(NULL, '$fecha', '{$_SESSION['clavemensaje']}', '$contacto', 'No')";
			$insercion = mysqli_query($link, $envios);
	//$pyton = exec("python ../script.py /var/www/html/PHP/script.py");
		}
	}
	header("location: GestionEnviar.php");
?>