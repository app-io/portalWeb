<?php 
//se incluye las propuiedades de conexion
require_once('./ini/configuracion.ini.php');
require_once('./ini/conexion.ini.php');
$conexion=conectarBD();
?>
<html>
<head>
	<title>Portal Eventos - Appio</title>
</head>
	<frameset framespacing="0" border="0" frameborder="0" cols="240,*" rows="*">
		<frame noresize="" border="2" scrolling="AUTO" name="menu" src="menu.php"></frame>
		<frame name="central" border ="2" 	src="home.php"></frame>
	</frameset>
</html>