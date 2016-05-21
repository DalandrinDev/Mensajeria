<!--Es el archivo que se encarga de comprobar si el usuario se puede logear-->
<?php
    include 'conectar.php';
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['password'];

    //Si el nombre o el usuario están vacios se mete dentro de la condición y redirecciona a la misma pagina
    if (empty($nombre) || empty($contrasena)) {
        header("Location: index.html");
        exit();
    }

    $resultado = mysqli_query($link, "SELECT * FROM usuario WHERE nombre='" . $nombre . "'");
    $numrows = mysqli_num_rows($resultado);

    //Si la consulta devuelve algo, se mete dentro de la condición
    if ($row = mysqli_fetch_array($resultado)) {
        //Si la contraseña es correcta se mete dentro de la condición
        if ($row['contrasena'] == $contrasena) {
            //Inicia la sesión con el nombre del usuario logeado y te manda a home.php
            session_start();
            $_SESSION['nombre']= $_POST['nombre'];
            header("Location: home.php");
        //Si la contraseña no es correcta te redirije
        }else{
            header("Location: index.html");
            exit();
        }
    //Si la consulta no devuelve nada te redirije a logearte de nuevo
    }else{
        header("Location: index.html");
        exit();
    }
?>