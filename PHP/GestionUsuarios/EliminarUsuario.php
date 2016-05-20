<<<<<<< HEAD
<!--Este archivo hace la consulta para eliminar a un usuario especifico a través de su ID-->
<?php
	include '../conectar.php';
	session_start();
	$resultado=mysqli_query($link, "DELETE FROM usuarios WHERE claveusuarios='{$_SESSION['idusuarios']}'");
	header("location: /home.php");
=======
<?php
	include '../conectar.php';
	$resultado=mysqli_query($link, "DELETE FROM usuarios WHERE claveusuarios");
	echo "$resultado";
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>