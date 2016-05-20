<!--Archivo principal que muestra todos los tutores idsponibles y permite gestionarlos-->
<!DOCTYPE html>
	<head>
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
				<li><a href='#'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Fecha</td> 
					<td width="150" style='font-weight: bold'>ID Mensaje</td> 
					<td width="150" style='font-weight: bold'>ID Tutor</td> 
					<td width="150" style='font-weight: bold'>Enviado</td>
					<td width="150" style='font-weight: bold'>Autor</td>
				</tr>

				<?php
					include '../conectar.php';
					$query = "SELECT * FROM enviados";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['claveenvio'].'</td>';
							echo '<td width="150">'.$registro['fechaenvio'].'</td>';
							echo '<td width="150">'.$registro['clavemensajes'].'</td>';
							echo '<td width="150">'.$registro['clavetutores'].'</td>';
							echo '<td width="150">'.$registro['enviado'].'</td>';
							echo '<td width="150">'.$registro['autor'].'</td>';
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
