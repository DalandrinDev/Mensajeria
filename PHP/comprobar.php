<!--Este archivo no sirve, de momento-->
<?php
	if (! empty($_SESSION['nombre'])) {
	}else{
		header("Location: index.html");
	}
?>