
<!DOCTYPE html>
<html>
<head>
        <title>Productos</title>
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
   

    <body class="ibody">
        <main class="indx"> 
        <h1 class="tc">Administración de productos</h1>
            <div class="tabla"> 
           
        	<table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Municipio</th>
                    <th>Tipo</th>
                    <th>Stock</th>
                    <th>Sexo</th>
                    <th>Accion</th>
                </tr>
                <?php  
                    require 'conection.php';
                    $conexion = conectarBD('localhost','root','','market');
                    $consulta= 'SELECT * FROM producto';
                    $registros=mysqli_query($conexion,$consulta);
                     //var_dump($registros);
                    if($registros->num_rows>0){
                        while($fila = $registros -> fetch_assoc()){
                            echo "<tr>";    
                                    echo "<td>" . $fila["nombre"] . "</td>";
                                    echo "<td> <b id='pr'>$</b> " . $fila["precio"] . "</td>";
                                    echo "<td>" . $fila["municipio"] . "</td>";
                                    echo "<td>" . $fila["tipo"] . "</td>";
                                    echo "<td>" . $fila["stock"] . "</td>";
                                    echo "<td>" . $fila["sexo"] . "</td>";
                                    echo "<td>
                                    <form action='Modificar.php' method='POST' accept-charset='utf-8'>
                                    <input type='hidden' value='" . $fila["id_producto"] . "' name='id'>
                                    <input class='btnM' type='submit' value='Modificar' >
                                    </form>
                                    <form action='Eliminar.php' method='POST' accept-charset='utf-8'>
                                    <input type='hidden' value='" . $fila["id_producto"] . "' name='id'>
                                    <input class='btnE' type='submit' value='Eliminar'></td>
                                    </form>";

                                echo "</tr>";
                        }
                    }

                    desconectar($conexion);
                ?>  
                </form>
            </table>
            </div>
            <div class="agregarB">
                <br>
                <form action="Agregar.php" method="POST" accept-charset="utf-8">
                    <input type="submit" name="Agregar" value="+ Agregar Producto" class="buutton">
                </form>
            </div>
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