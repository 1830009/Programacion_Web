<?php 

	$bd='ejemplo';
	$user='root';
	$pass='';
	$server='localhost';

	
	$conexion=mysqli_connect($server,$user,$pass,$bd);
	if(!$conexion){
		die('Ocurrio un Error al intentar conectar con la BD');
	}

	function validarUser($user,$pass,$conexion){
		$query = 'SELECT 1 AS user_valido FROM usuario WHERE usuario="'.$user.'" AND pass= "'.MD5("$pass").'"';
		echo $query;
		$res = mysqli_query($conexion,$query) or die('Ha ocurrido un Error al Ejecutar la Consulta');
	
		if(mysqli_num_rows($res)==0)
			return false;
		else
			return true;
		
	}
 ?>