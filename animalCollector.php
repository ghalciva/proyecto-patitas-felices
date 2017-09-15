<?php

include_once('Animal.php');
include_once('CollectorA.php');

class animalCollector extends CollectorA
{

//mostrar mascotas
function showAnimals() {
    $rows = self::$db->getRows("SELECT * FROM animal");        
    $arraylogin= array();        
    foreach ($rows as $c){
      $aux = new Animal($c{'idMascota'},$c{'nombre'},$c{'edad'},$c{'raza'},$c{'fecha'},$c{'sexo'},$c{'color'},$c{'imagen'});
      array_push($arrayLogin, $aux);
    }
    return $arrayLogin;        
  }

//insertar mascota
function createAnimal($nombre,$edad,$raza,$fecha,$sexo,$color,$imagen) {
   $insertrow = self::$db->insertRow("INSERT INTO public.animal (nombre, edad, raza, fecha, sexo, color, imagen) VALUES (?,?,?,?,?,?,?) ", array("{$nombre}","{$edad}","{$raza}","{$fecha}","{$sexo}","{$color}","{$imagen}"));        
 } 

//eliminar mascota
function deleteAnimal($idMascota) {
   $insertrow = self::$db->deleteRow("DELETE FROM animal WHERE idMascota= ? ", array("{$idMascota}"));        
 }

//actualizar mascota
function updateAnimal($idMascota,$nombre) {
   $insertrow = self::$db->updateRow("UPDATE public.animal SET nombre = ? WHERE idMascota= ? ", array("{$nombre}","$idMascota"));        
 }

//mostrar mascota c/u
 function showDemo($idMascota) {
   $row = self::$db->getRows("SELECT * FROM animal where idMascota= ?", array("{$idMascota}"));        
   $ObjLogin = new Animal($row[0]{'idMascota'},$row[0]{'nombre'});
   return $ObjLogin;   
 }


} 

?>

