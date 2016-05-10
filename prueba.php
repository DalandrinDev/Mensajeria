<?php
	$lista = shell_exec('/bin/sh /var/www/tg/envio.sh Prueba adios');
	echo "$lista";
	/*$comando = shell_exec('/bin/sh /var/www/tg/envio.sh Sergio hi');
	echo "$comando";*/
?>