<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Confirmar Compra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../header/css/styles.css">
    <script src="tienda.js"></script>
</head>

<body class="b_conf">
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
                        <a href="../pueblos/index.html">Municipios</a>
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
<div class="dir">
	
	<h1 class="ti">Agregar dirección</h1>
	<h3> Obligatorio <label class="red-reg">* </label> </h3>
	<form action="tarjeta/index.html" method="POST" accept-charset="utf-8">
		<label  class="tex">Estado* </label>
		
		<input type="text" name="col" placeholder="Estado" class="inp" required>
		<br><br>
		<label  class="tex">Municipio* </label>
	
		<input type="text" name="col" placeholder="Municipio" class="inp" required>
		<br><br>
		<label  class="tex">Código postal* </label>
	
		<input type="number" name="col" placeholder="C.P" class="inp" required maxlength="5">
		<br><br>

		<label  class="tex">Colonia* </label>
	
		<input type="text" name="col" placeholder="Colonia" class="inp" required>
		<br><br>
		
		<label class="tex">Calle* </label>
		<br>
		<input type="text" name="calle" placeholder="Calle" class="inp" required>
		<br><br>

		<div class="num">
	    		
	    		<label>Número exterior*</label>
	    		
				<input id="inumExt" type="number" name="num_ext" placeholder="Número exterior" required maxlength="5" class="nums">
				
	    		<label>Número interior</label>
	    		
	    		<input id="inumInt" type="number" name="num_int" placeholder="Número interior" maxlength="5" class="nums">
    		</div>
			<br><br>

			<label>¿Entre que calles se encuentra?</label>
			<br><br>
			<label>Calle 1</label>
			<input type="text" name="calle" placeholder="Calle" class="inp">
			<br><br>

			<label  class="tex">Calle 2 </label>
	
			<input type="text" name="col" placeholder="Calle" class="inp">
			<br><br>
    		
    		<label>Referencias</label>
    		<br>
    		<textarea id="ireferencia" name="referencias" placeholder="Escribe aqui..."></textarea>
			<br><br>

		<button type="" onclick="confirma()" class="btn_dire">Agregar dirección</button>
		<button type="" onclick="confirma()" class="btn_en">Entregar en la direccion actual</button>

		<!--<input type="submit" value="Agregar Dirección" name="">-->

	</form>
</div>

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