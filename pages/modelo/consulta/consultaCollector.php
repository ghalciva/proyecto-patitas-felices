<?php

include_once('consulta.php');
include_once("../Collector.php");

class consultaCollector extends Collector
{
  
//mostrar mascotas
  function showconsulta() {
    $rows = self::$db->getRows("SELECT * FROM consulta");        
    $arrayconsulta= array();        
    foreach ($rows as $c){
      $aux = new consulta($c{'id_consulta'},$c{'id_reserva'},$c{'hora'},$c{'detalle'});
      array_push($arrayconsulta, $aux);
    }
    return $arrayconsulta;        
  }
  
//eliminar mascota
  function deletefichamedica($id_fichamedica) {
    $rows = self::$db->deleteRow("DELETE FROM fichamedica WHERE id_fichamedica= ? ", array("{$id_fichamedica}"));        
  }   

//insertar mascota
  function createfichamedica($id_fichamedica,$id_mascota,$detalle) {
    $rows = self::$db->insertRow("INSERT INTO public.fichamedica (id_fichamedica, id_mascota, detalle) VALUES (?,?,?) ", array("{$id_fichamedica}","{$id_mascota}","{$detalle}"));        
  } 
    
//actualizar mascota
  function updatefichamedica($id_fichamedica,$id_mascota,$detalle) {
    $rows = self::$db->insertRow("UPDATE fichamedica SET id_fichamedica= ? ,id_mascota= ? ,detalle= ?  WHERE id_fichamedica= ? ", array("{$id_fichamedica}","{$id_mascota}","{$detalle}"));        
  }
    

}
?>
