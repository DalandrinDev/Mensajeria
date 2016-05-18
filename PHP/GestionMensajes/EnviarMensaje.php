<!--Se encarga de enviar el mensaje a la base de datos-->
<?php
	include '../conectar.php';
	session_start();
	$mensaje = $_POST['texto'];
	$resultado="INSERT INTO mensajes VALUES(NULL, '$mensaje', '{$_SESSION['nombre']}')";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>