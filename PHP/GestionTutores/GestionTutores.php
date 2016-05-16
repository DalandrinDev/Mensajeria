<!--Archivo principal que muestra todos los tutores idsponibles y permite gestionarlos-->
<!DOCTYPE html>
	<head>
		<script language="JavaScript">
			function Eliminar(clavetutores) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="EliminarTutor.php?id="+clavetutores; }
			}

			function Modificar(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="EnviarModificarTutor.php?id="+clavetutores; }
			}
			
			function Enviar(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="EnviarMensaje.php?id="+clavetutores; }
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
					$query = "SELECT * FROM tutores";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['clavetutores'].'</td>';
							echo '<td width="150">'.$registro['nombre'].'</td>';
							echo '<td width="150">'.$registro['apellidos'].'</td>';
							echo '<td width="150">'.$registro['alias'].'</td>';
							echo '<td width="150">'.$registro['facultad'].'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Eliminar(this.id)" value="Eliminar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Modificar(this.id)" value="Modificar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Enviar(this.id)" value="Enviar Mensaje">'.'</td>';
						echo '</tr>';
					}
				?>
			</table>
		</div>
		<a href="AgregarTutor.php">Agregar Tutor</a>

		<?php
			include '../GestionMensajes/Mensaje.php';
		?>
		<a href="javascript:window.history.back();">&laquo; Volver atras</a>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>
