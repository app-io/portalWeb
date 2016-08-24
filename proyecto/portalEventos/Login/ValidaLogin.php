<?php

include('./ini/conexion.ini.php');

$conexion=conectarBD();

$username = $_POST['username'];
$password = $_POST['password'];

 $UsuarioBd = "Select Password from TABLAQLA Where Usuario='$username' ";

$Consultaqla = $conexion->query($UsuarioBd);
 
if($Consultaqla->num_rows > 0){
   if($Consultaqla == $password){
   	echo "Ta nitido el Usuario Maurizoooon";
}
	 
	
}else
	{
	echo "Usuario qlo malo";
	}