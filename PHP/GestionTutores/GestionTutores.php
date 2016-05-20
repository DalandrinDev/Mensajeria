<<<<<<< HEAD
<!DOCTYPE html>
<?php
	include '../conectar.php';
	session_start();
?>
<html>
	<head>
		<script language="JavaScript">
			function EliminarTutor(clavetutores) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="GestionTutores/EliminarTutor.php";}
			}

			function ModificarTutor(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="GestionTutores/ModificarTutor.php"; }
			}
		</script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mensajeria - Home</title>

		<!-- Bootstrap Core CSS -->
	    <link href="../../Recursos/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="../../Recursos/css/grayscale.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<!-- Navigation -->
	    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand page-scroll" href="../home.php">
	                    <span class="glyphicon glyphicon-envelope"></span><span class="light">Mensajeria</span>
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a href="../GestionEnviar/GestionEnviar.php">Mensajes</a>
	                    </li>
	                    <li>
	                        <a href="#">Tutores</a>
	                    </li>
	                    <li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistema</a>
					        <ul class="dropdown-menu">
					          <li><a href="../GestionUsuarios/GestionUsuarios.php">Usuarios</a></li>
					          <li><a href="#">Opción 1</a></li>
					          <li><a href="#">Opción 2</a></li>
					        </ul>
						</li>
	                </ul>
	            </div>
	            
	        </div>
	    </nav>
	    <section id="tutores" class="container content-section text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <h2>Tutores</h2>     
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Alias</th>
									<th>Facultad</th>
									<th>Modificar</th>
									<th>Eliminar</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM tutores";
								$result = mysqli_query($link, $query);
								/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
								y los coloque en la tabla que hemos creado anteriormente*/
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td width="150">'.$_SESSION['idtutores']=$registro['clavetutores'].'</td>';
											echo '<td width="150">'.$_SESSION['nombretutor']=$registro['nombre'].'</td>';
											echo '<td width="150">'.$registro['apellidos'].'</td>';
											echo '<td width="150">'.$registro['alias'].'</td>';
											echo '<td width="150">'.$registro['facultad'].'</td>';
											//Estos son los dos botones que al pulsar sobre ellos activan las funciones de JavaScript de arriba
											echo '<td>'.'<input type="button" class="btn btn-danger" onclick="EliminarUsuario()" value="Eliminar Usuario">'.'</td>';
											echo '<td>'.'<input type="button" class="btn btn-warning" onclick="ModificarUsuario()" value="Modificar Usuario">'.'</td>';
										echo '</tr>';
									echo '</tbody>';
								}
							?>
						</table>
					</div>
					<div class="col-lg-8 col-lg-offset-2">
						<input type="button" class="btn btn-default" onclick="window.location.href = '../GestionTutores/AgregarTutor.php';" value="Nuevo Tutor">
					</div>
		        </div>
		    </div>
    	</section>
    	<footer>

	        <div class="container text-center">
		        <?php
					if ( $_SESSION['nombre']) {
			    		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
			    		//echo "<a href='CerrarSesion.php'>Cerrar sesion</a>";
					}
				?>
	            <p>Copyright &copy; UNED-MELILLA</p>
	        </div>
	    </footer>

	    <script src="../../Recursos/js/jquery.js"></script>
	    <script src="../../Recursos/js/bootstrap.min.js"></script>
		<script src="../../Recursos/js/jquery.easing.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		<script src="../../Recursos/js/grayscale.js"></script>
	</body>
</html>
=======
<!--Archivo principal que muestra todos los tutores idsponibles y permite gestionarlos-->
<!DOCTYPE html>
	<head>
		<script language="JavaScript">
			function Eliminar(clavetutores) {
				var agree=confirm("¿Quieres eleminar este tutor?");
				if (agree) {window.location="EliminarTutor.php?id="+clavetutores; }
			}

			function Modificar(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="EnviarModificarTutor.php?id="+clavetutores; }
			}
			
			function Enviar(clavetutores) {
				var agree= confirm("¿Quieres modificar este tutor?");
				if (agree) {window.location="EnviarMensaje.php?id="+clavetutores; }
			}
		</script>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../Recursos/Css/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../../Recursos/js/script.js"></script>
		<title>Mensajeria</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='../home.php'><span>Inicio</span></a></li>
				<li><a href='#'><span>Gestionar Tutores</span></a></li>
				<li><a href='../GestionMensajes/GestionMensajes.php'><span>Gestionar Mensajes</span></a></li>
				<li><a href='../GestionEnvios/GestionEnvios.php'><span>Gestionar Envios</span></a></li>
				<li class='last'><a href='../GestionUsuarios/GestionUsuario.php'><span>Gestionar Usuarios</span></a></li>
			</ul>
		</div>
		<div align='center'> 
			<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
				<tr> 
					<td width="150" style='font-weight: bold'>ID</td> 
					<td width="150" style='font-weight: bold'>Nombre</td> 
					<td width="150" style='font-weight: bold'>Apellidos</td> 
					<td width="150" style='font-weight: bold'>Alias</td> 
					<td width="150" style='font-weight: bold'>Facultad</td>
					<td width="150" style='font-weight: bold'>Eliminar</td>
					<td width="150" style='font-weight: bold'>Modificar</td>
					<td width="150" style='font-weight: bold'>Enviar Mensaje</td>
				</tr>

				<?php
					include '../conectar.php';
					$query = "SELECT * FROM tutores";
					$result = mysqli_query($link, $query);
					while ($registro = mysqli_fetch_array($result)) {
						echo '<tr>';
							echo '<td width="150">'.$registro['clavetutores'].'</td>';
							echo '<td width="150">'.$registro['nombre'].'</td>';
							echo '<td width="150">'.$registro['apellidos'].'</td>';
							echo '<td width="150">'.$registro['alias'].'</td>';
							echo '<td width="150">'.$registro['facultad'].'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Eliminar(this.id)" value="Eliminar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Modificar(this.id)" value="Modificar Tutor">'.'</td>';
							echo '<td width="150">'.'<input type="button" id='.$registro["clavetutores"].' onclick="Enviar(this.id)" value="Enviar Mensaje">'.'</td>';
						echo '</tr>';
					}
				?>
			</table>
		</div>
		<a href="AgregarTutor.php">Agregar Tutor</a>

		<?php
			include '../GestionMensajes/Mensaje.php';
		?>
		<a href="javascript:window.history.back();">&laquo; Volver atras</a>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../../recursos/js/main.js"></script>
		<script type="text/javascript" src="../../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
