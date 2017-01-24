<!DOCTYPE html>
<html lang="en">
<?php include("funciones_consulta.php");
$canciones_nivel= NULL;
$nivel = "1";
getCancionesNivelUsuario($nivel, $canciones_nivel);               
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
            <li><a href="inicio.php"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
            <li><a href="nivel1_lecciones.php"><i class="fa fa-bar-chart"></i>Nivel 1</a></li>
            <li><a href="retos.php" ><i class="fa fa-lightbulb-o"></i>Retos</a></li>          
            <li><a href="canciones_backing_track.php" class="active"><i class="fa fa-music"></i>Canciones</a></li>
            <li><a href="index.php"><i class="fa fa-power-off"></i>Cerrar Sesi&oacute;n</a></li>
          </ul>  

        </nav>

      </div>

      <!-- Main content --> 

      <div class="content col-1 light-gray-bg">

        <div class="top-nav-container">

          <div class="row">

            <nav class="top-nav col-lg-12 col-md-12">

              <ul class="text-uppercase">

                <li><a href="#" class="active">Canciones</a></li>
                

              </ul>  

            </nav> 

          </div>

        </div>

        <div class="content-container">

         <?php 

        if(count($canciones_nivel)>0){

            foreach($canciones_nivel as $cancion){?>

          <div class="flex-row flex-content-row">

            <div class="content-widget white-bg col-2">
              <h2 class="inline-block"><img alt="" src="<?php  echo $cancion['ruta_album'];?>" WIDTH=100 HEIGHT=100><?php echo utf8_encode($cancion['titulo'])."-".utf8_encode($cancion['artista']);?></h2><hr>
              

              

              <p><b><?php echo "Descripcion de la cancion";?></b> </p>

              <p><?php echo "Tono:".utf8_encode($cancion['tono']);?></p>
              <p><?php echo "Tempo:".utf8_encode($cancion['tempo']);?></p>              
              <p><?php echo "".utf8_encode($cancion['descripcion']);?></p>              

              <p class="text-right"> <a href="descarga_btm.php?archivo=<?php  echo $cancion['ruta'];?>" target="_blank" ><i class="fa fa-music"></i> Descargar BackingTrack</a></p>
              <p class="text-right"> <a href="<?php  echo $cancion['ruta_youtube'];?>" target="_blank" ><i class="fa fa-music"></i> Ver Video</a></p>

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