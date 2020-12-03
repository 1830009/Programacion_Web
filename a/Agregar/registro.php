<?php
				require('conection.php');
				$conexion= conectarBD("localhost","root","","market");
				
		if(ISSET($_POST['nombre']))
			if(ISSET($_POST['precio']))
		 		if(ISSET($_POST['municipio'])) 
					if(ISSET($_POST['desc']))
						//if(ISSET($_FILES['img'])) 
							if(ISSET($_POST['stock'])){
								$nombre = $_POST['nombre']; 
								$precio = $_POST['precio']; 
								$municipio= $_POST['municipio'];
								$tipo = $_POST['tipo']; 
								$desc= $_POST['desc']; 
								$img= $_FILES['img']; 
								$stock= $_POST['stock']; 
								$sexo= $_POST['sexo'];
								$tmp = $img['tmp_name'];
								$fname = $img['name'];
								$fext = substr(strrchr($fname, '.'),1);
								$fp = fopen($tmp,'rb');
								$imgbin = fread($fp,filesize($tmp));
								$imgbin = addslashes($imgbin);
								fclose($fp);
								

		$consulta ="INSERT INTO producto values(NULL,'$nombre',$precio,'$municipio','$tipo','$desc','$imgbin','$fext',$stock,'$sexo')";
    							if(mysqli_query($conexion,$consulta)){
    								?>
    						
								<html>
								<link rel="stylesheet" type="text/css" href="style.css">
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
						}

						?>
	