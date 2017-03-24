<!DOCTYPE html>
<html lang="en">
<?php include("funciones_consulta.php");
$kit_estudio= NULL;
getKitEstudio( $kit_estudio);               
?>
<head>
    <meta charset="utf-8">                                                  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Class Session - Home</title>
    <meta name="description" content="Contenido de las Sesiones de Guitarra con el maestro Alberto L.">
    <meta name="author" content="Alberto">
    <link rel="shortcut icon" href="images/icon.ico" type="img/x-icon"> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
  <body>  

    <!-- Left column -->

    <div class="flex-row">

      <div class="sidebar">

        <header class="site-header">

            <img alt="" src="images/logo_dashboard.png">

        </header>     

        <!-- Search box -->

        <form class="search-form" role="search">

          <div class="input-group">

              <button type="submit" class="fa fa-search"></button>

              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           

          </div>

        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="left-nav">          
          <ul>
            <li><a href="inicio.php"><i class="fa fa-home fa-fw"></i>Regresas al Inicio</a></li>            
          </ul>  

        </nav>

      </div>

      <!-- Main content --> 

      <div class="content col-1 light-gray-bg">

        <div class="top-nav-container">

          <div class="row">

            <nav class="top-nav col-lg-12 col-md-12">

              <ul class="text-uppercase">

                <li><a href="#" class="active">Kit de Estudio</a></li>
                

              </ul>  

            </nav> 

          </div>

        </div>

        <div class="content-container">

         <?php 

        if(count($kit_estudio)>0){

            foreach($kit_estudio as $leccion){?>

          <div class="flex-row flex-content-row">

            <div class="content-widget white-bg col-2">

              <div class="square"></div>

              <h2 class="inline-block"><?php echo utf8_encode($leccion['titulo']);?></h2><hr>
              

              <p><?php echo utf8_encode($leccion['descripcion']);?></p>
              <?php if($leccion['sub-seccion'] == "1"){ ?>
                <p class="text-right"> <a href="<?php  echo $leccion['ruta'];?>" ><i class="fa fa-file-pdf-o"></i> Ir a la Seccion</a></p>
<?php         }else{?>
                <p class="text-right"> <a href="descarga.php?archivo=<?php  echo $leccion['ruta'];?>" target="_blank" ><i class="fa fa-file-pdf-o"></i> Descargar PDF</a></p>
              <?php } ?>

            </div>

          </div>

          <?php }

          }?>

         

          <footer class="text-right"><p>Copyright &copy; 2016 Class Session - Alberto Guitarrista</p></footer>         

        </div>

      </div>

    </div>

    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->

    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->

    <script type="text/javascript" src="js/script.js"></script>      <!-- Templatemo Script -->

  </body>

</html>