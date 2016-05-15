<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $clavetutores= $_GET['id'];
    echo "$clavetutores";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="UPDATE tutores SET nombre='$nombre', apellidos='$apellido', alias='$alias', facultad='$facultad' WHERE clavetutores='$clavetutores'";
	echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	//header("location: GestionTutores.php");
?>