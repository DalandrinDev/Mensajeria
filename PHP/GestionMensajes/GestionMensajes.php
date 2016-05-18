<!--Este archivo es el principal a la hora de gestionar todos los mensajes, es la base de toda su gestión, y donde se encuentran todas las opciones a realizar-->
<!DOCTYPE html>
	<head>
		<script language="JavaScript">
			function EnviarMensaje(clavemensajes) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="../GestionEnvios/EnviarEnviados.php";}
			}
		</script>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../Recursos/Css/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../../Recursos/js/script.js"></script>
		<title>Mensajeria</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='../home.php'><span>Inicio</span></a></li>
				<li><a href='../GestionTutores/GestionTutores.php'><span>Gestionar Tutores</span></a></li>
				<li><a href='#'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<!--Dibuja la tabla donde se almacenarán los datos obtenidos de la consulta hecha más abajo-->
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Texto</td> 
					<td width="150" style='font-weight: bold'>Autor</td>
				</tr>

				<?php
					include '../conectar.php';
					session_start();
					$query = "SELECT * FROM mensajes";
					$result = mysqli_query($link, $query);
					/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
					y los coloque en la tabla que hemos creado anteriormente*/
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$_SESSION['idmensajes']=$registro['clavemensajes'].'</td>';
							echo '<td width="150">'.$registro['texto'].'</td>';
							echo '<td width="150">'.$registro['autor'].'</td>';
							echo '<td width="150">'.'<input type="button" onclick="EnviarMensaje(this.id)" value="Enviar el mensaje">'.'</td>';
						echo '<tr>';
					};
				?>
			</table>
		</div>
		<a href="../GestionTutores/GestionTutores.php">Enviar un mensaje</a>
		<a href="javascript:window.history.back();">&laquo; Volver atras</a>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>