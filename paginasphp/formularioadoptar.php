<!DOCTYPE html>
<html>
<body>
<h1>adoptar mascota</h1>

<?php
$id_mascota=$_GET["id_mascota"];
echo "el id es ". $id_mascota;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
?>
<input type="submit" value="guardar"/>
</form>
</body>
</html>
