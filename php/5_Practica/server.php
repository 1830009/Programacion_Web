<?php

	$server='localhost';
	$user= 'root';
	$pass= '';
	$BD= 'Ejemplo';

	/**$conect= mysqli_connect($server,$user,$pass,$BD);

	$consulta= 'SELECT id_lib,titulo,autor,editorial FROM personas WHERE id=1';

	$res = mysqli_query($conexion,$consulta);

	try{
	if($res ->num_rows>0){
		while($fila as $resultado->fetch_assoc()){
			$respuesta[]=array(
				'id'=>$fila['id'],
				'nombre'=>$fila['nombre'],
				'telefono'=>$fila['telefono'],
				'direccion'=>$fila['direccion']
			)
		}
	}

	}catch(Exception e){
	$rerspuesta = arrray('error'=>$e.getMessage);
}*/
	$tecnologias= array(
		'frontend'=> 'html5,ccs3,javascript',
		'backend'=>'php,mysql,apache',
		'fullstack'=> 'html5,css3,javascript,php,mysql,apache'
	);
	//echo json_encode($respuesta);
	echo json_encode($tecnologias);
	//mysqli_close($conexion);
  ?>