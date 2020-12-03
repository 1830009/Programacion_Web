<?php 
	require 'conection.php';
    $conexion = conectarBD('localhost','root','','market');
   
    $nombre = $_POST['nombre']; 
	$precio = $_POST['precio']; 
	$municipio= $_POST['municipio'];
	$tipo = $_POST['tipo']; 
	$desc= $_POST['desc']; 
	$stock= $_POST['stock']; 
	$sexo= $_POST['sexo'];

		$img= $_FILES['img']; 
		$tmp = $img['tmp_name'];
		$fname = $img['name'];
		if($tmp!=null){
		$fext = substr(strrchr($fname, '.'),1);
		$fp = fopen($tmp,'rb');
		$imgbin = fread($fp,filesize($tmp));
		$imgbin = addslashes($imgbin);
		fclose($fp);
		$consulta=	"UPDATE producto SET nombre='$nombre',precio=$precio,municipio='$municipio',tipo='$tipo',descripcion='$desc',imagen='$imgbin',extension='$fext',stock=$stock,sexo='$sexo' WHERE id_producto=".$_POST["id"];
		
	}else{
		$consulta=	"UPDATE producto SET nombre='$nombre',precio=$precio,municipio='$municipio',tipo='$tipo',descripcion='$desc',stock=$stock,sexo='$sexo' WHERE id_producto=".$_POST["id"];
	}


    if(mysqli_query($conexion,$consulta)){
    	?>
		<script>
			window.alert('Datos Guardados Correctamente!');
			window.open("index.php");
			close();
		</script>
		</html>

	<?php
	}
	else{
	?>
		<html>
		<script>
			
			window.alert('Posibles Errores \n -Verifica que la Imagen no sobrepase los 2MB'+
				'\n-Escribir en los campos obligatorios');
			window.open("index.php");
			close();
		</script>
		</html>
	<?php
			}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
