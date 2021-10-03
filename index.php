

<?php 
session_start();
include("funciones.php");
$conex=conectar();




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pagina principal </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link  type="text/css" href="css/bootstrap.min.css">



<script type="text/javascript" src='js/jquery321min.js'></script>
       <script type="text/javascript">
        $(document).ready(function(){
//alert('banaa');

 $("#paneldesession").hide();
 $("#paneldemujer").hide();
$("#registrarPEDIDO").hide();
 $("#paneldehombre").hide();

 $("#paneldenino").hide();
  $("#panelpedido").hide();
  $("#panelpedidos").hide();
  $("#panelREGISTROUSUARIO").hide();
  var codcliactu=''
  var codproactu=''

    //queremos que esta variable sea global
 
$('#registrarusuario').click(function() {
   
//alert('registrado correctamente');
       //alert('registrado correctamente');
       var nombreusuario=$('#NOMCLI').val();
       var numerodecel=$('#NUMCEL').val();
       var dirrecion=$('#DIREC').val();
       var nit=$('#NITT').val();
       //alert('asignacionesgg');


     $.ajax({

        type:"GET",
        url:"pr_regusuario.php",
        data:'nom='+nombreusuario+'&cel='+numerodecel+'&dir='+dirrecion+'&nit='+nit,
        success: retornoderegistro
                    });
                    return false; 

    
       
       
});




});

function retornoderegistro(valu){
  codcliactu=valu;
      //alert(codcliactu);
  
   alert('registro exitoso');
      $("#panelREGISTROUSUARIO").hide(500);
   
$("#registrarPEDIDO").show(500);


}





function cambiarcantidad(){

var total=0;

  var prediounit=$('#preciounitt').val();

  var cant=$("#CANTIDAD").val();

  total=prediounit*cant;

$("#totalprec").val(total);
    

}

        function salirdesseion(){
            $("#paneldesession").hide(500);

        }

        function salirdespanelpedido(){
           $("#panelpedidos").hide(500); 



        }
        function abrirventanadesesion(){

         $("#nombredeusuario").val('');
          $("#contraseñadeusuario").val('');
        
             $("#paneldesession").show(500);

        }

         function salirdeREGUSU(){
            $("#panelREGISTROUSUARIO").hide(500);

        }
        function abrirventanaderegusu(){
           $("#paneldesession").hide(500);
             $("#panelREGISTROUSUARIO").show(500);

        }
       function atrasatras(){
         $("#panelREGISTROUSUARIO").hide(500);
         $("#paneldesession").show(500);
            

       }

function  iniciarsesion(){


var nom= $("#nombredeusuario").val('');
          var contra=$("#contraseñadeusuario").val('');
         // alert("bienvenido su contraseña la sidoaceptada");


          

 


  $.ajax({

        type:"GET",
        url:"lista.php",
        data:'NOM='+nom+'&contras='+contra,
        success: retornolistas
                    });
          return false;

}


function retornolistas(valu){

 // alert(valu);
$("#panelpedido").show(500);
  $("#panelpedido").html(valu);






}
function salirpedidossss(){
  $("#panelpedido").hide(500);
}



function  enviar(val){
var estado=val;
alert(estado);




          

 


  $.ajax({

        type:"GET",
        url:"actulista.php",
        data:'est='+estado,
        success: retornoactulista
                    });
          return false;

}


function retornoactulista(valu){

 // alert(valu);
$("#panelpedido").hide(500);
  $("#panelpedido").html(valu);
  $("#panelpedido").show(500);






}


function resgistrarpedido(){

 

     var cantidad=$('#CANTIDAD').val();
     




     $.ajax({

        type:"GET",
        url:"resgistropedido.php",
        data:'codpro='+codproactu+'&codcli='+codcliactu+'&cantidad='+cantidad,
        success: retonoregistrarpedidos
                    });
                    return false;
}
function retonoregistrarpedidos(valores){
  alert(valores);
  $("#panelpedidos").hide(500);

  //$("#todossomos").html('');
  // $("#todossomos").html(valores);


}

        function  mostarhomres1(val){
         

          var tipo=val;
          var CATEGO='H02';

          var cob='salirdehombre()';

          $("#paneldehombre").show(500);

          
    //alert(tipo);


        }



  

           

         

        



        function salirdehombre(){

             $("#paneldehombre").hide(500);


        }

        
function vender(alos){


var total=0;

  var prediounit=$('#preciounitt').val();

  var cant=$("#CANTIDAD").val();
var catego=$("#codigocat").val();




   var cod=$('#codigorop').val();
   //alert(cod);

   var cel=$("#celulu").val();
   var nom=$("#nomo").val();

   var CANTIIEX=$("#CANTEXIST").val();
//lert(CANTIIEX);
        





           $.ajax({

        type:"GET",
        url:"pr_compra.php",
        data:'codrop='+cod+'&cantida='+cant+'&total='+prediounit+'&cel='+cel+'&nom='+nom+'&catego='+catego+'&CANTIIEX='+CANTIIEX,
        success: retornocompra
                    });
                    return false; 







}


function retornocompra(vals){



 $("#paneldehombre").hide(500);


 $("#panelpedido").hide(500);

  


  alert("pedido realizada existoasamente");





}



        function mostrarpedido(alo){
         //alo alert(alo);
         codproactu=alo;
          $("#paneldehombre").hide(500);

          $("#panelpedidos").show(500); 

        }

function retornopedido(dos){
   $("#panelpedido").html(dos);
    $("#panelpedido").show(500);


}

        function salirdepedidos(){
$("#panelpedidos").hide(500);

        }



</script>



<style type="text/css">
    .messages{
        float: left;
        font-family: sans-serif;
        display: none;
    }
    .info{
        padding: 10px;
        border-radius: 10px;
        background: orange;
        color: #fff;
        font-size: 18px;
        text-align: center;
    }
    .before{
        padding: 10px;
        border-radius: 10px;
        background: blue;
        color: #fff;
        font-size: 18px;
        text-align: center;


    }
    .success{
        padding: 10px;
        border-radius: 10px;
        background: green;
        color: #fff;
        font-size: 18px;
        text-align: center;
    }
    .error{
        padding: 10px;
        border-radius: 10px;
        background: red;
        color: #fff;
        font-size: 18px;
        text-align: center;
    }
    body{
      background: url(imagenes/FONDOTODOP.jpg);
    background-size: 100%;
    background-repeat: no-repeat;

    }
    #titulo{
      background:url(imagenes/FONDOTODOP.jpg);
      top: -20px;
    }
    #titulosss{
      background:black;
      top: -40px;

    }
       
</style>
</head>
<body>
     
  <div class="container col-lg-12">

           
            <a href="javascript:abrirventanadesesion()" class="btn btn-info btn-lg" style="left: 2px;">INICIAR SESSION</a>
    
  </div><br><br><br><br>

<div class="panel panel-warning col-md-12" id="titulo">



  <div class="col-lg-8" id="imagentitulo"> <center><img src="imagenes/del.jpg" style="width: 600pt; height: 600pt;"></center></div>
  <div class="col-lg-4" id="contenidorandom">
    
     <div class="dropdown col-lg-12">
  <br>
  <br>
  <button class="btn btn-lg btn-primary dropdown-toggle col-lg-12" onclick="mostarhomres1()"   style="font-size: 24pt;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
    Mostrar productos
  </button>
  </div>
</div>




  </div>


 
</div>



   <div class="panel panel-primary col-md-12" id="panelpedidos"  style="background-color: rgba(25,25,25,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;">

<br><br><br>
<div class="col-lg-4"></div>

  
  <div class="panel-primary col-lg-4" style=" background:white; border-bottom: 5pt;" > 



<div class="col-lg-12">
<br>
      <center><h2 class=" col-lg-10 text text-danger" style="font-weight: bold; background:white;">PEDIDO</h2></center>
        <a href="javascript:salirdespanelpedido()"  style="float:right;" class=" btn btn-danger btn-lg"><i class="fa fa-times" ></i></a><br><br>
      </div>



<form>
  <br>
  <div class="form-group">


    <label for="nombredeusuario">CANTIDAD</label>
    <input type="number" class="form-control" id="CANTIDAD">
    
  </div>
  
  <br>
<CENTER><div clas="form-group">
  <a href="javascript:abrirventanaderegusu()" style="float:right;" class=" btn btn-danger btn-lg">REGISTRAR  CLIENTE</a><br><br>
</div></CENTER>
<br><br><br>

<div class="form-group">

  
<a  id="registrarPEDIDO" href="javascript:resgistrarpedido()" style="float:right;" class="btn btn-lg btn-primary"">REGISTRAR  pedido</a><br><br>
</div></CENTER>



  </div>
 
  
</form>





  </div>

</div>






   <div class="panel panel-primary col-md-12" id="paneldesession"  style="background-color: rgba(25,25,25,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;">

<br><br><br>
<div class="col-lg-4"></div>

  
  <div class="panel-primary col-lg-4" style=" background:white; border-bottom: 5pt;" > 



<div class="col-lg-12">
<br>
      <center><h2 class=" col-lg-10 text text-danger" style="font-weight: bold; background:white;">SESSION</h2></center>
        <a href="javascript:salirdesseion()"  style="float:right;" class=" btn btn-danger btn-lg"><i class="fa fa-times" ></i></a><br><br>
      </div>



<form>
  <br>
  <div class="form-group">
    <label for="nombredeusuario">Usuario</label>
    <input type="text" class="form-control" id="nombredeusuario" placeholder="Nombre de Usuario">
  </div>
  <br>

   <div class="contraseñadeusuario">Contraseña</label>
    <input type="password" class="form-control" id="contraseñadeusuario" placeholder="********">
  </div>
  <br>
<div class="form-group">
   <button type="button" onclick="iniciarsesion()" class="btn btn-lg btn-primary">INGRESAR</button> 



  </div>
 
  
</form>





  </div>

</div>



<div class="panel panel-primary col-md-12" id="panelREGISTROUSUARIO"  style="background-color: rgba(25,25,25,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;"id="contenedor_registro_atractivo">

<br><br><br>
<div class="col-lg-4"></div>

  
  <div class="panel-primary col-lg-4" style=" background:white; border-bottom: 5pt;" > 



<div class="col-lg-12">
<br>
      <center><h2 class=" col-lg-10 text text-danger" style="font-weight: bold; background:white;">FORMULARIO DE REGISTRO DE CLIENTE</h2></center>
        <a href="javascript:salirdeREGUSU()"  style="float:right;" class=" btn btn-danger btn-lg"><i class="fa fa-times" ></i></a><br><br>
      </div>



<form>
  <br>
  <div class="form-group">
    <label for="nombredeusuario">Nombre</label>
    <input type="text" class="form-control" id="NOMCLI" placeholder="ejemplo: Juan Perez">
  </div>
  <br>

   <div class="contraseñadeusuario">Celular</label>
    <input type="text" class="form-control" id="NUMCEL" placeholder="########">
  </div>
  <br>
  <div class="contraseñadeusuario">nit</label>
    <input type="text" class="form-control" id="NITT" placeholder="########">
  </div>
  <br>
  <div class="contraseñadeusuario">DIRECCION</label>
    <input type="text" class="form-control" id="DIREC" placeholder="CALLE X">
  </div>
  <br>
<div class="form-group">
   <DIV class=" col-lg-4" ><a href="javascript:atrasatras()"  style="float:right;" class=" btn btn-primary btn-lg">Atras</a><br><br></DIV><button id="registrarusuario" type="button" class="btn btn-lg btn-success">REGISTRAR</button> 
  </div>
 
  
</form>





  </div>

</div>





       
<div class="panelderopas panel panel-primary col-md-12" id="paneldemujer"  style="background-color: rgba(242, 23, 234 ,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;"id="contenedor_registro_atractivo">
  




</div>

<div class=" panelderopas panel panel-primary col-md-12" id="paneldenino"  style="background-color: rgba(24, 23, 234 ,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;">
  




</div>




<div class=" panelderopaspanel panel-primary col-md-12" id="paneldehombre"  style="background-color: rgba(41, 128, 243 ,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;">
  

     
<?php


echo "<center><h2 class=' col-lg-10 text text-danger' style='font-weight: bold; background:white;'>PRODUCTOS DISPONIBLES  </h2></center>

        <a href='javascript:salirdehombre()'  style='float:right;' class='btn btn-danger btn-lg'><i class='fa fa-times' ></i></a>

        <br><br><br><br>"
        ;

       $consultatipodesc=mysql_query("SELECT * FROM productos");

           while ( $filatipo=mysql_fetch_array($consultatipodesc)) {


          echo" <div class='panel-primary col-lg-2' style='background-color: white; border-radius: 15px;'>
  <br><br>
  <center>
    <img src='$filatipo[5]' style='width: 200px; height: 200px;'>
  </center>
  
    <br>

    <br> 
    <label> Nombre:  $filatipo[1]</label><br>

    <label> Descripcion de prenda:  $filatipo[2]</label><br>
    
    <label> Precio:  $filatipo[4]</label><br>
   
    <label ID='CANTIDADDEROPA'> cantidad disponible:  $filatipo[3]</label><br>
    <label> color:  $filatipo[5]</label><br><br>
              
              <center>

                     <button class='btn btn-success'  > 
                         <a style='color: white; border-radius: 15px;'  href='javascript:mostrarpedido(\"$filatipo[0]\")'>comprar</a> 
                     </button>

              </center>
              <br>
</div>";


           }





?>


</div>
  







<div class="panel panel-primary col-md-12" id="panelpedido"  style="background-color: rgba(405,205,149,0.7); z-index: 1003; position:absolute; 
top: 0; height: 100%;">



  


</div>











    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>



<script type="text/javascript" src="js/jquery321min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
//aqui hay el codigo jquery
</script>


</body>
</html>

