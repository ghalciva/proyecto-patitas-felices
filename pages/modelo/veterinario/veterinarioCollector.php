<?php

include_once('veterinario.php');
include_once('../Collector.php');

class VeterinarioCollector extends Collector
{
  
  function showVeterinarios() {
    $rows = self::$db->getRows("SELECT * FROM veterinario");        
    $arrayVeterinario= array();        
    foreach ($rows as $c){
      $aux = new Veterinario($c{'id_veterinario'},$c{'id_persona'},$c{'titulo'},$c{'ocupacion'});
      array_push($arrayVeterinario, $aux);
    }
    return $arrayVeterinario;        
  }

 function showVeterinario($id_veterinario) {
   $row = self::$db->getRows("SELECT * FROM veterinario where id_veterinario= ?", array("{$id_veterinario}"));        
   $ObjPersona = new Persona($row[0]{'id_veterinario'},$row[0]{'id_persona'},$row[0]{'titulo'},$row[0]{'ocupacion'});
   return $ObjPersona;   
 }

function updateVeterinario($id_persona,$titulo,$ocupacion) {
   $insertrow = self::$db->updateRow("UPDATE public.veterinario SET id_persona = ?,titulo = ?,ocupacion = ? WHERE id_veterinario= ? ", array("{$id_persona}","{$titulo}","{$ocupacion}"));        
 }

function deleteVeterinario($id_persona) {
   $insertrow = self::$db->deleteRow("DELETE FROM veterinario WHERE id_veterinario= ? ", array("{$id_veterinario}"));        
 }


function createVeterinario($id_persona,$titulo,$ocupacion) {
   $insertrow = self::$db->insertRow("INSERT INTO public.veterinario (id_persona,titulo,ocupacion) VALUES (?,?,?) ", array("{$id_persona}","{$titulo}","{$ocupacion}"));        
 }
}
?>

