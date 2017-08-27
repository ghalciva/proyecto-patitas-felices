<?php
include_once('animal.php');
include_once('Collector.php');
class adoptaCollector extends Collector
{
  function showDemos($id_mascota) {
    $rows = self::$db->getRows("SELECT * FROM animal ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new animal($c{'id_mascota'},$c{'raza'},$c{'color'},$c{'sexo'},$c{'edad'},$c{'nombre'},$c{'fecha_nacimiento'},$row[0]{'imagen'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_mascota) {
    $row = self::$db->getRows("SELECT * FROM animal  where id_mascota= ?" ,array("{$id_mascota}")); 
$ObjDemo =new animal($row[0]{'raza'},$row[0]{'color'},$row[0]{'sexo'},$row[0]{'nombre'},$row[0]{'fecha_nacimiento'},$row[0]{'edad'},$row[0]{'id_mascota'},$row[0]{'imagen'});       
    echo "linea 1";
    return $ObjDemo;        
  }
function update($id_mascota,$nombre) {
$row = self::$db->updateRow("UPDATE public.animal SET nombre = ? where id_mascota= ?" ,array("{$nombre}",$id_mascota));
}

function delete($id_mascota) {
$row = self::$db->deleteRow("DELETE FROM animal where id_mascota =? " ,array("{$id_mascota}"));
}
function createDemo($nombre) {
$insertrow = self::$db->insertRow("INSERT INTO public.animal (nombre) values (?)", array ("{$nombre}"));

}

}
?>

