<?php 
	
	require 'sesion.php';
	$_SESSION = array();
	session_destroy();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cerrar</title>
 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>

 <div class="contenido">
		<header >
			<div class="slogo"><img src="../img/ralogo_monogram.png" class="slogo1">
				<!--<div class="slogan">-->
					<p>Roux Academy <br>
					Art • Media • Design</p>
				</div>

			<div>
				<h1 class="t-principal"> Roux Academy 2016 Art Conference</h1>
				<p>
					Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.
				</p>
			</div>
			</header>
 <body>
 	<p>
 		<H1>Sesión Cerrada... <br>Vuelva Pronto</H1>
 		<button id="b_login" name="b_login"><a href="login.php" >LogIn de Nuevo</a></button>
 	</p>
 </body>
 </html>