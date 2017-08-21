<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> salir </title>
	</head>
	<body>
<?php
if(isset($_SESSION['MiSesion'])){
	session_destroy();
	echo"se ha destruido session <br/>";
	echo "<a href='index.php'>Volver</a>";
		
}else{
	echo "ERROR...... <br/>";
	echo "<a href='index.php'>Volver</a>";
}
?>	
	</body>
</html>
