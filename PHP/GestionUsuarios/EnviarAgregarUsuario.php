<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $rol = $_POST['rol'];
    $contrasena = $_POST['contrasena'];
	$resultado="INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$rol', '$contrasena')";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionUsuario.php");
?>