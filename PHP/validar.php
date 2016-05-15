<!--Valida que el usuario que está logeado es el administrador-->
<?php
    include 'conectar.php';
    $usuario=$_POST['username'];
    $rol=$_POST['rol'];
    $contrasena=$_POST['password'];
    $query = mysqli_query($link, "SELECT * FROM usuarios WHERE nombre = '$usuario' and contrasena = '$contrasena'");

    if($usuario == "admin" && $contrasena == "uned") {
        mysqli_close();
        include 'conectar.php';
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['rol'] = "administrador";
        redirect('home.php');
    }

    if($usuario == '' && $rol == 'user' && $contrasena == '') {
        mysqli_close();
        include 'conectar.php';
        session_start();
        echo "$usuario";
        $_SESSION['username'] = $usuario;
        $_SESSION['rol'] = "user";
        redirect('home.php');
    }
    function redirect($pagina) {
        header('Location: ' . $pagina);
        exit;
    }
?>
