<!--Ejecuta la consulta con los datos obtenidos en ModificarTutor.php y modificar el nombre, apellidos, y demás opciones registradas-->
<?php
    include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
    include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
    $nombre = $_POST['nombre']; // Variable almacenada por metodo POST
    $apellido = $_POST['apellidos']; // Variable almacenada por metodo POST
    $alias = $_POST['alias']; // Variable almacenada por metodo POST
    $facultad = $_POST['facultad']; // Variable almacenada por metodo POST
	$resultado="UPDATE tutor SET nombre='$nombre', apellidos='$apellido', alias='$alias', idfacultad='$facultad' WHERE idtutor='{$_SESSION['idmodificar']}'"; // Consulta que actualiza los nuevos campos.
	$insertar = mysqli_query($link, $resultado); // Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.
	session_destroy($_SESSION['idmodificar']); // Destruye la sesión creada en el formulario para que no consuma memoria.
	header("location: GestionTutores.php"); // Te lleva a GestionTutores.php
?>