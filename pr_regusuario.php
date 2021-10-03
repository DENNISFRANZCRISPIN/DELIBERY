<?php
include ("funciones.php");
$conex=conectar();
//primero se recupera los datos
  $nombre=$_GET['nom'];
  $celu=$_GET['cel'];
  $direccion=$_GET['dir'];
  $nitt=$_GET['nit'];
  $clave=substr($nombre, -3).$celu;
 


  $insertar=mysql_query("INSERT INTO clientes (codigo,nombre, telefono, nit, direccion) VALUES ('$clave','$nombre','$celu','$direccion','$nitt')");

  echo $clave;




?>
