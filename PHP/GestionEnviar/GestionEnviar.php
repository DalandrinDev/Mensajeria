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
			function ReutilizarMensaje(idenviar) {
				var agree= confirm("¿Quieres reutilizar este mensaje?");
				if (agree) {window.location="ReutilizarMensaje.php?id="+idenviar; }
			}
		</script>
		<?php
			include '../modulos/head.php';
		?>
	</head>

	<body>
	    <nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#boton">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand light" href="../home.php"><span class="glyphicon glyphicon-envelope"></span>Mensajeria</a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="boton">
					<ul class="nav navbar-nav">
						<li><a href="#">Mensajes</a></li>
						<li><a href="../GestionTutores/GestionTutores.php">Tutores</a></li>
						<li><a href="../GestionUsuarios/GestionUsuarios.php">Usuarios</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Contiene la tabla entera de mensaje -->
	    <section id="usuarios" class="container content-section text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
		                <h2>Lista de mensajes</h2>
	                	<input type="button" class="btn btn-default" onclick="window.location.href = 'Mensaje.php';" value="Enviar Nuevo Mensaje">
	                	<!-- Crea una tabla para mostrar la tabla mensaje -->
	                	<div class="table-responsive">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th>ID</th>
										<th>Mensaje</th>
										<th>Fecha de creación</th>
										<th>Fecha de envio</th>
										<th>Nombre Tutor</th>
										<th>Enviado</th>
										<th>Autor</th>
										<th>Reutilizar Mensaje</th>
									</tr>
								</thead>

								<?php
									$query = "SELECT mensaje.idmensaje, mensaje.texto, enviar.fechacreacion, enviar.fechaenvio, enviar.enviado, tutor.nombre, mensaje.autor FROM mensaje LEFT JOIN enviar ON mensaje.idmensaje=enviar.mensaje_idmensaje INNER JOIN tutor ON tutor.idtutor=enviar.idtutor "; #Consulta que muestra los mensajes.
									$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

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

												//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
												echo '<td>'.'<input type="button" class="btn btn-warning" id='.$registro["idmensaje"].' onclick="ReutilizarMensaje(this.id)" value="Reutilizar Mensaje">'.'</td>';
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