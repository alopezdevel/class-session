<?php   
  function getCancionesNivelUsuario($nivel, &$arr_){
    
    include("cn_usuarios.php");                                        
    $sql = "  SELECT  sTitulo, sDescripcion, sRuta , sTono  , sTempo, sArtista, sRutaVideoYoutube, sRutaAlbum 
              FROM cb_canciones WHERE eNivel ='".$nivel."'   ORDER BY iConsecutivo";                
    $result = mysql_query($sql, $dbconn);
    if (mysql_num_rows($result) > 0) {
        while ($Recordset = mysql_fetch_array($result)) {
            $arr_[] = array("titulo" => $Recordset['sTitulo'],  
                            "subtitulo" => $Recordset['sSubtitulo'],                            
                            "tempo" => $Recordset['sTempo'],                            
                            "ruta_youtube" => $Recordset['sRutaVideoYoutube'],                            
                            "ruta_album" => $Recordset['sRutaAlbum'],                            
                            "tono" => $Recordset['sTono'],                            
                            "artista" => $Recordset['sArtista'],                            
                            "descripcion" => $Recordset['sDescripcion'],
                            "ruta" => $Recordset['sRuta'],
                            );
        }
    }
    
    mysql_free_result($result);                         
    mysql_close($dbconn); 
  }
  
  function getVideosNivelUsuario($nivel,$leccion, &$arr_){
    $sql_leccion =  "";
    if($leccion != ""){
        $sql_leccion = " AND sLeccion ='".$leccion."'";        
    }
    include("cn_usuarios.php");                                        
    $sql = "  SELECT  sTitulo, sDescripcion, sRuta, sLeccion
              FROM cb_videos WHERE eNivel ='".$nivel."' $sql_leccion  ORDER BY iConsecutivo";                
    $result = mysql_query($sql, $dbconn);
    if (mysql_num_rows($result) > 0) {
        while ($Recordset = mysql_fetch_array($result)) {
            $arr_[] = array("titulo" => $Recordset['sTitulo'],  
                            "subtitulo" => $Recordset['sSubtitulo'],
                            "leccion" => $Recordset['sLeccion'],
                            "descripcion" => $Recordset['sDescripcion'],
                            "ruta" => $Recordset['sRuta'],
                            );
        }
    }
    mysql_free_result($result);                         
    mysql_close($dbconn); 
  }
  function getLeccionesNivelUsuario($nivel,$leccion, &$arr_){
    include("cn_usuarios.php");                                        
    $sql = "  SELECT  sTitulo, sSubtitulo, sDescripcion, sRuta ,sLeccion
              FROM cb_lecciones WHERE eNivel ='".$nivel."'  ORDER BY iConsecutivo";              
    $result = mysql_query($sql, $dbconn);
    if (mysql_num_rows($result) > 0) {
        while ($Recordset = mysql_fetch_array($result)) {
            $arr_[] = array("titulo" => $Recordset['sTitulo'],  
                            "subtitulo" => $Recordset['sSubtitulo'],
                            "leccion" => $Recordset['sLeccion'],
                            "descripcion" => $Recordset['sDescripcion'],
                            "ruta" => $Recordset['sRuta'],
                            );
        }
    }
    mysql_free_result($result);                         
    mysql_close($dbconn);                             
  }
  function getRetosNivelUsuario($nivel,$leccion, &$arr_){
    include("cn_usuarios.php");                                        
    $sql = "  SELECT  sTitulo, sSubtitulo, sDescripcion, sRuta
              FROM cb_retos WHERE eNivel ='".$nivel."'  ORDER BY iConsecutivo";              
    $result = mysql_query($sql, $dbconn);
    if (mysql_num_rows($result) > 0) {
        while ($Recordset = mysql_fetch_array($result)) {
            $arr_[] = array("titulo" => $Recordset['sTitulo'],  
                            "subtitulo" => $Recordset['sSubtitulo'],
                            "descripcion" => $Recordset['sDescripcion'],
                            "ruta" => $Recordset['sRuta'],
                            );
        }
    }
    mysql_free_result($result);                         
    mysql_close($dbconn);                             
  } 
  function ConsultaProgramaPentragrama($modulo, &$arr_){
      include("cn_usuarios.php");                                        
      $sql = "  SELECT  sCveModulo, eModulo, sLeccion, sSubtemas, iNumeroLeccion, sRutaPDF, sRutaVideo, eMes
                FROM cb_virtuosso_lecciones WHERE eModulo ='".$modulo."'  ORDER BY iConsecutivo";              
      $result = mysql_query($sql, $dbconn);
      
      if (mysql_num_rows($result) > 0) {
        while ($Recordset = mysql_fetch_array($result)) {
            $arr_[] = array("cve_modulo" => $Recordset['sCveModulo'],  
                            "modulo" => $Recordset['eModulo'],
                            "leccion" => $Recordset['sLeccion'],
                            "subtemas" => $Recordset['sSubtemas'],              
                            "numeroLeccion" => $Recordset['iNumeroLeccion'],
                            "rutaPDF" => $Recordset['sRutaPDF'],
                            "mes" => $Recordset['eMes'],
                            "rutaVideo" => $Recordset['sRutaVideo'],
                            "consecutivo" => $Recordset['iConsecutivo'],
                            );
        }
      }
      mysql_free_result($result);                         
      mysql_close($dbconn);   
      
  }
?>
