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
				var agree= confirm("¿Quieres reutilizar este mensaje?");
				if (agree) {window.location="ReutilizarMensaje.php?id="+idmensaje; }
			}
			function VerMensaje(idmensaje) {
				var agree= confirm("¿Quieres ver este mensaje?");
				if (agree) {window.location="VerMensaje.php?id="+idmensaje; }
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
	                	<div class="container text-center">
							<form role="form" method="POST" action="GestionEnviar.php" class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<input type="text" name="busca"  type="text" id="busqueda" placeholder="Introduce la busqueda"/>
									<input type="submit" name="Submit" value="buscar" />
								</div>
								
							</form>
						</div>

						<?php
							$busca="";
							$busca=$_POST['busca'];
							if($busca!=""){
							  	$busqueda=mysqli_query("SELECT nombre, apellidos FROM tutor WHERE nombre, apellidos LIKE '%".$busca."%'");
							  	$result1 = mysqli_query($link, $busqueda);
							  	echo '<div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">';
								echo 	'<h2>Lista de mensajes</h2>';
								echo 	'<div class="table-responsive">';
								echo 		'<table class="table table-condensed">';
								echo 			'<thead>';
								echo 				'<tr>';
								echo 					'<th>ID</th>';
								echo 					'<th>Mensaje</th>';
								echo 					'<th>Autor</th>';
								echo 					'<th>Opciones</th>';
								echo 				'</tr>';
								echo 			'</thead>';
							  	while($registro = mysqli_fetch_array($result1)){
							  		echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
										echo '</tr>';
									echo '</tbody>';
									echo '</table>';
									echo '</div>';
									echo '</div>';
								}
							}else{
						?>
	                	<!-- Crea una tabla para mostrar la tabla mensaje-->
	                	<div class="table-responsive">
							<table class="table table-condensed" id="#jsondata">
								<thead>
									<tr>
										<th>ID</th>
										<th>Mensaje</th>
										<th>Autor</th>
										<th>Opciones</th>
									</tr>
								</thead>

							<?php
								$query = "SELECT * FROM mensaje";
								//$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, enviar.enviado, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje=enviar.mensaje_idmensaje INNER JOIN tutor ON tutor.idtutor=enviar.idtutor "; #Consulta que muestra los mensajes.
								$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$registro['idmensaje'].'</td>';
											echo '<td>'.$registro['texto'].'</td>';
											echo '<td>'.$registro['autor'].'</td>';

											//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
											echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="VerMensaje(this.id)" value="Ver Mensaje">'.'<input type="button" class="btn btn-danger" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar Mensaje">'.'</td>';
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
    	</section>
    	<!-- Footer del HTML -->
	    <footer>
			<?php
				include '../modulos/footer.php';
			?>
	    </footer>
	</body>
</html>