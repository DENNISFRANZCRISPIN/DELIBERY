

<?php 
session_start();
include("funciones.php");
$conex=conectar();

$codsuptipo=$_GET['codsubtipo'];
$nom=$_GET['nombre'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MENU DE ROPAS</title>
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

 $("#paneldehombre").hide();

 $("#paneldenino").hide();
  $("#panelpedido").hide();
  $("#panelREGISTROUSUARIO").hide();

    //queremos que esta variable sea global
 
$('#registrarusuario').click(function() {

       // alert('registrado correctamente');
       var nombreusuario=$('#nombredecliente').val();
       var numerodecel=$('#numerodecel').val();
       //alert('asignacionesgg');


     $.ajax({

        type:"GET",
        url:"pr_regusuario.php",
        data:'nom='+nombreusuario+'&cel='+numerodecel,
        success: retornoderegistro
                    });
                    return false; 

    
       
       
});




});

function retornoderegistro(valu){
  
   alert(valu);
   
     $('#nombredecliente').val('');
     $('#numerodecel').val('');


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

function  mostrartallas(val){



  var codig=val;

 //alert(codig);
 


  $.ajax({

        type:"GET",
        url:"busquedadetallasexistentes.php",
        data:'codig='+codig,
        success: retornotallas
                    });
          return false;

}


function retornotallas(valu){

 // alert(valu);

  $("#cbotallas").html(valu);






}
function mandartalla(valor){

  //alert(valor);
  var talla=valor;

     var descripcion=$('#descripcion').val();
     var material=$('#material').val();
     var cod=$('#cod').val();
     var tipo=$('#tipo').val();
     var color=$('#color').val();




     $.ajax({

        type:"GET",
        url:"pedidosfin.php",
        data:'descripcion='+descripcion+'&material='+material+'&talla='+talla+'&cod='+cod+'&tipo='+tipo+'&color='+color,
        success: retonrnonumprecod
                    });
                    return false;
}
function retonrnonumprecod(valores){

  $("#todossomos").html('');
   $("#todossomos").html(valores);


}

        function  mostarhomres1(val){
         

          var tipo=val;
          var CATEGO='H02';

          var cob='salirdehombre()';

          
    //alert(tipo);



           $.ajax({

        type:"GET",
        url:"pr_buscaropa.php",
        data:'CATEGO='+CATEGO+'&tipo='+tipo+'&datu='+cob,
        success: retornobushombre
                    });
                    return false; 

           


        }



        function retornobushombre(value){

           $("#paneldehombre").html(value);

         $("#paneldehombre").show();

        }



        function salirdehombre(){

             $("#paneldehombre").hide(500);


        }

        function  mostarmujeres1(val){
         

          var tipo=val;
          var CATEGO='M01';

          var cob='salirdemujer()';
    //alertpanelpedido(tipo);



           $.ajax({

        type:"GET",
        url:"pr_buscaropa.php",
        data:'CATEGO='+CATEGO+'&tipo='+tipo+'&datu='+cob,
        success: retornobusmujer
                    });
                    return false; 

           


        }

 
         function retornobusmujer(VALAL){

           $("#paneldemujer").html(VALAL);

         $("#paneldemujer").show(500);

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


$("#paneldemujer").hide(500);

 $("#paneldehombre").hide(500);

 $("#paneldenino").hide(500);


 $("#panelpedido").hide(500);

  


  alert("pedido realizada existoasamente");





}


        function salirdemujer(){

             $("#paneldemujer").hide(500);


        }
 

 function  mostarninos1(val){


          var tipo=val;
          var CATEGO='N03';

          var cob='salirdenino()';
    //alert(tipo);



           $.ajax({

        type:"GET",
        url:"pr_buscaropa.php",
        data:'CATEGO='+CATEGO+'&tipo='+tipo+'&datu='+cob,
        success: retornoNINO
                    });
                    return false; 


        


        }


        function retornoNINO(PENINO){

           $("#paneldenino").html(PENINO);

         $("#paneldenino").show(500);


        }


        function salirdenino(){

             $("#paneldenino").hide(500);


        }
        function mostrarpedido(alo){

          //alert(alo);





          var cod=alo;
        

      
    //alert(tipo);



           $.ajax({

        type:"GET",
        url:"pr_pedido.php",
        data:'&codrop='+cod,
        success: retornopedido
                    });
                    return false; 

         

        }

function retornopedido(dos){
   $("#panelpedido").html(dos);
    $("#panelpedido").show(500);


}

        function salirdepedido(){
$("#panelpedido").hide(500);

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



  <div class="col-lg-8" id="imagentitulo"> <center><img src="imagenes/LOGOJORDI.jpg" style="width: 600pt; height: 600pt;"></center></div>
  <div class="col-lg-4" id="contenidorandom">
    
     <div class="dropdown col-lg-12">
  <br>
  <br>
  <button class="btn btn-lg btn-primary dropdown-toggle col-lg-12"  style="font-size: 24pt;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
    HOMBRE
  </button><div class="dropdown-menu col-lg-12"   style="background-color: white;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item col-lg-12" onclick="mostarhomres1('Chompa')" style="font-size: 24pt; color: black; font-family: fantasy;">CHOMPAS</a> <br>
    <a class="dropdown-item col-lg-12" onclick="mostarhomres1('Buso')" style="font-size: 24pt; color: black; font-family: fantasy;"> BUSOS</a><br>
    <a class="dropdown-item col-lg-12" onclick="mostarhomres1('Gorro')" style="font-size: 24pt; color: black; font-family:fantasy; ">GORROS</a>

    <a class="dropdown-item col-lg-12" onclick="mostarhomres1('Sacon')" style="font-size: 24pt; color: black; font-family:fantasy; ">SACON</a>
    <a class="dropdown-item col-lg-12" onclick="mostarhomres1('Chaleco')" style="font-size: 24pt; color: black; font-family:fantasy; ">CHALECO</a>
  </div>
</div>

<div class="dropdown col-lg-12">
  <br>
  <br>
  <button class="btn btn-lg btn-danger dropdown-toggle col-lg-12"  style="font-size: 24pt;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
    MUJER
  </button>
  <div class="dropdown-menu col-lg-12"   style="background-color: white;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item col-lg-12" onclick="mostarmujeres1('Chompa')" style="font-size: 24pt; color: black; font-family: fantasy;">CHOMPAS</a> <br>
    <a class="dropdown-item col-lg-12" onclick="mostarmujeres1('Buso')" style="font-size: 24pt; color: black; font-family: fantasy;"> BUSOS</a><br>
    <a class="dropdown-item col-lg-12" onclick="mostarmujeres1('Gorro')" style="font-size: 24pt; color: black; font-family:fantasy; ">GORROS</a>

    <a class="dropdown-item col-lg-12" onclick="mostarmujeres1('Sacon')" style="font-size: 24pt; color: black; font-family:fantasy; ">SACON</a>
    <a class="dropdown-item col-lg-12" onclick="mostarmujeres1('Chaleco')" style="font-size: 24pt; color: black; font-family:fantasy; ">CHALECO</a>
  </div>
</div>


<div class="dropdown col-lg-12">
  <br>
  <br>
  <button class="btn btn-lg btn-success dropdown-toggle col-lg-12"  style="font-size: 24pt;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
    NIÑO
  </button>
  <div class="dropdown-menu col-lg-12"   style="background-color: white;" aria-labelledby="dropdownMenuButton">
    
      <a class="dropdown-item col-lg-12" onclick="mostarninos1('Chompa')" style="font-size: 24pt; color: black; font-family: fantasy;">CHOMPAS</a> <br>
    <a class="dropdown-item col-lg-12" onclick="mostarninos1('Buso')" style="font-size: 24pt; color: black; font-family: fantasy;"> BUSOS</a><br>
    <a class="dropdown-item col-lg-12" onclick="mostarninos1('Gorro')" style="font-size: 24pt; color: black; font-family:fantasy; ">GORROS</a>

    <a class="dropdown-item col-lg-12" onclick="mostarninos1('Sacon')" style="font-size: 24pt; color: black; font-family:fantasy; ">SACON</a>
    <a class="dropdown-item col-lg-12" onclick="mostarninos1('Chaleco')" style="font-size: 24pt; color: black; font-family:fantasy; ">CHALECO</a>
  </div>
</div>



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
   <button type="button" class="btn btn-lg btn-primary">INGRESAR</button> 
<a href="javascript:abrirventanaderegusu()" style="float:right;" class=" btn btn-danger btn-lg">REGISTRAR NUEVO CLIENTE</a><br><br>



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
      <center><h2 class=" col-lg-10 text text-danger" style="font-weight: bold; background:white;">FORMULARIO DE REGISTRO DE USUARIO</h2></center>
        <a href="javascript:salirdeREGUSU()"  style="float:right;" class=" btn btn-danger btn-lg"><i class="fa fa-times" ></i></a><br><br>
      </div>



<form>
  <br>
  <div class="form-group">
    <label for="nombredeusuario">Nombre</label>
    <input type="text" class="form-control" id="nombredecliente" placeholder="ejemplo: Juan Perez">
  </div>
  <br>

   <div class="contraseñadeusuario">Celular</label>
    <input type="text" class="form-control" id="numerodecel" placeholder="########">
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

