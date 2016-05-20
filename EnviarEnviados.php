<?php
	include '../conectar.php';
	session_start();
	$fecha = date('d/m/Y H:i');
	$envios="INSERT INTO enviados VALUES(NULL, '$fecha', '{$_SESSION['idmensajes']}', '{$_SESSION['idtutores']}', 'No', '{$_SESSION['nombre']}')";
	$insertar = mysqli_query($link, $envios) or die ("me roban");
	header("location: ../home.php");
?>