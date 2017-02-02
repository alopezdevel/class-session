<?php
echo "<pre>";
try{
    $mysql_host = "31.22.4.142";
    $mysql_database = "websolu2_class_session";
    $mysql_username = "websolu2_alberto";
    $mysql_password = "05100248";
    //$dbconn = mysql_connect($mysql_host, $mysql_username, $mysql_password);
    $dbconn = new PDO("mysql:host=$mysql_host;dbname=$mysql_database",$mysql_username,$mysql_password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION );
    $dbconn->exec("SET NAMES 'utf8'");
}catch (Exception $e){
    echo 'No se pudo establecer conexion';
    exit;
    
}                                                                   

try{
    $result = $dbconn->query(" SELECT  ssTitulo, sSubtitulo, sDescripcion, sRuta ,sLeccion FROM cb_lecciones ");
}catch (exception $e){
    
    echo "<br>";
    echo $e->getMessage();
    exit;    
}


$arr = ($result->fetchAll(PDO::FETCH_ASSOC));
print_r($arr);

?>
