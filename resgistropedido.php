<?php
include ("funciones.php");
$conex=conectar();
//primero se recupera los datos
  $pro=$_GET['codpro'];
  $cli=$_GET['codcli'];
  $cant=$_GET['cantidad'];
  $total=0;

  $cosultadatos=mysql_query("SELECT * FROM productos WHERE codigo=$pro ");
  while ( $filal=mysql_fetch_array($cosultadatos)) {

  	$totis=$filial[4];

};
 $total=$totis*$cant;
 


  $insertar=mysql_query("INSERT INTO pedido (codigo, codpro, codcli, fecha, estado, cantidad, total) VALUES (NULL,$pro, '$cli', CURRENT_TIMESTAMP, 'no', '$cant', '$total')");



  echo "el pedido fue exitoso registrado exitosamente";




?>
