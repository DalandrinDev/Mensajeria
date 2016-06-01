<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
	session_start(); #Inicia la sesión.
	$fecha = date('Y/m/d H:i'); #Variable almacenada que rellena el campo con la fecha actual

	$query ="SELECT idmensaje FROM mensaje WHERE idmensaje='{$_SESSION['clavemensaje']}'";
	$insertar = mysqli_query($link, $query);
	while ($registro = mysqli_fetch_array($insertar)) {
		foreach($_POST as $contacto) {
			$consulta = "INSERT INTO enviar VALUES(NULL, '{$registro['idmensaje']}', '$fecha', '', '$contacto', 'No')";
			$inserto = mysqli_query($link, $consulta);
		}
	}
		
	header("location: GestionEnviar.php");#Te lleva GestionEnviar.php
?>