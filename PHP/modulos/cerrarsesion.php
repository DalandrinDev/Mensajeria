<!-- Este archivo se encarga de cerrar sesion -->
<?php
	session_start();
	unset($_SESSION["nombre"]); 
	session_destroy();
	header("Location: ../index.php");
	exit;
?>