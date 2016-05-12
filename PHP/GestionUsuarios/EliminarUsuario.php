<?php
	include '../conectar.php';
	$resultado=mysqli_query($link, "DELETE FROM usuarios WHERE claveusuarios");
	echo "$resultado";
?>