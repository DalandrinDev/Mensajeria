<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include '../conexion.php';
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $insertar="INSERT INTO contactos VALUES('$nombre','$apellido,'$telefono')";
        ?>
        <div class='resolucion'>
            <?php
                $resultado=mysqli_query($insertar) or trigger_error(mysqli_error().' in '.$insertar) or die ("No se ha podido enviar la información correctamente.");
                if ($resultado) {
                    echo "La información se ha mandado satisfactoriamente";
                }else{
                    echo "La información no ha podido enviarse, inténtelo de nuevo.";
                }
            ?>
        </div>
    </body>
</html>
