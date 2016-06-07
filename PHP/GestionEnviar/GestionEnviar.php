<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
	<!-- Aqui se guardan los script de javaScript que vamos a utilizar -->
		<script language="JavaScript">

			//Esta sirve para reutilizar el mensaje, y lo hace usando la idenviar.
			function ReutilizarMensaje(idmensaje) {
				window.location="ReutilizarMensaje.php?id="+idmensaje;
			}
			function VerMensaje(idmensaje) {
				window.location="VerMensaje.php?id="+idmensaje;
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
		<!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
		                <h2>Lista de mensajes</h2>
	                	<input type="button" class="btn btn-default" onclick="window.location.href = 'Mensaje.php';" value="Enviar Nuevo Mensaje">
	                	<div class="row">
	                	<div class="container text-center">
							<form role="form" method="POST" action="GestionEnviar.php">
							<div class="col-xs-12 col-sm-9 col-md-8 separartop">
									<input type="text" name="busca" class="form-control" type="text" id="busqueda" placeholder="Introduce la busqueda"/>
								</div>
							</div>
							</form>
						</div>

						<?php
							$busca="";
							$busca=isset($_POST['busca']) ? $_POST['busca']: NULL;
							if($busca!=""){
							  	$busqueda="SELECT mensaje.texto, tutor.nombre, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje = enviar.mensaje_idmensaje LEFT JOIN tutor ON tutor.idtutor=enviar.idtutor WHERE mensaje.texto LIKE '%".$busca."%' OR tutor.nombre LIKE '%".$busca."%' OR mensaje.autor LIKE '%".$busca."%'";
							  	$result1 = mysqli_query($link, $busqueda);
							  	?>
									<h2>Lista de mensajes</h2>
									<div class="table-responsive">
										<table class="table table-condensed">
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
								</div>
							<?php
							}else{
						?>
	                	<!-- Crea una tabla para mostrar la tabla mensaje-->
	                	<div class="table-responsive">
							<table class="table table-condensed">
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
								//$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje = enviar.idenviar";
								$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje=enviar.mensaje_idmensaje"; #Consulta que muestra los mensajes.
								$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										if ($registro['fechaenvio'] = '0000-00-00 00:00:00') {
											echo '<tr class="active">';
												echo '<td>'.$registro['idmensaje'].'</td>';
												echo '<td>'.substr($registro['texto'],0,70).'</td>';
												echo '<td>'.$registro['fechacreacion'].'</td>';
												if ($registro['fechaenvio'] = '0000-00-00 00:00:00') {
													echo '<td>'.'Sin enviar'.'</td>';
												}else{
													echo '<td>'.$registro['fechaenvio'].'</td>';
												}
												echo '<td>'.$registro['autor'].'</td>';

												//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
												echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="VerMensaje(this.id)" value="Ver">'.'<div class="separardere separartop">'.'<input type="button" class="btn btn-danger" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar">'.'</div>'.'</td>';
										}else{
											echo '<tr class="success">';
												echo '<td>'.$registro['idmensaje'].'</td>';
												echo '<td>'.substr($registro['texto'],0,70).'</td>';
												echo '<td>'.$registro['fechacreacion'].'</td>';
												if ($registro['fechaenvio'] = '0000-00-00 00:00:00') {
													echo '<td>'.'Sin enviar'.'</td>';
												}else{
													echo '<td>'.$registro['fechaenvio'].'</td>';
												}
												echo '<td>'.$registro['autor'].'</td>';

												//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
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
				include '../modulos/footer.php';
			?>
	    </footer>
	</body>
</html>