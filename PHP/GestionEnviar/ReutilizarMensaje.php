<!--No funciona-->
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
		<div class="container text-center">
			<article class="row">
				<div class="col-xs-12 col-sm-9 col-md-2 col-md-offset-5">
				<!-- Aquí empieza el formulario -->
					<form role="form" method="POST" action="EnviarReutilizarMensaje.php">
					<!-- Esta es la parte donde se selecciona a los tutores -->
					
						<h3>Selecciona los Tutores:</h3>
						<div class="checkbox">
							<?php
								echo "<p>El mensaje será firmado por: {$_SESSION['nombre']}</p>";
								$_SESSION['clavemensaje']=$_GET['id'];
								$query ="SELECT * FROM tutor"; #Selecciona a todos los tutores.
								$result = mysqli_query($link, $query); #Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

								#Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro y los coloque en la tabla que hemos creado anteriormente.
								while ($registro = mysqli_fetch_array($result)) {
										echo "<div class='checkbox'>";
	  										echo "<label><input type='checkbox' class='nombre' name='contacto_".$registro['idtutor']."' value='".$registro['idtutor']."'>".$registro['nombre']."</label>";
										echo "</div>";
								}

							?>
							<th><input type="checkbox" id="marcar"/>Marcar todas</th>
						</div>
						<button type="submit" class="btn btn-default">Enviar</button>
						<br><br>
						<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
					</form>
				</div>
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