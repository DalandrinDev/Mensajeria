<!--Este archivo hace la consulta para eliminar a un usuario especifico a través de su ID-->
<?php
	include '../conectar.php';
	session_start();
	$resultado=mysqli_query($link, "DELETE FROM usuarios WHERE claveusuarios='{$_SESSION['idusuarios']}'");
	header("location: GestionUsuarios.php");
?>