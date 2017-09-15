<?php

include_once('Animal.php');
include_once("../CollectorA.php");

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
    $rows = self::$db->deleteRow("DELETE FROM public.animal WHERE idMascota= ? ", array("{$idMascota}"));        
  }   

//insertar mascota
  function createAnimal($nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("INSERT INTO public.animal (nombre, edad, raza, fecha, sexo, color, imagen) VALUES (?,?,?,?,?,?,?) ", array("{$nombre}","{$edad}","{$raza}","{$fecha}","{$sexo}","{$color}","{$imagen}"));        
  } 
    
//actualizar mascota
  function updateAnimal($idMascota,$nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
    $rows = self::$db->insertRow("UPDATE public.animal SET nombre= ? WHERE idMascota= ? ", array("{$nombre}",$idMascota));        
  }
    
//saving...
  function saveAnimal($idMascota) {
    $row = self::$db->getRows("SELECT * FROM public.animal WHERE idMascota= ?" ,array("{$idMascota}")); 
    $ObjAnimal =new Animal($row[0]{'idMascota'},$row[0]{'raza'},$row[0]{'color'},$row[0]{'sexo'},$row[0]{'edad'},$row[0]{'nombre'},$row[0]{'fecha'},$row[0]{'imagen'});       
    return $ObjAnimal;        
}

}
?>
