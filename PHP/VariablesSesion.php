<!--Este archivo va a contener todas las variables de sesión que se van a utilizar en el proyecto-->
<!--De esta forma es más secillo cambiar las variables de sesion cuando quiera, y solo tendria que hacer una llamada al archivo-->
<?php
	session_start();
	$sesionid = $_SESSION['id'];
	$nombre = $_SESSION['nombre'];
	$contrasena = $_SESSION['contrasena'];
?>