<!--Se encarga de recopilar los datos introducidos en AltaUsuario.php e introducirlos en la base de datos-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="INSERT INTO tutores VALUES(NULL, '$nombre', '$apellido', '$alias', '$facultad')";
	$insertar = mysqli_query($link, $resultado);
	//header("location: ../home.php");
?>