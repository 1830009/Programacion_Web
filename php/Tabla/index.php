<?php
$tabla =7;
$resultados =15;
$resultado=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabla multiplicar</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <table border="2">
        <tr>
            <th>Tabla</th>
            <th>X</th>
            <th>Numero</th>
            <th>=</th>
            <th>Resultado</th>
        </tr>
        <tbody>
        <?php
            for($i=1;$i<=$resultados;$i++){
                $resultado=$tabla*$i;
        ?>
            <tr>
                <td><?php
                    echo "$tabla";
                ?></td>
                <td>x</td>
                <td><?php
                    echo "$i";
                ?></td>
                <td>=</td>
                <td><?php
                    echo "$resultado";
                ?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>