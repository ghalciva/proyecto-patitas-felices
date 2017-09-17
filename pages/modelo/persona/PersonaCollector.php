<?php

include_once('Persona.php');
include_once('../Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id_persona'},$c{'nombre'},$c{'apellido'},$c{'correo'},$c{'direccion'},$c{'user'},$c{'pass'},$c{'fecha_nacimiento'},$c{'id_rol'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

 function showPersona($id_persona) {
   $row = self::$db->getRows("SELECT * FROM persona where id_persona= ?", array("{$id_persona}"));        
   $ObjPersona = new Persona($row[0]{'id_persona'},$row[0]{'nombre'});
   return $ObjPersona;   
 }

function updatePersona($id_persona,$nombre) {
   $insertrow = self::$db->updateRow("UPDATE public.persona SET nombre = ? WHERE id_persona= ? ", array("{$nombre}","$id_persona"));        
 }

function deletePersona($id_persona) {
   $insertrow = self::$db->deleteRow("DELETE FROM persona WHERE id_persona= ? ", array("{$id_persona}"));        
 }


function createPersona($nombre) {
   $insertrow = self::$db->insertRow("INSERT INTO public.persona (nombre) VALUES (?) ", array("{$nombre}"));        
 }
}
?>

