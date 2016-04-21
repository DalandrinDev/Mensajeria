<!--Comprueba que el usuario que accede a la pagina sea el administrador, si es distinto lo envia a logearse-->
<?php
	session_start();
	if ( $_SESSION['rol'] != "administrador" ) {
		header("location: login.php");
	}
?>
