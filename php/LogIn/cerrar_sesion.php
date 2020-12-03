<?php 
	
	require 'sesion.php';
	$_SESSION = array();
	session_destroy();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cerrar</title>
 	<link rel="stylesheet" type="text/css" href="">
 </head>
 <body>
 	<p>
 		<H1>Sesión Cerrada, Vuelva Pronto</H1>
 		<a href="login.php" >Log In de Nuevo</a>
 	</p>
 </body>
 </html>