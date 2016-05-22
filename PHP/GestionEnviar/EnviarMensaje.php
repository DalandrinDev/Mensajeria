<?php
	include '../conectar.php';
	$mensaje=$_POST['texto'];
	$fecha = date('d/m/Y H:i');
	$contacto = $_POST['contacto'];
	$envios="INSERT INTO enviar VALUES(NULL, '$mensaje', '$fecha', '{$_SESSION['nombre']}', '$contacto', 'No')";
	$insertar = mysqli_query($link, $envios);
	$pyton = exec("python ../script.py /var/www/html/PHP/script.py");
	echo "$pyton";
	//header("location: GestionEnviar.php");
?>