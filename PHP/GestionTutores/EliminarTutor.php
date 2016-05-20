<<<<<<< HEAD
<!--Ejecuta la consulta para eliminar al tutor deseado a través de su ID-->
<?php
	include '../conectar.php';
	session_start();
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores='{$_SESSION['idtutores']}'");
	header("location: ../home.php");
=======
<?php
	include '../conectar.php';
	$clavetutores= $_GET['id'];
	echo "$clavetutores";
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores='$clavetutores'");
	//header("location: GestionTutores.php");
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
?>