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
function setid_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getid_reserva(){
       return $this->id_reserva;
     } 
    
     function setfid_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getid_cliente(){
       return $this->id_cliente;
     } 
     function setid_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getid_mascota(){
       return $this->id_mascota;
     } 
 function setfecha($fecha){
       $this->fecha = $fecha;
     } 
     function getfecha(){
       return $this->fecha;
     }
 
function setid_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getid_veterinario(){
       return $this->id_veterinario;
     } 



}
?> 
