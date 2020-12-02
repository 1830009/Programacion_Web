<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Registrar Nuevo Libro</h1>
	<main>
	<form action="index.php" method="GET">
		<div>
			<label for="titulo">Título</label>
			<input type="text" name="titulo" required>
		</div>
		<div>
			<label for="autor">Autor</label>
			<input type="text" name="autor" required>	
		</div>
		<div class="edit">
			<label for="Editorial">Editorial</label>
			<input type="text" name="editorial" required>	
		</div>
		<div>
			<label for="precio">Precio</label>
			<input name="precio" type="number" step="0.1">	
		</div>
		<div>
			<label for="enlace">Enlace</label>
			<input name="enlace" type="text" required>	
		</div>
		<input type="submit" value="Aceptar">
	
	</form>
	</main>
</body>
</html>