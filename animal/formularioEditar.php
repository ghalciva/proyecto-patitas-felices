<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Editar </title>
</head>
<body>

<?php

$id= $_GET["id"];
echo "valor de id es ". $id;
include_once("AnimalCollector.php");
include_once("Animal.php");
$DemoCollectorObj = new AnimalCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar</h2>
<form action="formularioActualizar.php" method="post">
  <p> Id Mascota: <input type="text" name="idmascota" value="<?php echo $ObjDemo->getIdMascota(); ?>" readonly /> </p>
  <p> Nombre: <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required/> </p>
  <p> Edad: <input type="text" name="edad" value="<?php echo $ObjDemo->getEdad(); ?>" autofocus required/> </p>
  <p> Raza: <input type="text" name="raza" value="<?php echo $ObjDemo->getRaza(); ?>" autofocus required/> </p>
  <p> Fecha de nacimiento: <input type="text" name="fecha_nac" value="<?php echo $ObjDemo->getFecha_Nac(); ?>" autofocus required/> </p>
  <p> Sexo: <input type="text" name="sexo" value="<?php echo $ObjDemo->getSexo(); ?>" autofocus required/> </p>
  <p> Color: <input type="text" name="color" value="<?php echo $ObjDemo->getColor(); ?>" autofocus required/> </p>
  <input type="submit" value="Guardar"/>
  <a href="index.php">Cancelar</a>
</form>
 
</body>
</html>
