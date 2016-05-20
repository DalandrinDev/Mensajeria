<<<<<<< HEAD
<!--Se encarga de enviar el mensaje a la base de datos-->
<?php
	include '../conectar.php';
	session_start();
	$mensaje = $_POST['texto'];
	$resultado="INSERT INTO mensajes VALUES(NULL, '$mensaje', '{$_SESSION['nombre']}')";
=======
<?php
	include '../conectar.php';
	$mensaje = $_POST['texto'];
    $autor = $_POST['claveusuario'];
	$resultado="INSERT INTO mensajes VALUES(NULL, '$mensaje', '$autor')";
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>