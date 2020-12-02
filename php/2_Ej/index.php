<?php
    if(isset($_GET["tabla"])){
        if(isset($_GET["res"])){
        //var_dump($_GET);
        $tabla= (int)($_GET["tabla"]);
        $res=  (int)($_GET["res"]);    
        }
    }else{
        $tabla = 0;
        $res = 0; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF=8">
<meta name ="viewport" content="width=device-width,initial ">
<title> TABLA DE MULTIPLICAR</title> 
</head>

<body>
<form method="GET" action="">
    <input type="number" placeholder="Tabla Ej. 1" name="tabla">
    <br>
    <br>
    <input type="number" placeholder="Resultado Ej. 1" name="res">
    <br>
    <br>
    <input type="submit" value="enviar">
</form>
<?php
    if($res>0){
?>
    <table>
        <thead>
            <tr>
                <th>Tabla</th>
                <th>Numero</th>
                <th>Resultado</th>
            </tr>
            <?php
                for($i=1;$i<=$res;$i++){
                    echo "<tr><td>".$tabla."</td><td>X</td><td>".$i."</td><td>=</td><td>". ($tabla*$i)."</td></tr>";
                                }
            ?>
        </thead>
    </table>
    <?php
        }
    ?>
</body>
</html>