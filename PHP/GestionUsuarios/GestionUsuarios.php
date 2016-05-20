<!DOCTYPE html>
<?php
	include '../conectar.php';
	session_start();
?>
<html>
	<head>
		<script language="JavaScript">
			function EliminarUsuario(claveusuarios) {
				var agree=confirm("¿Quieres eliminar este usuario?");
				if (agree) {window.location="EliminarUsuario.php"}
			}

			function ModificarUsuario(claveusuarios) {
				var agree= confirm("¿Quieres modificar este usuario?");
				if (agree) {window.location="ModificarUsuario.php"}
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
	                        <a href="../GestionTutores/GestionTutores.php">Tutores</a>
	                    </li>
	                    <li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistema</a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Usuarios</a></li>
					          <li><a href="#">Opción 1</a></li>
					          <li><a href="#">Opción 2</a></li>
					        </ul>
						</li>
	                </ul>
	            </div>
	            
	        </div>
	    </nav>
	    <section id="usuarios" class="container content-section text-center">
	    	<div class="seccion-usuario">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2">
		                <h2>Usuarios</h2>     
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Contraseñas</th>
									<th>Eliminar</th>
									<th>Modificar</th>
								</tr>
							</thead>

							<?php
								$query = "SELECT * FROM usuarios";
								$result = mysqli_query($link, $query);
								/*Este bucle hace que por cada registro de la consulta se almacenen los datos en la variable $registro
								y los coloque en la tabla que hemos creado anteriormente*/
								while ($registro = mysqli_fetch_array($result)) {
									echo '<tbody>';
										echo '<tr>';
											echo '<td>'.$_SESSION['idusuarios']=$registro['claveusuarios'].'</td>';
											echo '<td>'.$registro['nombre'].'</td>';
											echo '<td>'.$registro['apellidos'].'</td>';
											echo '<td>'.$registro['contrasena'].'</td>';
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
						<input type="button" class="btn btn-default" onclick="window.location.href = 'GestionUsuarios/AgregarUsuario.php';" value="Ingresar Usuario">
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