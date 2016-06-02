<!DOCTYPE html>
<?php
	include 'modulos/conectar.php';
	include 'modulos/comprobar.php';
?>
<html>
	<head>
		<?php
			include 'modulos/head.php';
		?>
		<link href="../Recursos/css/grayscale.css" rel="stylesheet">
	</head>

	<body>	
		<?php
			include '/modulos/navhome.php';
		?>
		<section class="container text-center">
	    	<div class="seccion-home">
		        <div class="row">
		            <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2"> 
	                        <h1 class="brand-heading">Mensajería</h1>
	                        <p class="intro-text">Esta aplicación permite enviar mensajes a una serie de usuarios a través de Telegram.<br>Creado por Daniel Ramírez Sánchez.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <footer>
			<?php
				include 'modulos/footer.php';
			?>
	    </footer>
	</body>
</html>
			