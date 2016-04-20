<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include '../conexion.php';
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
    		$resultado="INSERT INTO contactos VALUES(NULL'$nombre','$apellidos,'$telefono')";
			$insertar = mysqli_query($link, $resultado) or die (mysqli_error($insertar));
                if ($resultado) {
                    echo "La información se ha mandado satisfactoriamente";
                }else{
                    echo "La información no ha podido enviarse, inténtelo de nuevo.";
                }
        ?>
    </body>
</html>
