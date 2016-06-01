<!--Se encarga de recopilar la información de AgregarTutor.php y enviarla a la base de datos para registrar un tutor-->
<?php
    include '../conectar.php'; #Incluye el archivo conectar.php para establecer conexión con la base de datos.
    include '../comprobar.php';
    $nombre = $_POST['nombre']; #Variable almacenada por metodo POST
    $apellido = $_POST['apellidos']; #Variable almacenada por metodo POST
    $alias = $_POST['alias']; #Variable almacenada por metodo POST
    $facultad = $_POST['facultad']; #Variable almacenada por metodo POST
	$resultado="INSERT INTO tutor VALUES(NULL, '$nombre', '$apellido', '$alias', '$facultad')"; //Consulta que inserta las variables anteriores en la tabla tutor.
	$insertar = mysqli_query($link, $resultado); //Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.
	header("location: GestionTutores.php"); //Te lleva a GestionTutores.php
?>