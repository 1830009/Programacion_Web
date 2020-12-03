<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../header/css/styles.css"> 
    
   
</head>
<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../inicio.html" class="text-gray" style="text-decoration:none; color:  #3f4954;">MARKETART</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items" style="padding-left:700px;">
                    <li class="nav-link">
                        <a href="../inicio.html" style="text-decoration:none;">Inicio</a>
                    </li>
                    <li class="nav-link">
                        <a href="index.php" style="text-decoration:none;">Productos</a>
                    </li>
                    <li class="nav-link">
                        <a href="../pueblos/index.html" style="text-decoration:none;">Municipios</a>
                    </li>
                    <li class="nav-link">
                        <a href="../Ayuda/ayuda.html" style="text-decoration:none;">Ayuda</a>
                    </li>
                    <li class="nav-link">
                        <a href="../Registro/Registro/Direccion.html" style="text-decoration:none;">Mi perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<body class="cuerpo">
    <h1 class="h1_ti">Productos</h1>
    <div class="dis">
	<main class="menu_neg">
		<table>
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody id="t_Prod">
				<?php 
					require('conection.php');
					
					$conexion = conectarBD('localhost','root','','market');
					$consulta= "SELECT id_producto,nombre,precio,municipio,tipo,descripcion,imagen,extension,stock,sexo FROM producto";
					$registro=mysqli_query($conexion,$consulta);
					
					$i=0;
					if($registro->num_rows>0){
						while($fila = $registro -> fetch_assoc()){
							$img = FObtenerMime($fila['extension']);
							if($i==0){
								echo "<tr>";
							}
									echo "<td class='item'><label class='item-title'>" . $fila["nombre"]."</label><br>";
										echo "<img class='item-image' src='data:image;base64,".base64_encode($fila['imagen'])."' alt='Image' >";
										echo "<br><label class='item-price'>$".$fila["precio"]."</label>";
										echo "<br><label>".$fila["tipo"]."</label>";
										echo "<br><label>".$fila["sexo"]."</label>";
										echo "<br><button class='item-button btn btn-primary addToCart'>Carrito +</button>";
								        echo "</div>";
                                	echo  "</td>";

							if($i==2){
								echo "</tr>";
								$i=(-1);
							}
							$i=$i+1;
						}
				}
					desconectar($conexion);
				?>
			</tbody>
		</table>
	</main>
<aside>
<section class="shopping-cart">
        <div class="contenedor">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- final carrito -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>
            

            <!-- Total -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0">Total</p>
                        <p class="ml-4 mb-0 shoppingCartTotal" id="costo">$0</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                            <div class="toast-header">
                                <span>✅</span>
                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body text-white">
                                Se aumentó correctamente la cantidad
                            </div>
                        </div>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- total -->

            <!-- START MODAL COMPRA
            <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="comprarModalLabel">Gracias por su compra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Pronto recibirá su pedido</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- END MODAL COMPRA -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

        <script src="tienda.js"></script>
        </div>

    </section>
</aside>
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
                <p style="color:white;">En nuestras redes sociales</p>
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

