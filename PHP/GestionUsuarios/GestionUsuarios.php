<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
		<?php
			include '../modulos/head.php';
		?>
	</head>

	<body>
		<?php
			include '../modulos/nav.php';
		?>
	    <section id="usuarios" class="container text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-1 col-md-offset-5">
		                <h2>Usuarios</h2>     
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellidos</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM usuario";
								$result = mysqli_query($link, $query);
								/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
								y los coloque en la tabla que hemos creado anteriormente*/
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['idusuario'].'</td>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
						</table>
					</div>
		        </div>
		    </div>
    	</section>
    	<!-- Footer del HTML -->
	    <footer>
			<?php
				include '../modulos/footer.php';
			?>
	    </footer>
	</body>
</html>