<div class="container text-center">
    <?php
		if ( $_SESSION['nombre']) {
    		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
    		echo "<br>";
    		echo "<a href='modulos/cerrarsesion.php'>Cerrar sesion</a>";
		}
	?>
    <p>Copyright &copy; UNED-MELILLA</p>
</div>