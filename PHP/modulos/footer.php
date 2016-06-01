<div class="container text-center">
    <?php
    	echo '<br>';
    	echo '<br>';
		if ( $_SESSION['nombre']) {
    		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
    		echo '<br>';
    		echo '<br>';
    		echo "<a type='button' class='btn btn-danger' href='../modulos/cerrarsesion.php'>Cerrar sesion</a>";
		}
	?>
	<br>
	<br>
    <p>Copyright &copy; UNED-MELILLA</p>
</div>