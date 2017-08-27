<?php

class veterinario
{
    private $id_detalleReserva;
    private $asistencia;
    private $estado_Animal;
    private $descripcion;
    
   
    
     function __construct($id_detalleReserva, $asistencia, $estado_Animal, $descripcion) {
       $this->id_detalleReserva = $id_detalleReserva;
       $this->asistencia = $asistencia;
	$this->estado_Animal = $estado_Animal;
	$this->descripcion = $descripcion;
	
      
     }
    
     function setId_DetalleReserva($id_detalleReserva){
       $this->id_vet = $id_detalleReserva;
     } 
     function getId_DetalleReserva(){
       return $this->id_detalleReserva;
     } 
     function setAsistencia($asistencia){
       $this->asistencia = $asistencia;
     } 
	function getAsistencia(){
       return $this->asistencia;
     } 

function setEstado_Animal($estado_Animal){
       $this->estado_Animal = $estado_Animal;
     } 
     function getEstado_Animal(){
       return $this->estado_Animal;
     }

 
    
 	function setDescripcion($descripcion){
       $this->direccion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
    


}

?> 
