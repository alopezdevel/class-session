<?php

session_start();

if ( $_SESSION['acceso'] != "U" ){ //No ha iniciado session: Esta ventana es solo para socios...no administradores

    header("Location: index.php");    

    exit;

}else {  

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

    <script src="/js/jquery-1.11.2.min.js" type="text/javascript"></script> 

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    

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

            <li><a href="inicio.php" class="active"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
            <li class="submenu"><a href="#" class="active"><i class="fa fa-bar-chart"></i>Niveles</a>
                <ul>
                    <li><a href="nivel1_lecciones.php"><i class="fa fa-caret-right"></i>Nivel 1</a></li>
                    <li><a href="nivel2_lecciones.php"><i class="fa fa-caret-right"></i>Nivel 2 (new!)</a></li>
                </ul>
            </li>
            <li><a href="nivelsolos_lecciones.php"><i class="fa fa-bar-chart"></i>Solos de Rock!(new!)</a></li>
            <?php  if($_SESSION["usuario_actual"] == "alopez@globalpc.net"){?>
            <li><a href="nivelmetal_lecciones.php"><i class="fa fa-bar-chart"></i>Ritmica Metal</a></li>    
            <?php }else{?>
            <li><a href="#"><i class="fa fa-bar-chart"></i>Ritmica Metal</a></li>                    
            <?php }?>
            

            <li><a href="nivel1_lecciones.php"><i class="fa fa-exclamation-triangle"></i>Pentagrama-Escuela</a></li>

            <li><a href="kit_estudio.php"><i class="fa fa-lightbulb-o"></i>Kit de Estudio</a></li>

            <li><a href="retos.php"><i class="fa fa-lightbulb-o"></i>Retos</a></li>

            <li><a href="canciones_backing_track.php"><i class="fa fa-music"></i>Canciones</a></li>

            <li><a href="index.php"><i class="fa fa-power-off"></i>Cerrar Sesi&oacute;n</a></li>

          </ul>  

        </nav>

      </div>

      <!-- Main content --> 

      <div class="content col-1 light-gray-bg">

      <div class="content-container">

          <div class="flex-row flex-content-row">

            <div class="content-widget white-bg col-2">

              <i class="fa fa-times"></i>

              <h2 class="inline-block"><i class="fa fa-newspaper-o"></i> Bienvenido: <?php echo $_SESSION["usuario_actual"];?></h2>

              <hr>

              <p>NUEVA SECCION DE SOLOS DE GUITARRA. CLASES ENFOCADAS A REALIZAR SOLOS. CLASES DE SABADO </p>

            </div>

          </div>

         

            <div class="col-1">

              <div class="panel panel-default content-widget white-bg no-padding overflow-hidden">

                <i class="fa fa-times"></i>

                <div class="panel-heading position-relative"><h2 class="text-uppercase">Alumnos</h2></div>

                <div class="table-responsive">

                  <table class="table table-striped table-bordered">

                    <thead>

                      <tr>

                        <td>No.</td>

                        <td>Nombre</td>

                        <td>Apellido</td>

                        <td>Usuario</td>

                      </tr>

                    </thead>

                    <tbody>

                     

                      <tr>

                        <td>1.</td>

                        <td>Javier</td>

                        <td>Padilla</td>

                        <td>javopadilla@gmail.com</td>

                      </tr>

                      <tr>

                        <td>2.</td>                    

                        <td>Sergio</td>

                        <td>Benavides</td>

                        <td>sergio.benavides@gmx.de</td>

                      </tr>

                                     

                    </tbody>

                  </table>    

                </div>                          

              </div>

            </div>           

          </div> <!-- Second row ends -->

          

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

<?php }?>