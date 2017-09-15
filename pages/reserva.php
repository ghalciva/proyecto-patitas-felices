<?php

class reserva
{
    private $id_reserva;
    private $fecha_reserva;
    private $direccion;
   
    
     function __construct($id_reserva, $fecha_reserva, $direccion) {
       $this->id_reserva = $id_reserva;
       $this->fecha_reserva = $fecha_reserva;
       $this->direccion = $direccion;
      
     }
    
     function setId_Reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_Reserva(){
       return $this->id_reserva;
     } 
     function setFecha_Reserva($fecha_reserva){
       $this->fecha_reserva = $fecha_reserva;
     } 
     function getFecha_Reserva(){
       return $this->fecha_reserva;
     } 
    
 	function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
    
}

?> 
