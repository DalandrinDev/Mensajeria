<!--Este archivo hace la consulta para eliminar a un usuario especifico a través de su ID-->
<?php
	include '../conectar.php';
	session_start();
	$claveusuario=$_GET['id'];
	$resultado=mysqli_query($link, "DELETE FROM usuario WHERE idusuario='$claveusuario'");
	header("location: GestionUsuarios.php");
?>