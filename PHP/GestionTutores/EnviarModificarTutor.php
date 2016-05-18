<!--Ejecuta la consulta con los datos obtenidos en ModificarTutor.php y modificar el nombre, apellidos, y demás opciones registradas-->
<?php
    include '../conectar.php';
    session_start();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="UPDATE tutores SET nombre='$nombre', apellidos='$apellido', alias='$alias', facultad='$facultad' WHERE clavetutores='{$_SESSION['idtutores']}'";
	echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionTutores.php");
?>