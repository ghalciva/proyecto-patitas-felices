<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> GUARDAR USUARIO</title>
	</head>
	<body>
<?php
$valor =$_GET["nombre"];
echo "HOLA ". $valor;

$LoginCollectorObj = new LoginCollector();
$LoginCollectorObj->createDemo($valor);
echo "valor agregado </br>"
?>
<div>
<a href="index.php">VOLVER AL INICIO </a></div>

</body>
</html>
