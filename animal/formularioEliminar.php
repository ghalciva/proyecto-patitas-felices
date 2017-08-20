<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Eliminar </title>
</head>
<body>

<?php
$id=$_GET["id"];

echo "Borrando... </br>";
include_once("AnimalCollector.php");
$DemoCollectorObj= new AnimaloCollector();
$DemoCollectorObj->deleteDemo($id);
echo "id: " .$id. " eliminado";
?>
<br>
<a href="formularioEditar.php"> Volver </a>
</body>
</html>
