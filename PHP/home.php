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

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">	
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#boton">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand light" href="#"><span class="glyphicon glyphicon-envelope"></span>Mensajeria</a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="boton">
					<ul class="nav navbar-nav">
						<li><a href="GestionEnviar/GestionEnviar.php">Mensajes</a></li>
						<li><a href="GestionTutores/GestionTutores.php">Tutores</a></li>
						<li><a href="GestionUsuarios/GestionUsuarios.php">Usuarios</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="home" class="container content-section text-center">
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
			