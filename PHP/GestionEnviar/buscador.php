<script language="JavaScript">
function Borra(idcliente)
{
var agree=confirm("¿Realmente desea eliminar el cliente seleccionado?");
if (agree) { document.location="eliminar.php?id="+idcliente; }
else return false ;
}
</script>
<style type="text/css">
body p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
<form name="form1" method="post" action="buscador.php" id="cdr" >
  <h3>Buscar Cliente  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
      </p>
</form>
 <p>
  <style type="text/css">
input{outline:none;border:0px;}
#busqueda{background:#585858;color:#fff;}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}
</style>
   
  <?php
$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("administracion");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM clientes WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Id </td>
     <td width="61">Cif</td>
     <td width="157">Nombre</td>
     <td width="221">Direccion</td>
     <td width="176">Poblacion</td>
     <td width="73">Cp</td>
     <td width="118">Provincia</td>
     <td width="103">Actividad</td>
     <td width="67">Email</td>
     <td width="107">Telefono</td>
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="19">'.$f['id_cliente'].'</td>';
echo '<td width="61">'.$f['cif'].'</td>';
echo '<td width="157">'.$f['nombre'].'</td>';
echo '<td width="221">'.$f['direccion'].'</td>';
echo '<td width="176">'.$f['poblacion'].'</td>';
echo '<td width="73">'.$f['cp'].'</td>';
echo '<td width="118">'.$f['provincia'].'</td>';
echo '<td width="103">'.$f['actividad'].'</td>';
echo '<td width="67">'.$f['email'].'</td>';
echo '<td width="107">'.$f['telefono'].'</td>';
echo  '<td>'.'<input type="button" onclick="Borra('.$f['id_cliente'].')" value="Borrar cliente">'.'</td>';
echo '<td>'.'<a href="#">'.'Modificar'.'</a>'.'</td>';
echo '</tr>';
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}
?>
</table>
<p>&nbsp;</p>
<p align="center"><a href="clientes.php" onclick="return confirm('¿Realmente deseas eliminar este articulo?')">Volver</a></p>
<p align="center"><a href="registro.php">Registrar nuevos clientes</a></p>
<p align="center"><a href="perfil.php" >Perfil</a></p>
