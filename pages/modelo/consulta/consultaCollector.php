<?php

include_once('consulta.php');
include_once("../Collector.php");

class consultaCollector extends Collector
{
  
//mostrar 
  function showconsulta() {
    $rows = self::$db->getRows("SELECT * FROM consulta");        
    $arrayconsulta= array();        
    foreach ($rows as $c){
      $aux = new consulta($c{'id_consulta'},$c{'id_reserva'},$c{'hora_consulta'},$c{'descripcion'});
      array_push($arrayconsulta, $aux);
    }
    return $arrayconsulta;        
  }
  
//eliminar 
  function deleteconsulta($id_consulta) {
    $rows = self::$db->deleteRow("DELETE FROM consulta WHERE id_consulta= ? ", array("{$id_consulta}"));        
  }   

//insertar 
  function createconsulta($id_consulta,$id_reserva,$hora,$detalle) {
    $rows = self::$db->insertRow("INSERT INTO public.consulta (id_consulta, id_reserva, hora_consulta ,descripcion) VALUES (?,?,?,?) ", array("{$id_consulta}","{$id_reserva}","{$hora_consulta}","{$descripcion}"));        
  } 
    
//actualizar 
  function updateconsulta($id_consulta,$id_reserva,$hora_consulta,$detalle) {
    $rows = self::$db->insertRow("UPDATE consulta SET id_consulta= ? ,id_reserva= ? ,hora_consulta = ? ,descripcion= ?  WHERE id_consulta= ? ", array("{$id_consulta}","{$id_reserva}","{$hora_consulta}","{$descripcion}"));        
  }
    

}
?>
