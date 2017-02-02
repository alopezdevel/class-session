<?php include("funciones_consulta.php");
$videos_nivel = NULL;

$nivel = "1";
$leccion = $_GET['leccion'];
getVideosNivelUsuario($nivel,$leccion, $video_nivel);

?>
<!DOCTYPE html>
<html lang="en">
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
                <li><a href="modulos_pentagrama.php" class="active">Regresar</a></li>                
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-container">
          <div class="flex-row flex-content-row">
            <div id="video_container" class="content-widget white-bg col-2">
              <h2 class="inline-block"></h2><hr>
             
              <div class="video carousel-stage">
                  <ul>
<?php
                        if(count($video_nivel)){               
                            foreach($video_nivel as $video){?>
                            <li>
                                <video width="100%" height="240" controls="true">
                                    <source src="documentos/pentagrama/<?php echo $video['ruta'];?>" type="video/mp4">
                                        Tu navegador no soporta videos en HTML5.
                                    </video>
                            </li>
<?php       
                            }
                        }
?>
                    
                   
    
                  </ul>
              </div>
              <div class="menu-video">
                 <a href="#" class="prev-navigation">&lsaquo;</a>
                 <a href="#" class="next-navigation">&rsaquo;</a>
                 <div class="carousel-navigation">
                     <ul>
                       <?php
                        if(count($video_nivel)){               
                            foreach($video_nivel as $video){?>
                        <li title="<?php echo $video['descripcion'];?>"><h3><?php echo $video['titulo'];?></h3></li>
<?php                       }
                        }
?>                        
                    </ul>
                 </div>
                 
               </div>
               
            </div>
          </div>
          
          <footer class="text-right"><p>Copyright &copy; 2016 Class Session - Alberto Guitarrista</p></footer>         
        </div>
      </div>
    </div>
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <!---videos--->
    <link href="css/video_container.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='js/jquery.jcarousel.min.js'></script>
    <script type='text/javascript' src='js/video_container.js'></script>

    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/script.js"></script>      <!-- Templatemo Script -->
    
  </body>
</html>