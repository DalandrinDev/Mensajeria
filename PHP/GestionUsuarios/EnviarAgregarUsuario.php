<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $contrasena = $_POST['contrasena'];
    $facultad = $_POST['facultad'];
	$resultado="INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$contrasena')";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionUsuario.php");
?>