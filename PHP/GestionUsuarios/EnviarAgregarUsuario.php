<!--Recibe la informacion obtenida por AgregarUsuario.php y ejecuta la consulta con los datos obtenidos, insertando el usuario a la base de datos-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $contrasena = md5($_POST['contrasena']);
	$resultado="INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$contrasena')";
	$insertar = mysqli_query($link, $resultado);
	header("location: GestionUsuarios.php");
?>