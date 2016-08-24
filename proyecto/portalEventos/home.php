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

<body>

	este es el home, la data de este archivo se ce en home.php <br><br>
	
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