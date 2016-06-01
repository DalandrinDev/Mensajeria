<!--Ejecuta la consulta para eliminar al tutor deseado a través de su ID-->
<?php
	include '../modulos/conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
    include '../modulos/comprobar.php';
	$clavetutor = $_GET['id']; //Coje la id del tutor por metodo GET para usarlo.
	$query="DELETE FROM tutor WHERE idtutor='$clavetutor'"; //Elimina al tutor del registro.
	$resultado=mysqli_query($link, $query); //Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.
	header("location: GestionTutores.php");
?>