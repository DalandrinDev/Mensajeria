<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
	header("Location: index.html");
	exit();
}


$result = mysql_query("SELECT * from usuarios where Username='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['Password'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: contenido.php");
	}else{
		header("Location: index.html");
		exit();
	}
}else{
	header("Location: index.html");
	exit();
}


?>