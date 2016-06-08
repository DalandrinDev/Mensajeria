<!-- Archivo modular para la navegacion de la aplicacion -->
<!-- Aqui empieza la barra de navegacion, esta sigue al usuario cuando hace scroll hacia abajo -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<!-- Aquí se colocan las imagenes que formarán el "menu hamburguesa" -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#boton">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- El itulo de la aplicacion con la imagen -->
		<a class="navbar-brand light" href="../home.php"><span class="glyphicon glyphicon-home"></span>-Mensajeria</a>
		</div>
		<!-- Cada una de las direcciones con sus imagenes correspondientes -->
		<div class="collapse navbar-collapse navbar-right" id="boton">
			<ul class="nav navbar-nav">
				<li><a class="glyphicon glyphicon-envelope light" href="../GestionEnviar/GestionEnviar.php">-Mensajes</a></li>
				<li><a class="glyphicon glyphicon-phone light" href="../GestionTutores/GestionTutores.php">-Tutores</a></li>
				<li><a class="glyphicon glyphicon-user light" href="../GestionUsuarios/GestionUsuarios.php">-Usuarios</a></li>
				<li><a class="glyphicon glyphicon-ban-circle light" href="../modulos/cerrarsesion.php">-Cerrar-Sesión</a></li>
			</ul>
		</div>
	</div>
</nav>