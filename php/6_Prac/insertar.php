<?php 
	require('conection.php');
	$conexion= conectarBD('localhost','root','','mundo');
	$paises= ['Edmonton','Calgary','Lethbridge'];

	for($i=0;$i<3;$i++){
		$consulta = "INSERT INTO municipio values('','".$paises[$i]."',12)";
		echo $consulta;
		mysqli_query($conexion,$consulta);
	}
	desconectar($conexion);



 ?>