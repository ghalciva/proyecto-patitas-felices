<?php
include_once('adoptar.php');
include_once('Collector.php');
class adoptaCollector extends Collector
{
  function showadoptar() {
    $rows = self::$db->getRows("SELECT * FROM animal ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_mascota'},$c{'raza'},$c{'color'},$c{'sexo'},$c{'edad'},$c{'nombre'},$c{'fecha_nacimiento'});
      array_push($arrayadoptar, $aux);
    }
    return $arrayadoptar;        
  }
function showadoptar($id_mascota) {
    $row = self::$db->getRows("SELECT * FROM animal  where id_mascota= ?" ,array("{$id_mascota}")); 
$ObjDemo =new adoptar($row[0]{'id_mascota'},$row[0]{'nombre'});       
    echo "linea 1";
    return $ObjDemo;        
  }

}
?>

