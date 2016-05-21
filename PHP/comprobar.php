<!--Este archivo no sirve, de momento-->
<?php
	include 'conectar.php';
	session_start();

	if ($_SESSION['nombre'] != '') {
	}else{
		redirect('index.html');
		exit();
	}
?>