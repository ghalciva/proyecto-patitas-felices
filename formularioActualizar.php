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
$fecha_reserva= $_POST["fecha_reserva"];
$id_reserva= $_POST["id_reserva"];

echo "Modificación en proceso... </br>";
include_once("reservaCollector.php");
$DemoCollectorObj= new reservaCollector();
$DemoCollectorObj->updateDemo($id_reserva,$fecha_reserva,$direccion);
echo "id_reserva: " .$id_reserva. " actualizado a: " .$fecha_reserva. " </br>";
?>
<a href="formularioEditar.php"> Volver </a>
</body>
</html>
