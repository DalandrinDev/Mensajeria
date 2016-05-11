<!--Se encarga de recopilar los datos introducidos en BajaUsuario.php y borrar el usuario de la base de datos-->
<?php
    include '../conectar.php';
    $claveadmin = $_POST['claveadmin'];
	$resultado="DELETE FROM admin WHERE claveadmin = '$claveadmin'";
	echo "$resultado";
	$insertar = mysqli_query($link, $resultado);
	//header("location: ../home.php");
?>
