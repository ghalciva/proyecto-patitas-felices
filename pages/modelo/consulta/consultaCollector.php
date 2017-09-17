<?php

include_once('Animal.php');
include_once("../Collector.php");

class animalCollector extends CollectorA
{
  
//mostrar mascotas
  function showAnimals() {
    $rows = self::$db->getRows("SELECT * FROM animal");        
    $arrayanimals= array();        
    foreach ($rows as $c){
      $aux = new Animal($c{'idMascota'},$c{'nombre'},$c{'edad'},$c{'raza'},$c{'fecha'},$c{'sexo'},$c{'color'},$c{'imagen'});
      array_push($arrayanimals, $aux);
    }
    return $arrayanimals;        
  }
  
//eliminar mascota
  function deleteAnimal($idMascota) {
    $rows = self::$db->deleteRow("DELETE FROM animal WHERE idMascota= ? ", array("{$idMascota}"));        
  }   

//insertar mascota
  function createAnimal($nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("INSERT INTO public.animal (nombre, edad, raza, fecha, sexo, color, imagen) VALUES (?,?,?,?,?,?,?) ", array("{$nombre}","{$edad}","{$raza}","{$fecha}","{$sexo}","{$color}","{$imagen}"));        
  } 
    
//actualizar mascota
  function updateAnimal($idMascota,$nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("UPDATE animal SET nombre= ? ,edad= ? ,raza= ? ,fecha= ? ,sexo= ? ,color= ? ,imagen= ? WHERE idMascota= ? ", array("{$nombre}","{$edad}","{$raza}","{$fecha}","{$sexo}","{$color}","${imagen}"));        
  }
    

}
?>
