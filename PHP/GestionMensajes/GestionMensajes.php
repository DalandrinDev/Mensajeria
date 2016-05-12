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
	</head>
	<body> 
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Texto</td> 
					<td width="150" style='font-weight: bold'>Autor</td> 
				</tr>

				<?php
					include '../conectar.php';
					$query = "SELECT * FROM mensajes";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['clavemensajes'].'</td>';
							echo '<td width="150">'.$registro['texto'].'</td>';
							echo '<td width="150">'.$registro['autor'].'</td>';
						echo '<tr>';
					};
				?>
			</table>
		</div>
		<a href="../GestionTutores/GestionTutores.php">Enviar un mensaje</a> 
	</body>
</html>
