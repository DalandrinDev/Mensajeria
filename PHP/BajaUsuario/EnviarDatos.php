<!--Se encarga de recopilar los datos introducidos en BajaUsuario.php y borrar el usuario de la base de datos-->
<?php
    include '../conectar.php';
    $clavecontactos = $_POST['clavecontactos'];
	$resultado="DELETE FROM contactos WHERE clavecontactos = '$clavecontactos'";
	$insertar = mysqli_query($link, $resultado);
	header("location: ../home.php");
?>