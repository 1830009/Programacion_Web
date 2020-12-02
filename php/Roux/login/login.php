<?php 
	require 'loginbd.php';
	$valido=false;
	if(isset($_POST['aceptar'])){
		$usuario=$_POST['usuario'];
		$pass=$_POST['pass'];

		if(!validarUser($usuario,$pass,$conexion)){
			echo "No es VALIDO <br>";
			$valido=false;
		}
		else{
			session_start();
			$valido=true;
			$_SESSION['usuario']=$usuario;
			header('Location: ../index.php');
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Acceso</title>
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
 	<div class="cont-log">
 		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" accept-charset="utf-8">
 			<h1>Iniciar Sesión</h1>
 			<br>
 			<input type="text" name="usuario" placeholder="Usuario" required="Ingresa un Usuario">
 			<br><br>
 			<input type="password" name="pass" placeholder="Contraseña" required="Ingresa la Contraseña Correspondiente" required="">
 			<br><br>
 			<input id="b_iniciar" type="submit" name="aceptar" value="Ingresar">

 			<?php 
 				if(!$valido && isset($_POST['aceptar']))
 					echo '<p class="alerta"> Usuario y/o Contraseña NO valido </p>';
 			 ?>
		</form>
 		
 	</div>
 </body>
 </html>