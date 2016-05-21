<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="INSERT INTO tutor VALUES(NULL, '$nombre', '$apellido', '$alias', '$facultad')";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionTutores.php");
?>