<?php  
    require 'conection.php';
    $conexion = conectarBD('localhost','root','','market');
    $consulta= 'DELETE  FROM producto WHERE id_producto='.$_GET["id"];
    if(mysqli_query($conexion,$consulta)){
			echo "Producto Eliminado Con exito";
	}
    else{ 
    	echo "Ha Ocurrido un Error Al Intentar Eliminar";
	}
	desconectar($conexion);
                ?>