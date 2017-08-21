<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> cookie pagina </title>
	</head>
	<body>
		<section>
			<?php
				$_SESSION['MiSesion'] = $_GET['usuario'];
				$usuario = $_GET['usuario'];
				$clave = $_GET['clave'];

				echo "usuario:" . $usuario . "   y clave es:". $clave;
				echo "<a href='index.php'>VOLVER</a>"
			?>
		</section>

	</body>
</html>

