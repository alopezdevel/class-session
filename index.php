<?php
session_start();
session_unset();
session_destroy();
include("cn_usuarios.php");

if ($dbconn && $dbselect) {
?>
<!DOCTYPE html>
<html>
<head>
    <script src="/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Class Session - Login</title>
    <meta name="description" content="Contenido de las Sesiones de Guitarra con el maestro Alberto L.">
    <meta name="author" content="Alberto">
    <link rel="shortcut icon" href="images/icon.ico" type="img/x-icon"> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<script>

var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

var expr1 = /^[a-zA-Z]*$/;      

$(document).ready(inicio);

function inicio(){  

     //variables     

     mensaje = $( ".mensaje_valido" );

     usuario = $( "#loginUser" ),

     password = $( "#loginPassword" ),

     todosloscampos = $( [] ).add( usuario ).add( password );

     $("#loginUser").focus().css("background-color","#FFFFC0");     

     $("#button_aceptar").click(onValidarAcceso);

     $("#loginUser").focus(onFocus); 

     $("#loginPassword").focus(onFocus); 

     $("#loginUser").blur(onBlur);

     $("#loginPassword").blur(onBlur);   

     $("#loginPassword").keydown(function (e) {

                                if(e.which ==13)

                                    onValidarAcceso();

                                });

     $("#loginUser").keydown(function (e) {

                                if(e.which ==13){

                                    $(this).css("background-color","#FFFFFF"); 

                                    $("#loginPassword").css("background-color","#FFFFC0"); 

                                    $("#loginPassword").focus();

                                }

                                });

}



 function onValidarAcceso(){   

     var emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

     actualizarMensajeAlerta( "All form fields are required." ); 

     todosloscampos.removeClass( "error" );

     $("#loginUser").removeClass( "error" );

     $("#loginPassword").removeClass( "error" );

     var valid = true; 

          

     valid = valid && checkLength( $('#loginUser'), "user", 3, 80 );

     ///valid = valid && checkRegexp( $('#loginUser'), emailRegex, "eg. ui@test.com" );

     

     valid = valid && checkLength( $("#loginPassword"), "password", 6, 25 );

     valid = valid && checkRegexp( $("#loginPassword"), /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

     

     if ( valid ) {

        conexion($("#loginUser").val(), $("#loginPassword").val());

     }

     

 }

 function conexion(u, p){

     $.post("funciones.php", { accion: "conexion", usuario: u , password: p}, 

     function(data){ 

         switch(data.respuesta){

         case "0":  $("#loginPassword").val("");

                    $("#loginPassword").focus();

                    $("#loginUser").addClass( "error" );

                    $("#loginPassword").addClass( "error" );

                    alert("Error: The User " +  $("#loginUser").val() + " does not exist" );                                                

                break;

         case "1":   

                       

                     location.href= "inicio.php";                       

                break;

         case "2":    $("#loginPassword").val("");

                    $("#loginPassword").focus();

                    $("#loginPassword").addClass( "error" );

                    alert("The Password you typed is incorrect"  );

                break;  

         }

     }

     ,"json");

 }

 function onFocus(){

     $(this).css("background-color","#FFFFC0");

 }

 function onBlur(){

    $(this).css("background-color","#FFFFFF");

 }

 function checkRegexp( o, regexp, n ) {

    if ( !( regexp.test( o.val() ) ) ) {

        actualizarMensajeAlerta( n );

        o.addClass( "error" );

        o.focus();

        return false;

    } else {                     

        return true;        

    }

 }

 function checkLength( o, n, min, max ) {

    if ( o.val().length > max || o.val().length < min ) {

        actualizarMensajeAlerta( "Length of " + n + " must be between " + min + " and " + max + "."  );
        alert( "Length of " + n + " must be between " + min + " and " + max + "."  );
        o.addClass( "error" );

        o.focus();

        return false;    

    } else {             

        return true;                     

    }                    

 }

 

 function actualizarMensajeAlerta( t ) {

      mensaje

        .text( t )

        .addClass( "alertmessage" );

      setTimeout(function() {

        mensaje.removeClass( "alertmessage", 2500 );

      }, 700 );

 }  

 



</script>
<body>
	<!----------LOGIN ---------------->
	<div class="login-container">
	    <div class="logo"></div>
	    <div class="frm-container">
	        <form class="frm-login" method="post" >            
	                <div class="user">
	                    <input id="loginUser" name="loginUser" type="text" placeholder="Usuario:">
	                </div>
	                <div class="pass">
	                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Contraseña:">
	                </div>
	                <div class="btns">
	                    <button  class="btn-cancelar" type="reset">Cancelar</button>
	                    <button id="button_aceptar" class="btn-aceptar" type="button">Aceptar</button>
	                </div>
	         </form>
	    </div>
	    
	<footer class="text-center"><p>Copyright &copy; 2016 Class Session - Alberto Guitarrista</p></footer>         	
	</div>
	<!----------LOGIN ---------------->
	<!-- JS -->
	<script src="js/jquery-1.11.2.min.js"></script>                         <!-- jQuery -->
	<script src="js/jquery-migrate-1.2.1.min.js"></script>                  <!--  jQuery Migrate Plugin -->
	<script src="https://www.google.com/jsapi"></script>                    <!-- Google Chart -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>  <!-- Templatemo Script -->
    
<?php }else{

    echo '<script language="javascript"> alert (\'El sistema esta fuera de servicio. \')</script>';

}
?>
</body>
</html>
