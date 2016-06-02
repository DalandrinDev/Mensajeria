<div class="container text-center">
	<form role="form" method="POST" action="#buscador.php" class="col-md-4 col-md-offset-4">
		<div class="form-group">
			<input type="text" placeholder="Introduce la busqueda"/>
		</div>
		<input name="busca"  type="text" id="busqueda">
		<input type="submit" name="Submit" value="buscar" />
	</form>
</div>

<?php
	$busca="";
	$busca=$_POST['busca'];
	if($busca!=""){
	  	$busqueda=mysql_query("SELECT nombre, apellidos FROM tutor WHERE nombre, apellidos LIKE '%".$busca."%'");
	  	echo '<div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">';
		echo 	'<h2>Lista de mensajes</h2>';
		echo 	'<div class="table-responsive">';
		echo 		'<table class="table table-condensed">';
		echo 			'<thead>';
		echo 				'<tr>';
		echo 					'<th>ID</th>';
		echo 					'<th>Mensaje</th>';
		echo 					'<th>Autor</th>';
		echo 					'<th>Opciones</th>';
		echo 				'</tr>';
		echo 			'</thead>';
	  	while($registro = mysql_fetch_array($busqueda)){
	  		echo '<tbody>';
				echo '<tr>';
					echo '<td>'.$registro['nombre'].'</td>';
					echo '<td>'.$registro['apellidos'].'</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</div>';
			echo '</div>';
		}
	}
?>