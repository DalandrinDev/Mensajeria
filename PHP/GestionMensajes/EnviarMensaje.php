<?php
	include '../conectar.php';
	$mensaje = $_POST['texto'];
    $autor = $_POST['claveusuario'];
	$resultado="INSERT INTO mensajes VALUES(NULL, '$mensaje', '$autor')";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>