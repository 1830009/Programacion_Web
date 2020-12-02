
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
</head>
<body>
    <div class="forml">
        <form action="pag2.php">
            <input type="text" placeholder="Titulo" name="titulo">
            <input type="number" placeholder="Paginas" name="pag">
            <br>
            <label for="Editorial">Editorial</label>
            <select name="edit" id="">
                <option value="1">McGraw-Hill</option>
                <option value="2">Trillas</option>
                <option value="3">Vid</option>
            </select>
            <br>
            <label>Genero</label>
            <select name="genero" id="">
                <option value="1">Terror</option>
                <option value="2">Comedia</option>
                <option value="3">Novela</option>
            </select>
            <br>
            <input type="text" placeholder="autor" name="autor">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>