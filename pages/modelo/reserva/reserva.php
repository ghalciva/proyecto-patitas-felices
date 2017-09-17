<<?php
class reserva
{
    private $id_reserva;
    private $id_cliente;
    private $fecha_consulta;
   private $id_veterinario;
    
     function __construct($id_reserva, $id_cliente,$fecha_consulta,$id_veterinario) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
 	$this->fecha_consulta = $fecha_consulta;
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
     
 function setFecha($fecha_consulta){
       $this->fecha_consulta = $fecha_consulta;
     } 
     function getFecha_consulta(){
       return $this->fecha_consulta;
     }
 
function setId_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getId_veterinario(){
       return $this->id_veterinario;
     } 



}
?> 
