


<?

include("funciones.php");
$conex=conectar();

$dato=$_GET["est"];

 $consultalistas=mysql_query("UPDATE pedido SET estado='si' WHERE codigo=$dato");


echo"<div id='pornombre' >
    <div class='panel panel-success col-md-12' style=' '>

        <center><h2 class='text text-success ' style=' background-color: #3fb488; color:white; border-radius:7px; font-family:arial black;''>LISTA DE PEDIDOS</h2><a class='btn btn-danger'href='javascript:salirpedidossss()'>X</a></center><br>
    </div>
   
        <div class='col-md-12'  id='resultado'  style='background-color:white;' >

          <table class='table table-responsive table-striped table-dark'  id='RESULTAMEJOR' >
            <thead style=' background-color:black; color: white; font-family: font-size:15pt; arial black;'>           <tr class='' >
                    <th><bold>CODIGO</bold></th>
                    <th><bold>CLIENTE</bold></th>
                    <th><bold>FECHA</bold></th>
                    <th><bold>ESTADO</bold></th>
                    <th><bold>cANTIDAD</bold></th>
                   
                    <th><bold>OPCIONES</bold></th>
              </tr></thead>
              <tbody id='valoresresult'>";
             
               $consultaUsuario=mysql_query("SELECT * FROM pedido WHERE estado='no'");
              

               while ($fila=mysql_fetch_array($consultaUsuario)) {

                echo "<tr>
                       <th>$fila[0]</<th>
                       <th>$fila[2]</<th>
                       <th>$fila[3]</<th>
                       <th>$fila[4]</<th>
                       <th>$fila[5]</<th>
                       

                       
                       <th><a class='btn btn-success'href='javascript:enviar(\"$fila[0]\")'>enviar</a> 
                       </<th>
                        </tr>";

                 


                
                          }



              

echo"   </tbody>
</table><br><br>

</div>
</div>
</div>
";



?>