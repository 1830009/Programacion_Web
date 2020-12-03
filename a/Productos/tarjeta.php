<!DOCTYPE html>
<html>
<head>
	<title>Confirmar Compra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="b_conf">
<div class="tarjeta">
	<h1>Añadir Datos de Tarjeta de Credito o Debito</h1>
	<form action="fin_compra.php" method="POST" accept-charset="utf-8">
		<label>Banco: </label>
		<br>
		<select name="banco">
			<option value="Banorte">Banorte</option>
			<option value="Banamex">Banamex</option>	
		
		</select>
		<br>
		<label>Numero de Tarjeta</label>
		<br><br>
		<input type="text" name="num-tar" placeholder="1234567890">
		<br><br>

		<label>CV</label>
		<br><br>
		<input type="number" name="num_int" placeholder="Ej. 9999">
		<br><br>
		
		<label>Fecha de Vencimiento:</label>
		<br><br>
		<label>Dia</label>
		<br><br>
		<input type="number" name="num_ext" placeholder="Ej. 999">
		<br><br>

		<label>Año</label>
		<br><br>
		<input type="number" name="num_int" placeholder="Ej. 999">
		<br><br>

		<label>Codigo Postal: </label>
		<br><br>
		<input type="number" name="cp" placeholder="Ej. 99999">
		<br><br>

		
		<input type="submit" value="Agregar Dirección" name="">

	</form>
</body>
</html>