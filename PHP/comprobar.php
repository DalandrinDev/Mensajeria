<?php
	session_start();

	if ( $_SESSION['rol'] != "administrador" ) {
		header("location: ../principal.php");
	}
?>
