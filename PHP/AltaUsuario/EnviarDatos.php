<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            echo '<br>';
            echo '<br>';
            echo '<br>';
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            echo '<br>';
            echo '<br>';
            echo '<br>';
            $ordenar=mysql_query('ALTER TABLE socio AUTO_INCREMENT=17');
            $insertar="INSERT INTO socio VALUES(null,'$nombre','$apellido,'$telefono')";
        ?>
        <div class='resolucion'>
            <?php
                $resultado=mysql_query($insertar) or trigger_error(mysql_error().' in '.$insertar) or die ("No se ha podido enviar la información correctamente.");
                if ($resultado) {
                    echo "La información se ha mandado satisfactoriamente";
                }else{
                    echo "La información no ha podido enviarse, inténtelo de nuevo.";
                }
            ?>
        </div>
    </body>
</html>
