<?php

$HOST_BD='mysql4.000webhost.com';
$USUARIO_BD='a9794326_appio';
$CONTRASENA_BD='appio2016';
$NOMBRE_BD='a9794326_appio';
function conectarBD()
{
	global $HOST_BD,$USUARIO_BD,$CONTRASENA_BD,$NOMBRE_BD;
	$conexion = mysql_connect($HOST_BD,$USUARIO_BD,$CONTRASENA_BD);
	mysql_select_db($NOMBRE_BD,$conexion) or die('No Se Logro Conectar a La Base De Datos');
	return $conexion;
}
function desconectarBD($conexion)
{
	mysql_close($conexion);
}

?>