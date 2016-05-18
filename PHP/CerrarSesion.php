<?php
	include 'conectar.php';
	session_destroy();
	header("Location: index.html");
?>