<!DOCTYPE html>
<html lang="en">
<?php include("funciones_consulta.php");
$leccion_nivel = NULL;

$nivel = "1";
$leccion = "1";
getLeccionesNivelUsuario($nivel,$leccion, $leccion_nivel);

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
            <li><a href="nivel1_lecciones.php" class="active"><i class="fa fa-bar-chart"></i>Nivel 1</a></li>
            <li><a href="retos.php"><i class="fa fa-lightbulb-o"></i>Retos</a></li>
            <li><a href="canciones_backing_track.php"><i class="fa fa-music"></i>Canciones</a></li>
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
                <li><a href="nivel1_lecciones.php" class="active">Lecciones</a></li>                
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-container">
         <?php 
        if(count($leccion_nivel)>0){
            foreach($leccion_nivel as $leccion){?>
          <div class="flex-row flex-content-row">
            <div class="content-widget white-bg col-2">
              <div class="square"></div>
              <h2 class="inline-block"><?php echo utf8_encode($leccion['titulo']);?></h2><hr>
              <p><b><?php echo utf8_encode($leccion['subtitulo']);?></b> </p>
              <p><?php echo utf8_encode($leccion['descripcion']);?></p>
              <p class="text-right"> <a href="descarga.php?archivo=<?php  echo $leccion['ruta'];?>" target="_blank" ><i class="fa fa-file-pdf-o"></i> Descargar PDF</a></p>
              <p class="text-right"> <a href="nivel1_videos.php?leccion=<?php  echo $leccion['leccion'];?>" ><i class="fa fa-video-camera"></i> Ver videos</a></p>
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