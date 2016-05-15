<?php
	include '../conectar.php';
	$clavetutores= $_GET['id'];
	echo "$clavetutores";
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores='$clavetutores'");
	//header("location: GestionTutores.php");
?>