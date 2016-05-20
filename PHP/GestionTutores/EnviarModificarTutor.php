<<<<<<< HEAD
<!--Ejecuta la consulta con los datos obtenidos en ModificarTutor.php y modificar el nombre, apellidos, y demás opciones registradas-->
<?php
    include '../conectar.php';
    session_start();
=======
<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $clavetutores= $_GET['id'];
    echo "$clavetutores";
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
<<<<<<< HEAD
	$resultado="UPDATE tutores SET nombre='$nombre', apellidos='$apellido', alias='$alias', facultad='$facultad' WHERE clavetutores='{$_SESSION['idtutores']}'";
	echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
=======
	$resultado="UPDATE tutores SET nombre='$nombre', apellidos='$apellido', alias='$alias', facultad='$facultad' WHERE clavetutores='$clavetutores'";
	echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	//header("location: GestionTutores.php");
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>