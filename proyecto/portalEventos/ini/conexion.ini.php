<?php
function conectarBD()
{
	$conexion = mysql_connect(HOST_BD,USUARIO_BD,CONTRASENA_BD);
	mysql_select_db(NOMBRE_BD,$conexion) or die('No Se Logro Conectar a La Base De Datos');
	return $conexion;
}
function desconectarBD($conexion)
{
	mysql_close($conexion);
}

?>