<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<?php
			include '../modulos/head.php';
		?>
	</head>

	<body>
	    <?php
			include '../modulos/nav.php';
		?>
		<!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
		                <h2>Información</h2>
	                	<div class="table-responsive">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th>ID</th>
										<th>Mensaje</th>
										<th>Creacion</th>
										<th>Envio</th>
										<th>Usuarios</th>
										<th>Enviado</th>
										<th>Autor</th>
									</tr>
								</thead>

							<?php
								$clavever = $_GET['id'];
								$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, tutor.nombre, enviar.enviado, mensaje.autor FROM mensaje LEFT JOIN enviar ON '$clavever' = enviar.mensaje_idmensaje INNER JOIN tutor ON tutor.idtutor=enviar.idtutor ORDER BY mensaje.idmensaje"; #Consulta que muestra los mensajes.
								//$query1 = "SELECT idmensaje, texto FROM mensaje WHERE idmensaje= '$clavever'";
								//$query2 = "SELECT fechacreacion, fechaenvio, enviado, FROM enviar WHERE idenviar= mensaje_idmensaje";
								$result = mysqli_query($link, $query);
								echo '$result';
								 #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['idmensaje'].'</td>';
											echo '<td>'.$registro['texto'].'</td>';
											echo '<td>'.$registro['fechacreacion'].'</td>';
											echo '<td>'.$registro['fechaenvio'].'</td>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['enviado'].'</td>';
											echo '<td>'.$registro['autor'].'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
							</table>
						</div>
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