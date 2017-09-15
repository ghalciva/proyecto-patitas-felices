<?php

include_once('Login.php');
include_once('CollectorA.php');

class LoginCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    $arraylogin= array();        
    foreach ($rows as $c){
      $aux = new Login($c{'idpersona'},$c{'nombre'});
      array_push($arrayLogin, $aux);
    }
    return $arrayLogin;        
  }

 function showDemo($id) {
   $row = self::$db->getRows("SELECT * FROM persona where idpersona= ?", array("{$id}"));        
   $ObjLogin = new Login($row[0]{'idpersona'},$row[0]{'nombre'});
   return $ObjLogin;   
 }

function updateDemo($id,$nombre) {
   $insertrow = self::$db->updateRow("UPDATE public.persona SET nombre = ? WHERE idpersona= ? ", array("{$nombre}","$id"));        
 }

function deleteDemo($id) {
   $insertrow = self::$db->deleteRow("DELETE FROM persona WHERE idpersona= ? ", array("{$id}"));        
 }


function createDemo($nombre) {
   $insertrow = self::$db->insertRow("INSERT INTO public.persona (nombre) VALUES (?) ", array("{$nombre}"));        
 }
}
?>

