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
	</body>
</html>
