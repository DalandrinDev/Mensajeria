<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
		<script language="JavaScript">

			//Esta sirve para modificar el tutor, y lo hace usando la idtutor.
			function ModificarTutor(idtutor) {
				window.location="ModificarTutor.php?id="+idtutor;
			}

			//Esta sirve para eliminar el tutor, y lo hace usando la idtutor.
			function EliminarTutor(idtutor) {
				var agree=confirm("¿Quieres eliminar este tutor?");
				if (agree) {window.location="EliminarTutor.php?id="+idtutor; }
			}
		</script>
		<?php
			include '../modulos/head.php'; // Esta linea llama al archivo que contiene todos los archivos externos.
		?>
	</head>
	<body>
		<?php
			include '../modulos/nav.php'; // Esta linea llama al achivo que contiene la barra de navegación
		?>
	    <section id="tutores" class="container text-center separarmuytop">
	        <div class="row">
	        <!-- El tamaño de las filas del grid -->
	            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
	                <h2>Tutores</h2>
	                <!-- Boton de agregar tutores -->
	                <input type="button" class="btn btn-default" onclick="window.location.href = 'AgregarTutor.php';" value="Nuevo Tutor">   
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Alias</th>
								<th>Facultad</th>
								<th>Modificar</th>
								<th>Eliminar</th>
							</tr>
						</thead>

						<?php
							$query ="SELECT * FROM tutor"; // Selecciona todos los campos de la tabla tutores
							$result = mysqli_query($link, $query);
							
							# Mueestra cada uno de los datos dentro de su tabla
							while ($registro = mysqli_fetch_array($result)) { 
								echo '<tbody>';
									echo '<tr>';
										echo '<td>'.$registro['idtutor'].'</td>';
										echo '<td>'.$registro['nombre'].'</td>';
										echo '<td>'.$registro['apellidos'].'</td>';
										echo '<td>'.$registro['alias'].'</td>';
										echo '<td>'.$registro['idfacultad'].'</td>';

										# Los dos botones de modificr el tutor y eliminar tutor
										echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idtutor"].' onclick="ModificarTutor(this.id)" value="Modificar Tutor">'.'</td>';
										echo '<td>'.'<input type="button" class="btn btn-danger" id='.$registro["idtutor"].' onclick="EliminarTutor(this.id)" value="Eliminar Tutor">'.'</td>';
									echo '</tr>';
								echo '</tbody>';
							}
						?>
					</table>
				</div>
	        </div>
    	</section>
	    <footer>
			<?php
				include '../modulos/footer.php'; // Esta linea llama al achivo que contiene el footer.
			?>
	    </footer>
	</body>
</html>