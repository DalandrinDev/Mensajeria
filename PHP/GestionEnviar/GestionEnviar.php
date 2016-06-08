<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<script language="JavaScript">

			// Esta sirve para reutilizar el mensaje, y lo hace usando la idmensaje.
			function ReutilizarMensaje(idmensaje) {
				window.location="ReutilizarMensaje.php?id="+idmensaje;
			}
			
			// Esta sirve para ver el mensaje, y lo hace usando la idmensaje.
			function VerMensaje(idmensaje) {
				window.location="VerMensaje.php?id="+idmensaje;
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
		<!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container text-center separarmuytop">
	        <div class="row">
	            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
	                <h2>Lista de mensajes</h2>

	                <!-- Este es el boton para enviar un mensaje -->
                	<input type="button" class="btn btn-default" onclick="window.location.href = 'Mensaje.php';" value="Enviar Nuevo Mensaje">

                	<!-- Aqui empieza la parte del buscador -->
                	<div class="row">
	                	<div class="container text-center">
							<form role="form" method="POST" action="GestionEnviar.php">

							<!-- Este es el tamaño del buscador -->
								<div class="col-xs-12 col-sm-9 col-md-8 separartop">
										<input type="text" name="busca" class="form-control" type="text" id="busqueda" placeholder="Introduce la busqueda"/>
								</div>
							</form>
						</div>

						<!--Comienza el codigo php del buscador -->
						<?php
							$busca=""; // Crea una variable vacia para almacenar la busqueda
							$busca=isset($_POST['busca']) ? $_POST['busca']: NULL; // Impide que se muestre el mensaje de error de $busqueda esta sin definir
							if($busca!=""){

								# Hace una consulta a la base de datos a las tablas mensaje, enviar y tutor para buscar las coincidencias en las columnas texto, nombre y autor.
							  	$busqueda="SELECT mensaje.texto, tutor.nombre, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje = enviar.mensaje_idmensaje LEFT JOIN tutor ON tutor.idtutor=enviar.idtutor WHERE mensaje.texto LIKE '%".$busca."%' OR tutor.nombre LIKE '%".$busca."%' OR mensaje.autor LIKE '%".$busca."%'";
							  	$result1 = mysqli_query($link, $busqueda);
					  	?>		
					  			<!-- Crea una tabla condensada y con responsive design -->
									<h2>Lista de mensajes</h2>
									<div class="table-responsive">
										<table class="table table-condensed table-responsive">
											<thead>
												<tr>
													<th>Mensaje</th>
													<th>Tutor</th>
													<th>Autor</th>
												</tr>
											</thead>
								<?php
							  	
							  	while($registro1 = mysqli_fetch_array($result1)){
							  		echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro1['texto'].'</td>';
											echo '<td>'.$registro1['nombre'].'</td>';
											echo '<td>'.$registro1['autor'].'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
								?>
										</table>
								</div>

						<?php
							# Se abre de nuevo el codigo php para poder poner que pasaria si la condicion no se cumple
							}else{
						?>
	                	<!-- Crea una tabla para mostrar la tabla mensaje -->
	                	<div>
							<table class="table table-condensed table-responsive">
								<thead>
									<tr>
										<th>ID</th>
										<th>Mensaje</th>
										<th>F.creacion</th>
										<th>F.envio</th>
										<th>Autor</th>
										<th>Opciones</th>
									</tr>
								</thead>

							<?php

								# Esta consulta muestra la idmensaje, texto, fechacreacion, fechaenvio y el autor de las tablas mensaje y enviar.
								$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje=enviar.mensaje_idmensaje";
								$result = mysqli_query($link, $query); // Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								# Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										# En esta condicion indicamos que si la fecha de envio tiene como formato 0 en todas sus casillas significa que el mensaje está sin enviar, por lo tanto marcamos de color gris todos los mensajes que esten sin enviar.
										if ($registro['fechaenvio'] = '0000-00-00 00:00:00') {
											echo '<tr class="active">';
												echo '<td>'.$registro['idmensaje'].'</td>';
												echo '<td>'.substr($registro['texto'],0,70).'</td>'; // Solo se mostraran 70 caracteres, para que no se muestre todo el texto en la tabla
												echo '<td>'.$registro['fechacreacion'].'</td>';
												echo '<td>'.'Sin enviar'.'</td>'; // Pone el estado del envio sin enviar
												echo '<td>'.$registro['autor'].'</td>';

												# Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
												echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="VerMensaje(this.id)" value="Ver">'.'<div class="separardere separartop">'.'<input type="button" class="btn btn-danger" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar">'.'</div>'.'</td>';
										# En caso contrario se considera que el mensaje ha sido enviado, con lo cual las tablas se mostrarán de color verde y mostrarán la fecha del envio.
										}else{
											echo '<tr class="success">';
												echo '<td>'.$registro['idmensaje'].'</td>';
												echo '<td>'.substr($registro['texto'],0,70).'</td>';
												echo '<td>'.$registro['fechacreacion'].'</td>';
												echo '<td>'.$registro['fechaenvio'].'</td>';
												echo '<td>'.$registro['autor'].'</td>';

												# Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
												echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="VerMensaje(this.id)" value="Ver">'.'<div class="separardere separartop">'.'<input type="button" class="btn btn-danger" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar">'.'</div>'.'</td>';
										}
											echo '</tr>';
									echo '</tbody>';
								}
							}
							?>
							</table>
						</div>
						</div>
					</div>
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