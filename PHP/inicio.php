<!--Si no se está logeado como administrador, este archivo te redirije al login-->
<?php
	session_start();
	$_SESSION['validado']=FALSE;
	header("location: login.php");
?>
