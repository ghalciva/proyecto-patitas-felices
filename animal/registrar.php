<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Registro </title>
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

foreach ($DemoCollectorObj->showDemos() as $c){ 
  echo "<div>";
  echo $c->getIdMascota() . "  && " .$c->getNombre();                                     
  echo " <a href='formularioEditar.php?id=". $c->getIdMascota() . "'>Editar Mascota</a> " ;
  echo " <a href='formularioEliminar.php?id=". $c->getIdMascota(). "'>Eliminar Mascota</a>";
  echo "</div>"; 
}

else{
?>

<h2>Registra tu mascota</h2>
<form action=".php" method="post">
  <p> Nombre: <input type="text" name="nombre" value="" autofocus /> </p>
  <p> Edad: <input type="text" name="edad" value="" autofocus required/> </p>
  <p> Raza: <input type="text" name="raza" value="" autofocus required/> </p>
  <p> Fecha de nacimiento: <input type="text" name="fecha_nac" value="" autofocus required/> </p>
  <p> Sexo: <input type="text" name="sexo" value="" autofocus required/> </p>
  <p> Color: <input type="text" name="color" value="" autofocus required/> </p>
  <input type="submit" value="Guardar"/>
  <a href="index.php">Cancelar</a>
</form>

<?php } ?>

</body>
</html>
