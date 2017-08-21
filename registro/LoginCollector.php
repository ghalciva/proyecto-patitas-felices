<?php

include_once('Login.php');
include_once('Collector.php');

class LoginCollector extends Collector
{
  
  function showlogins() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    echo "linea 1";
    $arrayLogin= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'id_usuario'},$c{'id_persona'});
      array_push($arrayLogin, $aux);
    }
    return $arrayLogin;        
  }

 function showLogin($id) {
   $row = self::$db->getRows("SELECT * FROM usuario where id_usuario= ?", array("{$id}"));        
   $ObjLogin = new Usuario($row[0]{'id_usuario'},$row[0]{'id_persona'});
  echo "Linea 1";
   return $ObjLogin;   
 }

function updateLogin($id,$pass) {
   $insertrow = self::$db->updateRow("UPDATE public.usuario SET contraseña_user = ? WHERE id_usuario= ? ", array("{$pass}","$id"));        
 }

function deleteLogin($id) {
   $insertrow = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario= ? ", array("{$id}"));        
 }
}
?>

