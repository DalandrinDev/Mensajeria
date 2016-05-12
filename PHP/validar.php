<!--Valida que el usuario que está logeado es el administrador-->
<?php
    include 'conectar.php';
    
    $usuario=$_POST['username'];
    $contrasena=$_POST['password'];
    $query = mysqli_query("SELECT * FROM admin WHERE nombre = '$usuario' and contrasena = '$contrasena'");
    $numrows = mysqli_num_rows($query);

    if($usuario == "admin" && $contrasena == "uned") {
        mysqli_close();
        include 'conectar.php';
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['rol'] = "administrador";
        redirect('home.php');
    }
    function redirect($pagina) {
        header('Location: ' . $pagina);
        exit;
    }
?>
