<!--Ejecuta la consulta para eliminar al tutor deseado a través de su ID-->
<?php
	include '../conectar.php';
	session_start();
	$resultado=mysqli_query($link, "DELETE FROM tutores WHERE clavetutores='{$_SESSION['idtutores']}'");
	header("location: ../home.php");
?>