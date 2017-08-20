<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Cancelar reserva </title>
</head>
<body>

<?php
$id=$_GET["id"];

echo "Borrando... </br>";
include_once("reservaCollector.php");
$DemoCollectorObj= new ReservaCollector();
$DemoCollectorObj->deleteDemo($id);
echo "id: " .$id. " eliminado";
echo "Consula cancelada";
?>
<br>
<a href="formularioEditar.php"> Volver </a>
</body>
</html>
