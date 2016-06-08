<!-- Este es el archivo principal, donde siempre se inicia la página -->
<!DOCTYPE html>

<!-- Se introduce un php para conectarse a la base de datos y comprobar si hay alguien logeado -->
<?php
	include 'modulos/conectar.php'; // Esta linea llama al archivo que conecta el archivo a la base de datos.
	include 'modulos/comprobar.php'; // Esta linea llama al archivo que comprueba que se ha iniciado sesion.
?>
<html>
	<head>
		<?php
			include 'modulos/head.php'; // Esta linea llama al archivo que contiene todos los archivos externos.
		?>
		<!-- Llama al archivo CSS -->
		<link href="../Recursos/css/css.css" rel="stylesheet"> 
	</head>

	<body>
		<?php
			include 'modulos/navhome.php'; // Esta linea llama al achivo que contiene la barra de navegación de home.
		?>

		<!-- Aqui empieza el texto de home -->
		<section class="container text-center separarmuytop">
	        <div class="row">
	        <!-- Indica el numero de columnas que va a ocupar este div -->
	            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2"> 
                        <h1>Mensajería</h1>
                        <p>Esta aplicación permite enviar mensajes a una serie de usuarios a través de Telegram.<br>Creado por Daniel Ramírez Sánchez.</p>
                    </div>
                </div>
            </div>
	    </section>

	    <!-- Empieza el footer -->
	    <footer>
			<?php
				include 'modulos/footer.php'; // Esta linea llama al achivo que contiene el footer.
			?>
	    </footer>
	</body>
</html>
			