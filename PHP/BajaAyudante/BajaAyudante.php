<script language="JavaScript">
function BorrarAyudante(claveadmin) {
	var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
	if (agree) { document.location="EnviarDatos.php?id="+claveadmin; }
	else return false ;
}
</script>
<html>
	<body>
		<form name="BajaAyudante" method="post" action="BajaAyudante.php" id="bajaayudante" >
			<h3>Buscar Ayudante</h3>
			<p>
				<input name="busca"  type="text" id="busqueda">
				<input type="submit" name="Submit" value="buscar">
			</p>
		</form>

		<?php
			include '../conectar.php';
			$busca="";
			$busca=$_POST['busca'];
			if($busca!=""){
			$busqueda=mysqli_query($link, "SELECT * FROM admin WHERE nombre LIKE '%".$busca."%'");
		?>
		<table width="1166" border="1" id="tab">
			<tr>
				<td width="19">Id</td>
				<td width="61">Nombre</td>
				<td width="157">Apellido</td>
				<td width="221">Rango</td>
			</tr>
			<?php
				while($f=mysqli_fetch_array($busqueda)){
					echo '<tr>';
						echo '<td width="19">'.$f['claveadmin'].'</td>';
						echo '<td width="61">'.$f['nombre'].'</td>';
						echo '<td width="157">'.$f['apellidos'].'</td>';
						echo '<td width="221">'.$f['rango'].'</td>';
						echo  '<td>'.'<input type="button" onclick="BorrarAyudante('.$f['claveadmin'].')" value="Borrar Ayudante">'.'</td>';
					echo '</tr>';
				}
			}
			?>
		</table>
	</body>
</html>