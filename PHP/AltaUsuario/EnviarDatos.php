<!--Se encarga de recopilar los datos introducidos en AltaUsuario.php e introducirlos en la base de datos-->
<?php
    include '../conexion.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $facultad = $_POST['facultad'];
	$resultado="INSERT INTO contactos VALUES(NULL, '$nombre', '$apellido', '$telefono', '$facultad')";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>