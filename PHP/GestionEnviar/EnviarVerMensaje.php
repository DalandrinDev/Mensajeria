<?php
	include '../conectar.php';
	$mensaje=$_POST['texto'];
	$fecha = date('d/m/Y H:i');
	foreach($_POST as $contacto) {
	 if ($contacto > '') {
	 	
	
	$envios="INSERT INTO enviar VALUES(NULL, '$mensaje', '$fecha', '{$_SESSION['nombre']}', '$contacto', 'No')";
	echo "$envios";
	$insertar = mysqli_query($link, $envios);
	//$pyton = exec("python ../script.py /var/www/html/PHP/script.py");
	}
	}
	//header("location: GestionEnviar.php");
?>