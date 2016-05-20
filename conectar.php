<!--Se encarga de conectar el servidor, el administrador, la contraseña y la base de datos-->
<!--Lo guardo en un archivo separado para poder hacer llamadas cada vez que sea necesario y si hay que haer un cambio o actualizar la base de datos, sea mucho mas sencillo-->
<?php
	$link = mysqli_connect("localhost", "admin", "uned", "mensajeria");
?>
