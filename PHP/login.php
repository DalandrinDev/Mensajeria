<!--Archivo de login, para que puede acceder el administrador-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="validar.php" method='post'>
            <div class="contenedor">
                <p>Inicio de sesi&oacute;n</p>
                <p>Usuario:</p><input type='text' class='usuario' id='username' name='username' placeholder='Introduce un usuario' required>
                <p>Contraseña:</p><input type='password' class='password' id='password' name='password' placeholder='Introduce una contrase&ntilde;a' required>
                <p>Rol:</p><input class='rol' id='rol' name='rol' placeholder='Introduce un usuario' required>
                <input type='submit' name='submit' value='Enviar'>
            </div>
        </form>
    </body>
</html>
