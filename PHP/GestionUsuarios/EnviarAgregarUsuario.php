<<<<<<< HEAD
<!--Recibe la informacion obtenida por AgregarUsuario.php y ejecuta la consulta con los datos obtenidos, insertando el usuario a la base de datos-->
=======
<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
<<<<<<< HEAD
    $contrasena = md5($_POST['contrasena']);
	$resultado="INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$contrasena')";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
=======
    $rol = $_POST['rol'];
    $contrasena = $_POST['contrasena'];
	$resultado="INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$rol', '$contrasena')";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionUsuario.php");
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>