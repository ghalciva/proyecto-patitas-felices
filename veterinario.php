<?php

class veterinario
{
    private $id_vet;
    private $id_mascota;
    private $nombre_vet;
    private $nombre_veterinaria
    private $direccion;
   
    
     function __construct($id_vet, $id_mascota,$nombre_vet, $nombre_veterinaria, $direccion) {
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
