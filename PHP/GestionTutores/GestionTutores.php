<!--Este archivo es el principal a la hora de gestionar todos los tutores, es la base de toda su gestión, y donde se encuentran todas las opciones a realizar-->
<!DOCTYPE html>
	<head>
		<!--Estas dos funciones hechas con JavaScript se ocupan de eliminar, de modificar el tutor y enviarle un mensaje a determinado tutor, al presionar el botón aparecerá una ventana de dialogo en la que hará una pregunta y al pulsar aceptar hará automaticamente la accion deseada-->
		<script language="JavaScript">
			function Eliminar(clavetutores) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="EliminarTutor.php";}
			}

			function Modificar(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="ModificarTutor.php"; }
			}
			
			function Enviar(clavetutores) {
				var agree= confirm("¿Quieres enviar un mensaje a este tutor?");
				if (agree) {window.location="../GestionMensajes/Mensaje.php"}
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
				<li><a href='#'><span>Gestionar Tutores</span></a></li>
				<li><a href='../GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<!--Dibuja la tabla donde se almacenarán los datos obtenidos de la consulta hecha más abajo-->
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Nombre</td> 
					<td width="150" style='font-weight: bold'>Apellidos</td> 
					<td width="150" style='font-weight: bold'>Alias</td> 
					<td width="150" style='font-weight: bold'>Facultad</td>
					<td width="150" style='font-weight: bold'>Eliminar</td>
					<td width="150" style='font-weight: bold'>Modificar</td>
					<td width="150" style='font-weight: bold'>Enviar Mensaje</td>
				</tr>

				<?php
					include '../conectar.php';
					session_start();
					$query = "SELECT * FROM tutores";
					$result = mysqli_query($link, $query);
					/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
					y los coloque en la tabla que hemos creado anteriormente*/
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$_SESSION['idtutores']=$registro['clavetutores'].'</td>';
							echo '<td width="150">'.$_SESSION['nombretutor']=$registro['nombre'].'</td>';
							echo '<td width="150">'.$registro['apellidos'].'</td>';
							echo '<td width="150">'.$registro['alias'].'</td>';
							echo '<td width="150">'.$registro['facultad'].'</td>';
							//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
							echo '<td width="150">'.'<input type="button" onclick="Eliminar(this.id)" value="Eliminar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" onclick="Modificar(this.id)" value="Modificar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" onclick="Enviar(this.id)" value="Enviar Mensaje">'.'</td>';
						echo '</tr>';
					}
				?>
			</table>
		</div>
		<a href="AgregarTutor.php">Agregar Tutor</a>
		<a href="javascript:window.history.back();">&laquo; Volver atras</a>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>
