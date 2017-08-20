<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Editar reserva </title>
</head>
<body>

<?php

$id= $_GET["id"];
echo "valor de id es ". $id;
include_once("reservaCollector.php");
include_once("reserva.php");
$DemoCollectorObj = new reservaCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar reserva</h2>
<form action="formularioActualizar.php" method="post">
  <p> Id reserva: <input type="text" name="id_reserva" value="<?php echo $ObjDemo->getId_Reserva(); ?>" readonly /> </p>
  <p> Fecha reserva: <input type="text" name="fecha_reserva" value="<?php echo $ObjDemo->getFecha_Reserva(); ?>" autofocus required/> </p>
  <p> Direccion: <input type="text" name="direccion" value="<?php echo $ObjDemo->getDireccion(); ?>" autofocus required/> </p>
  <input type="submit" value="Guardar"/>
  <a href="index.html">Cancelar</a>
</form>
 
</body>
</html>
