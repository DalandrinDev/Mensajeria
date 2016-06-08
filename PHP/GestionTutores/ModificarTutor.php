<!--Archivo que se encarga de almacenar los datos para agregar a un nuevo tutor a la base de datos-->
<!DOCTYPE html>
<?php
	include '../modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include '../modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
		<?php
			include '../modulos/head.php'; // Esta linea llama al archivo que contiene todos los archivos externos.

			# Usando la ID del tutor que se ha seleccionado coge los datos de la base de datos de la tabla tutor y las guarda en variables para usar los resultados dentro de cada uno de los campos del formulario
			$clavetutor = $_GET['id'];
			$query1 = "SELECT nombre, apellidos, alias FROM tutor WHERE idtutor = '$clavetutor'";
			$result1 = mysqli_query($link, $query1);
			while ($registro1 = mysqli_fetch_array($result1)) {
				$var1=$registro1['nombre'];
				$var2=$registro1['apellidos'];
				$var3=$registro1['alias'];
			}
		?>
		
	</head>
	<body>
		<?php
			include '../modulos/nav.php'; // Esta linea llama al achivo que contiene la barra de navegación
		?>
		<div class="container text-center separarmuytop">

			<!-- Aquí empieza el formulario -->
			<form role="form" method="POST" name="form3" action="EnviarModificarTutor.php" class="col-md-4 col-md-offset-4">
			<h3>Modificar Tutor</h3>

				<!-- Nombre del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" value="<?php echo ($var1); // introduce el nombre desde la base de datos ?>" pattern="^[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Apellidos del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="apellidos" placeholder="Introduce los apellidos" value="<?php echo $var2; // introduce el apellido desde la base de datos ?>" pattern="[a-zA-Zñ ]+[a-zA-Zñ]{1,15}" required>
				</div>

				<!-- Alias del tutor -->
				<div class="form-group">
					<input type="text" class="form-control" name="alias" placeholder="Introduce el alias de Telegram" value="<?php echo $var3; // introduce el alias desde la base de datos ?>" pattern="^@[A-Za-z0-9_-]{1,15}$" required>
				</div>

				<!-- Facultad del tutor -->
				<div class="form-group">
					<select class='form-control' name="facultad">
						<?php
							$_SESSION['idmodificar']=$_GET['id'];
							$query ="SELECT * FROM facultad"; //Selecciona todas las tablas de la tabla facultad
							$result = mysqli_query($link, $query); //Ejecuta la consulta, el $link sale del archivo conectar.php y contiene toda la conexión a la base de datos.

							//Este bucle permite recorrer la consulta y que muestre cada elemento, para poder seleccionarlo.
							while ($registro = mysqli_fetch_array($result)) {
									echo "<option value='".$registro['idfacultad']."'>".$registro['facultad']."</option>";
							}
						?>
					</select>
				</div>

				<!-- Boton de modificar tutor y de volver atras -->
				<button type="submit" class="btn btn-default" onclick="if(confirm('¿Esta seguro de que quiere modificar el tutor?') == false){return false;}">Modificar</button>
				<input type="button" class="btn btn-danger" onclick="window.history.back();" value="Volver atras">
			</form>
		</div>

		<!-- Footer del HTML -->
	    <footer>
			<?php
				include '../modulos/footer.php'; // Esta linea llama al achivo que contiene el footer.
			?>
	    </footer>
	</body>
</html>