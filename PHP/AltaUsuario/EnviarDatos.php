<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include '../conexion.php';
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
    		$resultado="INSERT INTO contactos VALUES(NULL, '$nombre', '$apellido', '$telefono')";
			$insertar = mysqli_query($link, $resultado);
			header("location: ../index.php");
        ?>
    </body>
</html>
