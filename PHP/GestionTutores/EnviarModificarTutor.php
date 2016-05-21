<!--Ejecuta la consulta con los datos obtenidos en ModificarTutor.php y modificar el nombre, apellidos, y demás opciones registradas-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
    $clavetutor= $_GET['id'];
    echo "$clavetutor";
	$resultado="UPDATE tutor SET nombre='$nombre', apellidos='$apellido', alias='$alias', idfacultad='$facultad' WHERE idtutor='$clavetutor'";
    echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	//header("location: GestionTutores.php");
?>