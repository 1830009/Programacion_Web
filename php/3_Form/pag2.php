<?php
    if(ISSET($_GET["titulo"])){
        $titulo=$_GET["titulo"];
        $pag=$_GET["pag"];
        $edit=$_GET["edit"];
        $genero=$_GET["genero"];
        $autor=$_GET["autor"];
        

        echo "Titulo: $titulo <br>";
        echo "Autor: $autor <br>";
        echo "Paginas: $pag <br>";
        echo "Editorial: $edit <br>";
        echo "Genero: $genero <br>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
</head>
<body>
    
</body>
</html>