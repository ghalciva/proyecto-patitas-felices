
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Patitas felices</title>
  </head>
  <body>

<?php

$nombre=$_POST["nombre"];
$fecha=$_POST["fecha"];
$raza=$_POST["raza"];
$sexo=$_POST["sexo"];
$edad=$_POST["edad"];
$color=$_POST["color"];
$imagen=$_POST["imagen"];

echo 'Tu mascota ' . htmlspecialchars($nombre) . ' ha sido registrada!';

include_once("AnimalCollector.php");

$AnimalCollectorObj = new AnimalCollector();
$AnimalCollectorObj->insertDemo($nombre,$fecha,$raza,$sexo,$edad,$color,$imagen);

echo "Hecho! </br>";
?>
<a href="index.php">Regresar</a>
       
</body>
</html>
