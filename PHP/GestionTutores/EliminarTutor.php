<?php
	include '../conectar.php';

	$clavetutores= $_GET['id'];
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores='$clavetutores'");
	echo "$resultado";
?>