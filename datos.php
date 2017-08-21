<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> Login </title>
	</head>
	<body>
		<section>
			<?php
				$usuario $_POST['usuario'];
				$clave $_POST['clave'];

				echo "usuario:" , $usuario , "   y clave es:", $clave;
				echo "<a href='index.php'>VOLVER</a>"
			?>
		</section>

	</body>
</html>

