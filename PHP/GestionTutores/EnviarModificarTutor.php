<!--Ejecuta la consulta con los datos obtenidos en ModificarTutor.php y modificar el nombre, apellidos, y demás opciones registradas-->
<?php
    include '../conectar.php';
    session_start();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="UPDATE tutor SET nombre='$nombre', apellidos='$apellido', alias='$alias', idfacultad='$facultad' WHERE idtutor='{$_SESSION['idmodificar']}'";
	$insertar = mysqli_query($link, $resultado);
	session_destroy($_SESSION['idmodificar']);
	header("location: GestionTutores.php");
?>