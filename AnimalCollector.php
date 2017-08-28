<?php

include_once('Animal.php');
include_once('CollectorA.php');

class AnimalCollector extends CollectorA
{
  //muestra los datos
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM animal ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Animal($c{'idmascota'},$c{'nombre'},$c{'edad'},$c{'raza'},$c{'fecha'},$c{'sexo'},$c{'color'},$c{'imagen'});
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
    $insertrow = self::$db->getRows("UPDATE public.animal SET nombre= ? edad= ? raza= ? fecha= ? sexo= ? color= ? imagen= ? WHERE idmascota= ? ", array("{$nombre}",$id));        
  }

  //elimina los datos
  function deleteDemo($id) {
    $deleterow = self::$db->getRows("DELETE from public.animal WHERE idmascota= ? ", array("$id"));        
  }

  //guarda los datos ingresador
  function insertDemo($nombre,$fecha,$raza,$sexo,$edad,$color,$imagen) {
    $insertrow = self::$db->getRows("INSERT INTO public.animal (nombre) (fecha) (raza) (sexo) (edad) (color) (imagen) VALUES (?) ",  array("{$nombre}","{$fecha}","{$raza}","{$sexo}","{$edad}","{$color}","{$imagen}"));
  }

}
?>

