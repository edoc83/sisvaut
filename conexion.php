<?php
	$servidor="localhost";
	$usuario="root";
	$clave="disedesarrollo2011";
	$basededatos="sisvaut";
	$conexion=mysql_connect($servidor, $usuario, $clave) or die("Error en conexion a la base de datos...".mysql_error()); 
			  mysql_select_db($basededatos, $conexion) or die(mysql_error());
?>