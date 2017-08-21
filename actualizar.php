<?php
 session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> ACTUALIZAR REGISTRO USUARIO</title>
	</head>
	<body>
		<p>Edicion en proceso......</p>
		<?php
		$id_usuario =$_GET["id_usuario"];
		include_once("LoginCollector.php");
		$LoginCollectorObj = new LoginCollector();
		$LoginCollectorObj->updateLogin($id_usuario);
		echo "id: ".$id_usuario." actualizado "" </br>";
		?>
		<div><a href="index.php">Volver al Inicio</a></div>
	</body>
</html>
