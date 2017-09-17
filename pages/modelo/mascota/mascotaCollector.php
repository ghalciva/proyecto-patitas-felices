<?php

include_once('Mascota.php');
include_once("../Collector.php");

class mascotaCollector extends Collector
{
  
//mostrar mascotas
  function showMascotas() {
    $rows = self::$db->getRows("SELECT * FROM mascota");        
    $arrayanimals= array();        
    foreach ($rows as $c){
      $aux = new Mascota($c{'id_mascota'},$c{'nombre'},$c{'edad'},$c{'raza'},$c{'fecha'},$c{'sexo'},$c{'color'},$c{'imagen'});
      array_push($arrayanimals, $aux);
    }
    return $arrayanimals;        
  }
  
//eliminar mascota
  function deleteMascota($id_mascota) {
    $rows = self::$db->deleteRow("DELETE FROM mascota WHERE id_mascota= ? ", array("{$id_mascota}"));        
  }   

//insertar mascota
  function createMascota($nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("INSERT INTO mascota (nombre, edad, raza, fecha, sexo, color, imagen) VALUES (?,?,?,?,?,?,?) ", array("{$nombre}","{$edad}","{$raza}","{$fecha}","{$sexo}","{$color}","{$imagen}"));        
  } 
    
//actualizar mascota
  function updateMascota($id_mascota,$nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("UPDATE mascota SET nombre= ? WHERE id_mascota= ? ", array("{$nombre}",$id_mascota));        
  }

}
?>
