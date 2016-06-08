<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<?php
			include '../modulos/head.php'; // Esta linea llama al archivo que contiene todos los archivos externos
		?>
	</head>

	<body>
	    <?php
			include '../modulos/nav.php'; // Esta linea llama al achivo que contiene la barra de navegación
		?>
		<!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container text-center separarmuytop">
	        <div class="row">
	            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
	                <h2>Información</h2>
					<table class="table table-condensed table-responsive">
						<thead>
							<tr>
								<th>Mensaje</th>
								<th>Tutor</th>
								<th>Enviado</th>
							</tr>
						</thead>

					<?php
						$clavever = $_GET['id'];
						$query = "SELECT * FROM mensaje LEFT JOIN enviar ON $clavever = enviar.mensaje_idmensaje LEFT JOIN tutor ON tutor.idtutor = enviar.idtutor WHERE $clavever = mensaje.idmensaje"; // Consulta que muestra los mensajes.
						$result = mysqli_query($link, $query); // Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

						# Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
						while ($registro = mysqli_fetch_array($result)) {
							echo '<tbody>';
								# Si el registro de enviado es 1 se marca de color verde toda la fila y pone que está enviado
								if ($registro['enviado'] != '0') {
									echo '<tr class="success">';
										echo '<td>'.$registro['idmensaje'].'</td>';
										echo '<td>'.$registro['nombre'].'</td>';
										echo '<td>'.'Enviado'.'</td>';
								}else {
								# Por el contrario el mensaje está como no enviado y se marca de color gris
									echo '<tr class="active"">';
										echo '<td>'.$registro['idmensaje'].'</td>';
										echo '<td>'.$registro['nombre'].'</td>';
										echo '<td>'.'Sin enviar'.'</td>';
									}
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