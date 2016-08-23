<?php 
//se incluye las propuiedades de conexion
include('./ini/conexion.ini.php');

$conexion=conectarBD();
?>
<html>
<head>
<title>Portal Eventos - Appio</title>
</head>
<body>
	<?php 
		/* comprobar la conexion del servidor */
		if (mysql_ping($conexion)) 
		{
		    printf ("¡La conexión está bien!\n");
		}
		/* cerrar la conexion */
		desconectarBD($conexion);
	?>
</body>
</html>