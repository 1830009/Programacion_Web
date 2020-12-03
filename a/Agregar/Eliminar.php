
<!DOCTYPE html>
<html>
<head>
        <title>Productos</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
        <!--<script src="Direcc.js" type="text/javascript"></script>-->
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <header class="head-reg">
    	<div class="titulo-reg">
    		<h1>Eliminar Producto</h1>
    	</div>
    </header>

    <body class="ibody">
        <main>
        	<script>
        	if(window.confirm("Seguro que desea Eliminar este Producto?")){
                window.open("elim_conf.php?id=<?php echo $_POST["id"]; ?>")
        	}	
        		window.open("index.php");
        		close();      
            </script>
         
        </main>
    </body>
</html>