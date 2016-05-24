<!--Ejecuta la consulta para eliminar al tutor deseado a través de su ID-->
<?php
	include '../conectar.php';
	$clavetutor = $_GET['id'];
	$query="DELETE FROM tutor WHERE idtutor='$clavetutor'";
	echo "$query";
	$resultado=mysqli_query($link, $query);
	header("location: GestionTutores.php");
?>