<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
		<script language="JavaScript">

			//Esta sirve para modificar el tutor, y lo hace usando la idtutor.
			function ModificarTutor(idtutor) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="ModificarTutor.php?id="+idtutor; }
			}

			//Esta sirve para eliminar el tutor, y lo hace usando la idtutor.
			function EliminarTutor(idtutor) {
				var agree=confirm("¿Quieres eliminar este tutor?");
				if (agree) {window.location="EliminarTutor.php?id="+idtutor; }
			}
		</script>
		<?php
			include '../modulos/head.php';
		?>
	</head>
	<body>
		<?php
			include '../modulos/nav.php';
		?>
	    <section id="tutores" class="container text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
		                <h2>Tutores</h2><br>
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
								$query ="SELECT * FROM tutor";
								$result = mysqli_query($link, $query); 
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['idtutor'].'</td>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
											echo '<td>'.$registro['alias'].'</td>';
											echo '<td>'.$registro['idfacultad'].'</td>';

											
											echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idtutor"].' onclick="ModificarTutor(this.id)" value="Modificar Tutor">'.'</td>';
											echo '<td>'.'<input type="button" class="btn btn-danger" id='.$registro["idtutor"].' onclick="EliminarTutor(this.id)" value="Eliminar Tutor">'.'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
						</table>
					</div>
		        </div>
		    </div>
    	</section>
	    <footer>
			<?php
				include '../modulos/footer.php';
			?>
	    </footer>
	</body>
</html>