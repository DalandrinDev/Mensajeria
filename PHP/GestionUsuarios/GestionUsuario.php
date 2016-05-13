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
				<li><a href='../GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='#'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Nombre</td> 
					<td width="150" style='font-weight: bold'>Apellidos</td> 
					<td width="150" style='font-weight: bold'>Contraseña</td> 
				</tr>

				<?php
					include '../conectar.php';
					$query = "SELECT * FROM usuarios";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['claveusuarios'].'</td>';
							echo '<td width="150">'.$registro['nombre'].'</td>';
							echo '<td width="150">'.$registro['apellidos'].'</td>';
							echo '<td width="150">'.$registro['contrasena'].'</td>';
							/*echo '<td width="150">'.'<input type="button" onclick="Eliminar('.$registro['clavetutores'].')" value="Eliminar Tutor">'.'</td>';*/
							echo "<td><a href='EliminarTutor.php'>Borrar</a></td>";
						echo '</tr>';
					}
				?>
			</table>
		</div>
		<a href="AgregarUsuario.php">Agregar Tutor</a>
		<a href="javascript:window.history.back();">&laquo; Volver atras</a>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>
