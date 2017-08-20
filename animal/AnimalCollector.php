<?php

include_once('Animal.php');
include_once('Collector.php');

class AnimalCollector extends Collector
{
  //muestra los datos
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM animal ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Animal($c{'idmascota'},$c{'nombre'},$c{'edad'},$c{'raza'},$c{'fecha_nac'},$c{'sexo'},$c{'color'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  //muestra por id
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM animal where idmascota= ? ", array("{$id}"));        
    $ObjDemo = new Animal($row[0]{'idmascota'},$row[0]{'nombre'});
    return $ObjDemo;        
  }

  //actualiza los datos
  function updateDemo($id,$nombre,$edad,$raza,$fecha_nac,$sexo,$color) {
    $insertrow = self::$db->getRows("UPDATE public.animal SET nombre= ? edad= ? raza= ? fecha_nac= ? sexo= ? color= ? WHERE idmascota= ? ", array("{$nombre}",$id));        
  }

  //elimina los datos
  function deleteDemo($id) {
    $deleterow = self::$db->getRows("DELETE from public.animal WHERE idmascota= ? ", array("$id"));        
  }

}
?>

