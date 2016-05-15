<!--Valida que el usuario que está logeado es el administrador-->
<?php
//echo "$query";
    include 'conectar.php';
    //$user=false;
    $usuario=$_POST['username'];
    $contrasena=$_POST['password'];
    $query = mysqli_query("SELECT * FROM admin WHERE nombre = '$usuario' and contrasena = '$contrasena'");
    echo "$query";
    $numrows = mysqli_num_rows($query);
    while ($linea = mysqli_fetch_rows($query)){
        $usuario=$linea['nombre'];
        $contrasena=$linea['contrasena'];
        echo "$query";
        $user=true;
    }

    if($usuario == "admin" && $contrasena == "uned" && $user==false) {
        mysqli_close();
        include 'conectar.php';
        session_start();
        echo 'if $usuario admin';
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['rol'] = "administrador";
        redirect('home.php');
    }

    if($user==true) {
        mysqli_close();
        include 'conectar.php';
        session_start();ç
        echo 'if $usuario true';
        $_SESSION['username'] = $usuario;
        $_SESSION['rol'] = "administrador";
        redirect('home.php');
    }
    function redirect($pagina) {
        header('Location: ' . $pagina);
        exit;
    }
?>
