<!-- Este fichero se encarga de unificar toda la gestion de usuarios -->
<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
		<?php
			include '../modulos/head.php'; // Esta linea llama al archivo que contiene todos los archivos externos.
		?>
	</head>

	<body>
		<?php
			include '../modulos/nav.php'; // Esta linea llama al achivo que contiene la barra de navegación
		?>
	    <section id="usuarios" class="container text-center separarmuytop">
	        <div class="row">
	        <!-- Es el tamaño de la fila -->
	            <div class="col-xs-12 col-sm-9 col-md-1 col-md-offset-5">
	                <h2>Usuarios</h2>
	                <!-- Crea la tabla que contendrá la informacion de los usuarios -->
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
							
							# Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente
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
    	</section>

    	<!-- Footer del HTML -->
	    <footer>
			<?php
				include '../modulos/footer.php'; // Esta linea llama al achivo que contiene el footer.
			?>
	    </footer>
	</body>
</html>