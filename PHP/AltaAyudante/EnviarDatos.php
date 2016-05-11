<!--Se encarga de recopilar los datos introducidos en AltaUsuario.php e introducirlos en la base de datos-->
<?php
    include '../conectar.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $contraseña = $_POST['contrasena'];
    $rango = $_POST['rango'];
    $resultado="INSERT INTO admin VALUES(NULL, '$nombre', '$apellido', '$contraseña', '$rango')";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>