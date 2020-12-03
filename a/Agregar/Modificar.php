<!DOCTYPE html>
<html>
    <head>
        <title>AgrProducto</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
        <!--<script src="Direcc.js" type="text/javascript"></script>-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="../header/css/styles.css">
    </head>
	<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../inicio.html" class="text-gray">MARKETART</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="../inicio.html">Inicio</a>
                    </li>
                    <li class="nav-link">
                        <a href="../Productos/index.php">Productos</a>
                    </li>
                    <li class="nav-link">
                        <a href="index.html">Municipios</a>
                    </li>
                    <li class="nav-link">
                        <a href="../Ayuda/ayuda.html">Ayuda</a>
                    </li>
                    <li class="nav-link">
                        <a href="../Registro/Registro/Direccion.html">Mi perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    		
    
    <body>
    	<main>
		<h1 class="tc">Modificar producto</h1>
            <?php
                require 'conection.php';
                    $conexion = conectarBD('localhost','root','','market');
                    $consulta= 'SELECT * FROM producto WHERE id_producto='.$_POST["id"];
                    $registros=mysqli_query($conexion,$consulta);
                     //var_dump($registros);
                    if($registros->num_rows>0){
                        $fila = $registros-> fetch_assoc();
                ?>
			<div class="direccion-reg">
			<h3> Obligatorio: <label class="red-reg">* </label> </h3>
    		<form enctype="multipart/form-data" action="mod_conf.php" method="POST" name="form1">
			<label>Nombre:</label><label class="red-reg">* </label>
    		<br>
    		<?php echo '<input id="inombre" type="text" name="nombre" placeholder="Nombre" value="'.$fila['nombre'].'" require>' ?>
    		<br><br>
    		<label>Precio:</label><label class="red-reg">* </label>
    		<br>
    		<?php  echo '<input id="icp" type="number" name="precio" step="0.1" value="'.$fila["precio"].'">'?>
    		<br><br>
    		<label>Tipo:</label><label class="red-reg">* </label>
    		<br>    		
            <select name="tipo" >
                <?php 
                echo '<option value="'.$fila["tipo"].'">'.$fila["tipo"].'</option>';
                 require 'tipo.php'?>
			</select>
    		<br><br>
    		<label>Sexo:</label><label class="red-reg">* </label>
    		<br>
    		<select name="sexo">
                <?php echo '<option value="'.$fila["sexo"].'">'.$fila["sexo"].'</option>';?>
			<option value="Hombre">Hombre</option>
			<option value="Mujer">Mujer</option>
            <option value="Unisex">Unisex</option>
			</select> 
    		<br><br>
			<label>Municipio:</label><label class="red-reg">* </label>
    		<br>
    		<select name="municipio">
            <?php echo '<option value="'.$fila["municipio"].'">'.$fila["municipio"].'</option>'; ?>
			<?php require 'municipio.php'?>
			</select>
    		<br><br>
    		<label>Stock</label><label class="red-reg">* </label>
    		<br>
    		<?php echo '<input id="istock" type="number" name="stock" value="'.$fila["stock"].'">'?>
    		<br><br>
			<label>Imagen:</label><label class="red-reg" >* </label>
    		<br>
    		<input id="iImg" type="file" accept="image/png, image/jpeg, image/jpg" name="img" >
    		<br><br>
    		<label>Descripción:</label>
    		<br>
    		<?php  echo '<textarea id="ireferencia" name="desc" placeholder="Escribe aqui...">'.$fila["descripcion"].'</textarea>' ?>
			<br><br>
            <?php  echo '<input type="hidden" name="id" value="'.$_POST["id"].'" >'; ?>
			<input class="buutton" type="submit" value="Modificar"> </input>
			</form>
    	</div>
        <?php 
            }
         ?>
    	</main>
    </body>
	<footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>Acerca de nosotros</h2>
                <p>Somos una empresa dedicada a apoyar a los negocios locales, ofreciendo servicios que les ayuden en sus ventas
                    y no sufren pérdidas económicas. 
                </p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Contáctanos</h2>
                <p>Ingrese su correo electronico</p>
                <div class="form-element">
                    <input type="text" placeholder="Email">
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="../header/instagram/thumb-card3.png" alt="insta1">
                    <img src="../header/instagram/thumb-card4.png" alt="insta2">
                    <img src="../header/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="../header/instagram/thumb-card6.png" alt="insta4">
                    <img src="../header/instagram/thumb-card7.png" alt="insta5">
                    <img src="../header/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Siguenos</h2>
                <p>En nuestras redes sociales</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 Todos los derechos reservados | Hecho por
                <a href="" target="_black">MARKETVIC<i class="fab fa-youtube"></i>
                    ©</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
</html>
