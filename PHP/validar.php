<?php

    // se incluye el archivo conectar.php para hacer conexion a la base de datos.

    include 'conectar.php';

    //se obtienen los $_POST del archivo principal.php y se almacenan en sus respectivas variables.
    $usuario=$_POST['username'];
    $contrasena=$_POST['password'];

    $query = mysqli_query("SELECT * FROM admin WHERE nombre='$usuario' and contrasena='$contrasena'");
    //variable que almacena el numero de filas que hay en la consulta anterior.
    $numrows = mysqli_num_rows($query);

    //este es el mas facil, si el nombre de usuario es root, y la contraseña alumno
    //que se vaya a la pagina administrador.php con sus variables de sesion (ver while de abajo).
    if($usuario=="admin" && $contrasena=="uned") {
        //se cierra la conexion con mysql porque ya no vamos a hacer mas consultas (por ahora).
        mysqli_close();
        //se inicia la conexion con privilegios de admin.
        include 'conexion.php';
        //se inicia una sesion para almacenar las variables de sesion.
        session_start(); // start session.
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['rol'] = "administrador";
        //redirige a administrador.php.
        redirect('../home.php');
    }
    //----ESTE PUEDE SER MAS DIFICIL DE ENTENDER----
    //si de la consulta encuentra que hay una linea al menos
    //quiere decir que hay un usuario y su contraseña es correcta
    //sino, esque o el usuario y la contraseña son incorrectas (vease else)
    //o que el usuario no existe.

    function redirect($pagina) {
        header('Location: ' . $pagina);
        exit;
    }
    if ($numrows!=0)
    {
    //bucle while que pilla todas las lineas de la consulta y las almacena como $row.
      while ($row = mysql_fetch_assoc($query))
      {
        session_start();
        $_SESSION['estadousuario']= $row['estado'];

        $comprobarbaneo=$_SESSION['estadousuario'];

        if ($comprobarbaneo=='bloqueado') {
          redirect('../pagina_bloqueados/baneado.html');
        }
        //(se inicia la sesion para almacenar variables de sesion).
        //A partir de este punto, esta claro que quien ha hecho login es un usuario
        //valido de la tabla.

        //Se almacenan todas las variables de sesion, almacenados en las filas de la consulta.
        //para obtener una fila es con la sintaxis:
        //$row['nombredelafiladelatabla']
        //($row porque es la variable que almacena las filas, que se definen en el while).
        $_SESSION['rol'] = "usuario";
        $_SESSION['nickdelusuario']= $row['nickusuario'];
        $_SESSION['emailusuario']= $row['email'];
        $_SESSION['fechaingresousuario']= $row['FECHA_INGRESO'];
        $_SESSION['fechanacimiento']= $row['fecha_nacimiento'];
        $_SESSION['nombreusuario']= $row['nombre'];
        $_SESSION['direccionusuario']= $row['direccion'];
        $_SESSION['telefonousuario']= $row['telefono'];

        //------------------------Informacion de la base de datos----------------------------
        $_SESSION['idusuario']= $row['clavesocio'];
        $_SESSION['passusuario']= $row['contrausuario'];


        $_SESSION['validado']=TRUE;
        //-----------------------------------------------------------------------------------

        //despues de almacenar todas las variables de la tabla, carga la pagina ucp.php.
        redirect('../inicio.php');
        //redirect('../panel_usuario/ucp.php');
      }
    }

    else{
      redirect('inicio.php');
    }

?>
