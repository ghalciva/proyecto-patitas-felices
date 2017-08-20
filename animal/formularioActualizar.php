<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Actualizar </title>
</head>
<body>

<?php
$nombre= $_POST["nombre"];
$idmascota= $_POST["idmascota"];

echo "Edicion en proceso... </br>";
include_once("AnimalCollector.php");
$DemoCollectorObj= new AnimalCollector();
$DemoCollectorObj->updateDemo($idmascota,$nombre,$edad,$raza,$fecha_nac,$sexo,$color);
echo "id: " .$idmascota. " actualizado a: " .$nombre. " </br>";
?>
<a href="formularioEditar.php"> Volver </a>
</body>
</html>
