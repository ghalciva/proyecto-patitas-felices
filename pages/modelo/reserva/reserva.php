<<?php
class reserva
{
    private $id_reserva;
    private $id_cliente;
    private $id_mascota;
    private $fecha;
   private $id_veterinario;
    
     function __construct($id_reserva, $id_cliente,$id_mascota,$fecha,$id_veterinario) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
 	$this->id_mascota = $id_mascota;
 	$this->fecha = $fecha;
        $this->id_veterinario = $id_veterinario;
 	
     }
function setId_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_reserva(){
       return $this->id_reserva;
     } 
    
     function setId_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getId_cliente(){
       return $this->id_cliente;
     } 
     function setId_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getId_mascota(){
       return $this->id_mascota;
     } 
 function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     }
 
function setId_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getId_veterinario(){
       return $this->id_veterinario;
     } 



}
?> 
