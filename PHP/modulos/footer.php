<!-- Este archivo contiene el footer de la aplicacion, así es mas sencillo de cambiar -->
<div class="container text-center separartop">
    <!-- El tamaño de la fila -->
    <div class="col-xs-12 col-sm-9 col-md-8 col-md-offset-2">
        <?php
            # Muestra el nombre del usuario logeado
    		if ( $_SESSION['nombre']) {
        		echo "Has iniciado sesion como: ".$_SESSION['nombre']."";
    		}
    	?>
    </div>
</div>