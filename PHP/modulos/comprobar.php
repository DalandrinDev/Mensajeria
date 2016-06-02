<!--Este archivo no sirve, de momento-->
<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		
	}else{
		header("Location: /Mensajeria/PHP/index.php");
	}
?>