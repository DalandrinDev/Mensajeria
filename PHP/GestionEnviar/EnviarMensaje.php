<?php
	include '../conectar.php';
	session_start();
	$mensaje=$_POST['texto'];
	$fecha = date('d/m/Y H:i');
	$contacto =$_POST['contacto'];
	$envios="INSERT INTO enviar VALUES(NULL, '$mensaje', '$fecha', '{$_SESSION['nombre']}', '$contacto', 'No')";
	$insertar = mysqli_query($link, $envios);
	header("location: GestionEnviar.php");
?>