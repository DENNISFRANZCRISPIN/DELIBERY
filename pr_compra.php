


<?php
include ("funciones.php");
$conex=conectar();
//primero se recupera los datos
 

$cod = $_GET['codrop'];




$cant=$_GET['cantida'];
$tot=$_GET['total'];
$celu=$_GET['cel'];
$nombre=$_GET['nom'];
$codcata=$_GET['catego'];

$CANEXIS=$_GET['CANTIIEX'];

 $numeross=rand(2,1000);

 $claveto=substr($nombre, -3).$celu.$numeross;




$totitoti=$CANEXIS-$cant;

//echo"$totitoti";





$insertar=mysql_query("INSERT INTO tb_cliente(Codigocli, Nombre, Numero) VALUES ('$claveto','$nombre','$celu')");

echo"INSERT INTO tb_cliente(Codigocli, Nombre, Numero) VALUES ('$claveto','$nombre','$celu')<br>INSERT INTO tb_venta(cod_cat, cod_ropa, codigo_cli, Cantidad, preciotot, descuento) VALUES ('$codcata','$cod','$claveto',$cant,$tot,0)<br>UPDATE tb_ropa SET  cantidad=$totitoti WHERE tb_ropa.cod_ropa='$cod'";


  $ventaderopa=mysql_query("INSERT INTO tb_venta(cod_cat, cod_ropa, codigo_cli, Cantidad, preciotot, descuento) VALUES ('$codcata','$cod','$claveto',$cant,$tot,0)");


 


  $ACTUALIZARCANT=mysql_query("UPDATE tb_ropa SET  cantidad=$totitoti WHERE tb_ropa.cod_ropa='$cod' ");






?>

























