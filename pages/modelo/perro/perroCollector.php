<?php

include_once('Perro.php');
include_once("../CollectorA.php");

class perroCollector extends CollectorA
{
  
//mostrar perros
  function showDog() {
    $rows = self::$db->getRows("SELECT * FROM perro");        
    $arraypets= array();        
    foreach ($rows as $c){
      $aux = new Perro($c{'idPerro'},$c{'idMascota'},$c{'nombre'},$c{'edad'},$c{'sexo'},$c{'raza'});
      array_push($arraypets, $aux);
    }
    return $arraypets;        
  }
  
//eliminar perros
  function deleteDog($idPerro) {
    $rows = self::$db->deleteRow("DELETE FROM public.perro WHERE idPerro= ? ", array("{$idPerro}"));        
  }   

//insertar perros
  function createDog($idMascota,$nombre,$edad,$sexo,$raza) {
    $rows = self::$db->insertRow("INSERT INTO public.perro (idMascota, nombre, edad, sexo, raza) VALUES (?,?,?,?,?) ", array("{$idMascota}","{$nombre}","{$edad}","{$sexo}","{$raza}"));        
  } 
    
//actualizar perros
  function updateDog($idPerro,$idMascota,$nombre,$edad,$sexo,$raza) {
    $rows = self::$db->insertRow("UPDATE public.perro SET nombre= ? WHERE idPerro= ? ", array("{$nombre}",$idPerro));        
  }
    
//saving...
  function saveDog($idPerro) {
    $row = self::$db->getRows("SELECT * FROM public.perro WHERE idPerro= ?" ,array("{$idPerro}")); 
    $ObjPerro =new Perro($row[0]{'idPerro'},$row[0]{'idMascota'},$row[0]{'nombre'},$row[0]{'edad'},$row[0]{'sexo'},$row[0]{'raza'});       
    return $ObjPerro;        
}

}
?>
