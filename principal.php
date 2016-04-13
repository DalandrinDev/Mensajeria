<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['validado']=FALSE;
        header("location: inicio.php");
        ?>
    </body>
</html>
