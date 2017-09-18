<?php

include_once('Persona.php');
include_once('../Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id_persona'},$c{'nombre'},$c{'direccion'},$c{'apellido'},$c{'user'},$c{'pass'},$c{'correo'},$c{'fecha_nacimiento'},$c{'id_rol'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

 

function deletePersona($id_persona) {
    $rows = self::$db->deleteRow("DELETE FROM persona WHERE id_persona= ? ", array("{$id_persona}"));        
  }   


  function createPersona($nombre,$direccion,$apellido,$user,$pass,$correo,$fecha_nacimiento,$id_rol) {
    $rows = self::$db->insertRow("INSERT INTO public.persona (nombre, direccion, apellido, user, pass, correo, fecha_nacimiento, id_rol) VALUES (?,?,?,?,?,?,?,?) ", array("{$nombre}","{$direccion}","{$apellido}","{$user}","{$pass}","{$correo}","{$fecha_nacimiento}","{$id_rol}"));        
  } 
    

  function updatePersona($id_persona,$nombre,$direccion,$apellido,$user,$pass,$correo,$fecha_nacimiento,$id_rol) {
    $rows = self::$db->insertRow("UPDATE persona SET nombre= ? ,direccion= ? ,apellido= ? ,user= ? ,pass= ? ,correo= ? ,fecha_nacimiento= ? ,id_rol= ? WHERE id_persona= ? ", array("{$nombre}","{$direccion}","{$apellido}","{$user}","{$pass}","{$correo}","${fecha_nacimiento}","${id_rol}"));        
  }
  
}
?>

