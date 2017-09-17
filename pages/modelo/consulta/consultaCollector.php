<?php

include_once('consulta.php');
include_once("../Collector.php");

class consultaCollector extends Collector
{
  
<<<<<<< HEAD
//mostrar mascotas
=======
//mostrar 
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
  function showconsulta() {
    $rows = self::$db->getRows("SELECT * FROM consulta");        
    $arrayconsulta= array();        
    foreach ($rows as $c){
      $aux = new consulta($c{'id_consulta'},$c{'id_reserva'},$c{'hora'},$c{'detalle'});
      array_push($arrayconsulta, $aux);
    }
    return $arrayconsulta;        
  }
  
<<<<<<< HEAD
//eliminar mascota
=======
//eliminar 
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
  function deleteconsulta($id_consulta) {
    $rows = self::$db->deleteRow("DELETE FROM consulta WHERE id_consulta= ? ", array("{$id_consulta}"));        
  }   

<<<<<<< HEAD
//insertar mascota
  function createconsulta($id_consulta,$id_reserva,$hora,$detalle) {
    $rows = self::$db->insertRow("INSERT INTO public.fichamedica (id_fichamedica, id_mascota, detalle) VALUES (?,?,?) ", array("{$id_consulta}","{$id_reserva}","{$hora}","{$detalle}"));        
  } 
    
//actualizar mascota
  function updatefichamedica($id_fichamedica,$id_mascota,$detalle) {
    $rows = self::$db->insertRow("UPDATE fichamedica SET id_fichamedica= ? ,id_mascota= ? ,detalle= ?  WHERE id_fichamedica= ? ", array("{$id_fichamedica}","{$id_mascota}","{$detalle}"));        
=======
//insertar 
  function createconsulta($id_consulta,$id_reserva,$hora,$detalle) {
    $rows = self::$db->insertRow("INSERT INTO public.consulta (id_consulta, id_reserva, hora ,detalle) VALUES (?,?,?,?) ", array("{$id_consulta}","{$id_reserva}","{$hora}","{$detalle}"));        
  } 
    
//actualizar 
  function updateconsulta($id_consulta,$id_reserva,$hora,$detalle) {
    $rows = self::$db->insertRow("UPDATE consulta SET id_consulta= ? ,id_reserva= ? ,hora = ? ,detalle= ?  WHERE id_consulta= ? ", array("{$id_consulta}","{$id_reserva}","{$hora}","{$detalle}"));        
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
  }
    

}
?>
