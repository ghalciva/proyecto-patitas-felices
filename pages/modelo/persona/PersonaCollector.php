<?php

include_once('Persona.php');
include_once('../Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona");        
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id_persona'},$c{'nombre'},$c{'direccion'},$c{'apellido'},$c{'user'},$c{'pass'},$c{'correo'},$c{'fecha_nacimiento'},$c{'id_rol'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

 function showPersona($id_persona) {
   $row = self::$db->getRows("SELECT * FROM persona where id_persona= ?", array("{$id_persona}"));        
   $ObjPersona = new Persona($row[0]{'id_persona'},$row[0]{'nombre'},$row[0]{'direccion'},$row[0]{'apellido'},$row[0]{'user'},$row[0]{'pass'},$row[0]{'correo'},$row[0]{'fecha_nacimiento'},$row[0]{'id_rol'});
   return $ObjPersona;   
 }

function updatePersona($id_persona,$nombre,$direccion,$apellido,$user,$pass,$correo,$fecha_nacimiento,$id_rol) {
   $insertrow = self::$db->updateRow("UPDATE public.persona SET nombre = ?,direccion = ?,apellido = ?,user = ?,pass = ?,correo = ?,fecha_nacimiento = ?,id_rol = ? WHERE id_persona= ? ", array("{$nombre}","{$direccion}","{$apellido}","{$user}","{$pass}","{$correo}","{$fecha_nacimiento}","{$id_rol}"));        
 }

function deletePersona($id_persona) {
   $insertrow = self::$db->deleteRow("DELETE FROM persona WHERE id_persona= ? ", array("{$id_persona}"));        
 }


function createPersona($nombre,$direccion,$apellido,$user,$pass,$correo,$fecha_nacimiento,$id_rol) {
   $insertrow = self::$db->insertRow("INSERT INTO public.persona (nombre,direccion,apellido,user,pass,correo,fecha_nacimiento,id_rol) VALUES (?,?,?,?,?,?,?,?) ", array("{$nombre}","{$direccion}","{$apellido}","{$user}","{$pass}","{$correo}","{$fecha_nacimiento}","{$id_rol}"));        
 }
}
?>

