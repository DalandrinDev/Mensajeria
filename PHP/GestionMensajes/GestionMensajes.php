<<<<<<< HEAD
<!--Este archivo es el principal a la hora de gestionar todos los mensajes, es la base de toda su gestión, y donde se encuentran todas las opciones a realizar-->
<!DOCTYPE html>
	<head>
		<script language="JavaScript">
			function EnviarMensaje(clavemensajes) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="../GestionEnvios/EnviarEnviados.php";}
			}
		</script>
=======
<!--Archivo principal que muestra todos los tutores idsponibles y permite gestionarlos-->
<!DOCTYPE html>
	<head>
		<!--<script language="JavaScript">
			function Eliminar(clavetutores) {
				var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
				if (agree) { document.location="EliminarTutor.php?id="$registro=[clavetutores]; }
				else return false ;
			}
		</script>-->
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
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
<<<<<<< HEAD
		<!--Dibuja la tabla donde se almacenarán los datos obtenidos de la consulta hecha más abajo-->
=======
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Texto</td> 
<<<<<<< HEAD
					<td width="150" style='font-weight: bold'>Autor</td>
=======
					<td width="150" style='font-weight: bold'>Autor</td> 
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
				</tr>

				<?php
					include '../conectar.php';
<<<<<<< HEAD
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
=======
					$query = "SELECT * FROM mensajes";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['clavemensajes'].'</td>';
							echo '<td width="150">'.$registro['texto'].'</td>';
							echo '<td width="150">'.$registro['claveusuarios'].'</td>';
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
