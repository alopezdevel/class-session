<?php
$mysql_host = "31.22.4.142";
$mysql_database = "websolu2_class_session";
$mysql_username = "websolu2_alberto";
$mysql_password = "05100248";

$dbconn = mysql_connect($mysql_host, $mysql_username, $mysql_password);
if (!$dbconn) {
    //echo '<script language="javascript"> alert (\'No se estableci� conexi�n con el servidor de MySQL. Favor de consultar con el departamento de Global PCNet. \')</script>';
    die();
}                  
$dbselect = mysql_select_db($mysql_database, $dbconn);
if (!$dbselect) {
    echo '<script language="javascript"> alert (\'No se estableci� conexi�n con la base de datos. \')</script>';
    //echo '<script language="javascript"> alert (\'Global PCNet est� subiendo una nueva versi�n del sistema. Favor de intentar conectarse m�s tarde. \')</script>';
    die();
}
?>
