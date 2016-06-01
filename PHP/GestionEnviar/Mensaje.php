<!--Es un formulario donde se almacenará el mensaje y se enviará pormetodo POST a EnviarMensaje.php-->
<!DOCTYPE html>
<?php
	include '../modulos/conectar.php';
	include '../modulos/comprobar.php';
?>
<html>
	<head>
		<script>
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
			include '../modulos/head.php';
		?>
	</head>
	<body>
		<div class="container content-section text-center">
			<article class="row">
				<!-- Aquí empieza el formulario -->
				<form role="form" method="POST" action="EnviarMensaje.php" onsubmit="return validate()">
					<!-- Esta es la parte donde se escribe el mensaje a enviar -->
						<div class="col-xs-12 col-sm-9 col-md-6">
							<h2>Mensaje</h2>
							<!-- Esta linea indicará en todo momento el Autor del mensaje -->
							<?php
								echo "<p>El mensaje será firmado por: {$_SESSION['nombre']}</p>";
							?>
							<p id="info"></p>
							<textarea class="form-control" maxlength="160" rows="6" cols="30" id="texto" name="texto" onkeypress="return limita(event, 160);" onkeyup="actualizaInfo(160)" required></textarea>
							
							<!-- Botones de navegación -->
							<button type="submit" class="btn btn-default">Enviar</button>
							<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
						</div>
					<!-- Esta es la parte donde se selecciona a los tutores -->
					<div class="col-xs-12 col-sm-9 col-md-6">
						<h3>Selecciona los Tutores:</h3>
						<?php
							$query ="SELECT * FROM tutor"; #Selecciona a todos los tutores.
							$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

							#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
							while ($registro = mysqli_fetch_array($result)) {
								
									echo "<div class='checkbox' id='name'>";
  										echo "<label><input type='checkbox' class='nombre' name='contacto_".$registro['idtutor']."' value='".$registro['idtutor']."'>".$registro['nombre']."</label>";
									echo "</div>";
							}
						?>
						<input type="checkbox" id="marcar">Seleccionar Todos</input>
					</div>
				</form>
			</article>
		</div>
	    <footer>
			<?php
				include '../modulos/footer.php';
			?>
	    </footer>
	    <script>
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