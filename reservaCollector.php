<?php

include_once('reserva.php');
include_once('Collector.php');

class reservaCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM reserva ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Reserva($c{'id_reserva'},$c{'fecha_reserva'},$c{'direccion'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM reserva where id_reserva= ? ", array("{$id}"));        
    $ObjDemo = new Reserva($row[0]{'id_reserva'},$row[0]{'fecha_reserva'});
    return $ObjDemo;        
  }

 
  function updateDemo($id,$fecha_reserva,$direccion) {
    $insertrow = self::$db->getRows("UPDATE public.reserva SET fecha_reserva= ? direccion= ? ", array("{$fecha_reserva}",$id));        
  }


  function deleteDemo($id) {
    $deleterow = self::$db->getRows("DELETE from public.reserva WHERE id_rserva= ? ", array("$id"));        
  }

}
?>

