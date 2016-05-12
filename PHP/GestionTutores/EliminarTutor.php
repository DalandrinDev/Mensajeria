<?php
	include '../conectar.php';
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores");
	echo "$resultado";
?>