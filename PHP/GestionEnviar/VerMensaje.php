<!DOCTYPE html>
<html>
	<head>
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
	    <section id="usuarios" class="container content-section text-center">
	    	<div class="panel-group">
		    	<div class="panel panel-default">
	      			<div class="panel-heading">Información del mensaje</div>
		      			<?php
	      					include '../conectar.php';
							$query = "SELECT * FROM enviar";
							$result = mysqli_query($link, $query);
							while ($registro = mysqli_fetch_array($result)) {
								echo '<div class="panel-body">';
								echo '<tr>';
								echo '<td>'.$registro['idenviar'].'</td>';
								echo '<td>'.$registro['texto'].'</td>';
								echo '<td>'.$registro['fechaenvio'].'</td>';
								echo '<td>'.$registro['idtutor'].'</td>';
								echo '<td>'.$registro['autor'].'</td>';
								echo '<td>'.$registro['enviado'].'</td>';
								echo '<tr>';
								echo '</div>';
							}
						?>
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