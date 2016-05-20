<?php
    $to = '';
    $clienteNombre = $_POST['nombre'];
    $clienteEmail = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $headers = 'From: ' .  "\r\n" ;
	$headers .='Reply-To: '. $clienteEmail . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    mail($to, $asunto, $mensaje, $headers);
	echo "Muchas gracias por tu mensaje, te responderé lo más rápido posible."
?>
