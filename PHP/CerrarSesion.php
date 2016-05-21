<!--Este archuvo no funciona, de momento-->
<?php
	include 'conectar.php';
	session_destroy();
	header("Location: index.html");
?>