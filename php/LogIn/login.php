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
			header('Location: index.php');
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Acceso</title>
 </head>
 <body>
 	<div class="cont-log">
 		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" accept-charset="utf-8">
 			<input type="text" name="usuario" placeholder="Usuario" required="Ingresa un Usuario">
 			<input type="password" name="pass" placeholder="Contraseña" required="Ingresa la Contraseña Correspondiente" required="">
 			<input type="submit" name="aceptar" value="Ingresar">

 			<?php 
 				if(!$valido && isset($_POST['aceptar']))
 					echo '<p class="alerta"> Usuario y/o Contraseña NO valido </p>';
 			 ?>
		</form>
 		
 	</div>
 </body>
 </html>