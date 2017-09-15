<?php

include_once('Gato.php');
include_once("../CollectorA.php");

class gatoCollector extends CollectorA
{
  
//mostrar gatos
  function showCats() {
    $rows = self::$db->getRows("SELECT * FROM gato");        
    $arraycats= array();        
    foreach ($rows as $c){
      $aux = new Gato($c{'idGato'},$c{'idMascota'},$c{'nombre'},$c{'edad'},$c{'sexo'},$c{'raza'});
      array_push($arraycats, $aux);
    }
    return $arraycats;        
  }
  
//eliminar gatos
  function deleteCat($idGato) {
    $rows = self::$db->deleteRow("DELETE FROM public.gato WHERE idGato= ? ", array("{$idGato}"));        
  }   

//insertar gatos
  function createCat($idMascota,$nombre,$edad,$sexo,$raza) {
    $rows = self::$db->insertRow("INSERT INTO public.gato (idMascota, nombre, edad, sexo, raza) VALUES (?,?,?,?,?) ", array("{$idMascota}","{$nombre}","{$edad}","{$sexo}","{$raza}"));        
  } 
    
//actualizar gatos
  function updateCat($idGato,$idMascota,$nombre,$edad,$sexo,$raza) {
    $rows = self::$db->insertRow("UPDATE public.gato SET nombre= ? WHERE idGato= ? ", array("{$nombre}",$idGato));        
  }
    
//saving...
  function saveAnimal($idGato) {
    $row = self::$db->getRows("SELECT * FROM public.gato WHERE idGato= ?" ,array("{$idGato}")); 
    $ObjGato =new Gato($row[0]{'idGato'},$row[0]{'idMascota'},$row[0]{'nombre'},$row[0]{'edad'},$row[0]{'sexo'},$row[0]{'raza'});       
    return $ObjGato;        
}

}
?>
