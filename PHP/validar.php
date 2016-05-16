<!--Valida que el usuario que está logeado es el administrador-->
<?php
    include 'conectar.php';
    $nombre = $_POST['nombre'];
    echo "$nombre";
    $contrasena = $_POST['password'];
    echo "$contrasena";

    if (empty($nombre) || empty($contrasena)) {
        header("Location: index.html");
        exit();
    }

    $resultado = mysqli_query($link, "SELECT * FROM usuarios WHERE nombre='" . $nombre . "'");
    if ($row = mysqli_fetch_array($resultado)) {
        if ($row['contrasena'] == $contrasena) {
            session_start();
            $_SESSION['nombre'] = $nombre;
            header("Location: home.php");
        }else{
            header("Location: index.html");
            exit();
        }
    }else{
        header("Location: index.html");
        exit();
    }
?>