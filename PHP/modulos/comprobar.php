<!-- Este archivo comprueba que se haya iniciado sesion en cada archivo donde esté colocado -->
<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		
	}else{
		header("Location: /Mensajeria/PHP/index.php");
	}
?>