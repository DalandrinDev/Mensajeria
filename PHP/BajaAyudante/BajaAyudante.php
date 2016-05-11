<!--Formulario para eliminar usuario
<!DOCTYPE html>
<?php
	//include "../comprobar.php";
?>
<html>
	<body>
		<form class="form" action="BusquedaBajaAyudante.php" method="post">
		Buscar:<input type="text" name="busqueda">
  		</form>
	</body>
</html>-->
<html>
<head>
<title>Buscador simple en PHP</title>
</head>
<body>
<form action="BajaAyudante.php" method="post">
Buscar: <input name="palabra">
<input type="submit" name="buscador" value="Buscar">
</form>
<?
if ($_POST[‘buscador’])
{
// Tomamos el valor ingresado
$buscar = $_POST[‘palabra’];

// Si está vacío, lo informamos, sino realizamos la búsqueda
if(empty($buscar))
{
echo "No se ha ingresado una cadena a buscar";
}else{
// Conexión a la base de datos y seleccion de registros
$con=mysqli_connect("localhost","admin","uned");
$sql = "SELECT * FROM admin WHERE nombre like ‘%$buscar%’ ORDER BY id DESC";
mysqli_select_db("mensajeria", $con);

$result = mysqli_query($sql, $con);

// Tomamos el total de los resultados
$total = mysqli_num_rows($result);

// Imprimimos los resultados
if ($row = mysqli_fetch_array($result)){
echo "Resultados para: <b>$buscar</b>";
do {
?>
<p><b><a href="noticia.php?id=<?=$row[‘id’];?>"><?=$row[‘nombre’];?></a></b></p>
<?
} while ($row = mysql_fetch_array($result));
echo "<p>Resultados: $total</p>";
} else {
// En caso de no encontrar resultados
echo "No se encontraron resultados para: <b>$buscar</b>";
}
}
}
?>
</body>
</html>