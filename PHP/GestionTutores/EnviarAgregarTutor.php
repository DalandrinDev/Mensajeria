<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $alias = $_POST['alias'];
    $facultad = $_POST['facultad'];
	$resultado="INSERT INTO tutores VALUES(NULL, '$nombre', '$apellido', '$alias', '$facultad')";
	$insertar = mysqli_query($link, $resultado);
<<<<<<< HEAD
	header("location: ../home.php");
=======
	header("location: GestionTutores.php");
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>