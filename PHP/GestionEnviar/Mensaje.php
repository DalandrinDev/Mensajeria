<!-- Es un formulario donde se almacenará el mensaje y se enviará por metodo POST a EnviarMensaje.php -->
<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
		<!-- Aqui se ponen los scripts de JavaScript -->
		<script type="text/javascript">
			// Esta funcion se encarga de limitar el numero de caracteres que se puede usar dentro del cuadro de texto
			function limita(elEvento, maximoCaracteres) {
			  var elemento = document.getElementById("texto");

			  // Obtener la tecla pulsada 
			  var evento = elEvento || window.event;
			  var codigoCaracter = evento.charCode || evento.keyCode;

			  // Permitir utilizar las teclas con flecha horizontal
			  if(codigoCaracter == 37 || codigoCaracter == 39) {
			    return true;
			  }

			  // Permitir borrar con la tecla Backspace y con la tecla Supr.
			  if(codigoCaracter == 8 || codigoCaracter == 46) {
			    return true;
			  }
			  else if(elemento.value.length >= maximoCaracteres ) {
			    return false;
			  }
			  else {
			    return true;
			  }
			}

			// Esta funcion muestra en todo momento los caracteres que están disponibles
			function actualizaInfo(maximoCaracteres) {
			  var elemento = document.getElementById("texto");
			  var info = document.getElementById("info");

			  if(elemento.value.length >= maximoCaracteres ) {
			    info.innerHTML = "Maximo "+maximoCaracteres+" caracteres";
			  }
			  else {
			    info.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
			  }
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
		<div class="container text-center separarmuytop">
			<article class="row">

				<!-- Aquí empieza el formulario -->
				<form role="form" method="POST" name="form1" action="EnviarMensaje.php" onsubmit="return validate()">

					<!-- Esta es la parte donde se escribe el mensaje a enviar -->
						<div class="col-xs-12 col-sm-9 col-md-6">
							<h2>Mensaje</h2>

							<!-- Esta linea indicará en todo momento el Autor del mensaje -->
							<?php
								echo "<p>El mensaje será firmado por: {$_SESSION['nombre']}</p>";
							?>

							<!-- Este es el cuadro del texto, tiene la id para enviarla a la funcion y saber el numero de caracteres escritos -->
							<p id="info"></p>
							<textarea class="form-control" maxlength="160" rows="6" cols="30" id="texto" name="texto" onkeypress="return limita(event, 160);" onkeyup="actualizaInfo(160)" required></textarea>
							
							<!-- Botones de navegación -->
							<button type="submit" class="btn btn-default separartop" onclick="if(confirm('¿Esta seguro de que quiere enviar este mensaje?') == false){return false;}"">Enviar Mensaje</button>
							<input type="button" class="btn btn-danger separartop" onclick="window.history.back();" value="Volver atras">
						</div>

					<!-- Esta es la parte donde se selecciona a los tutores -->
					<div class="col-xs-12 col-sm-9 col-md-6">
						<div class="mentuto">
						<h3>Selecciona los Tutores:</h3>
						<?php
							$query ="SELECT * FROM tutor"; // Selecciona a todos los tutores.
							$result = mysqli_query($link, $query); // Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

							#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
							while ($registro = mysqli_fetch_array($result)) {
								
									echo "<div class='checkbox' id='name'>";
  										echo "<label><input type='checkbox' class='nombre' name='contacto_".$registro['idtutor']."' value='".$registro['idtutor']."'>".$registro['nombre']."</label>";
									echo "</div>";
							}
						?>
						<input type="checkbox" id="marcar">Seleccionar Todos</input>
						</div>
					</div>
				</form>
			</article>
		</div>
	    <footer>
			<?php
				include '../modulos/footer.php'; // Esta linea llama al achivo que contiene el footer.
			?>
	    </footer>
	    <script>
	    	// Esta es una funcion con JQuery que sirve para seleccionar a la vez todos los tutores a los que se les quiere enviar el mensaje
	    	$(function(){
				$("#marcar").click(function(){
					$('.nombre').attr('checked',this.checked);
				});
				$(".nombre").click(function(){
					if($(".nombre").length==$(".nombre:checked").length){
						$("#marcar").attr("checked","checked");
					}else{
						$("#marcar").removeAttr("checked");
					}
				});
			});
	    </script>
	</body>
</html>