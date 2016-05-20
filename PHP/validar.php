<<<<<<< HEAD
<!--Es el archivo que se encarga de comprobar si el usuario se puede logear-->
<?php
    include 'conectar.php';
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['password'];

    //Si el nombre o el usuario están vacios se mete dentro de la condición y redirecciona a la misma pagina
=======
<!--Valida que el usuario que está logeado es el administrador-->
<?php
    include 'conectar.php';
    $nombre = $_POST['nombre'];
    echo "$nombre";
    $contrasena = $_POST['password'];
    echo "$contrasena";

>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
    if (empty($nombre) || empty($contrasena)) {
        header("Location: index.html");
        exit();
    }

    $resultado = mysqli_query($link, "SELECT * FROM usuarios WHERE nombre='" . $nombre . "'");
<<<<<<< HEAD
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
=======
    if ($row = mysqli_fetch_array($resultado)) {
        if ($row['contrasena'] == $contrasena) {
            session_start();
            $_SESSION['nombre'] = $nombre;
            header("Location: home.php");
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
        }else{
            header("Location: index.html");
            exit();
        }
<<<<<<< HEAD
    //Si la consulta no devuelve nada te redirije a logearte de nuevo
=======
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
    }else{
        header("Location: index.html");
        exit();
    }
?>