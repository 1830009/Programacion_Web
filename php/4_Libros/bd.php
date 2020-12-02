<?php

    require('conection.php');
    
    $conexion= conectarBD("localhost","root","","prog_web");
    $consulta ="select id, nombre, edad, direccion from personas where id=1";

    $registros=mysqli_query($conexion,$consulta);
    // var_dump($registros);
    if($registros->num_rows>0){
        while($fila = $registros -> fetch_assoc()){
            echo "ID: " . $fila["id"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Edad: " . $fila["edad"] . "<br>";
            echo "Direcccion: " . $fila["direccion"] . "<br>";

        }
    }

   /***  $consulta ="INSERT INTO personas() values(NULL,'Maria Gonzalez',22,'Parque de las tecnologias')";
    if(mysqli_query($conexion,$consulta)){
        echo "Se ha insertado con exito un nuevo registro <br>";
    }else{
        echo "Error: " . $consulta . " <br> " . mysqli_error($conexion) . " <br> ";
        echo "Ha ocurrido un problema al momento de insertar un registro <br>";
    }
    */

    // cerrar la conexion
    desconectar($conexion);



?>