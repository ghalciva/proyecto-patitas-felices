<<?php
class reserva
{
    private $id_fichamedica;
    private $id_mascota;
    private $id_detalle;
   
    
     function __construct($id_fichamedica, $id_mascota,$id_detalle) {
        $this->id_fichamedica = $id_fichamedica;
        $this->id_mascota = $id_mascota;
 	$this->id_detalle = $id_detalle;
 	
     }
function setid_fichamedica($id_fichamedica){
       $this->id_fichamedica = $id_fichamedica;
     } 
     function getid_fichamedica(){
       return $this->id_fichamedica;
     } 
    
     function setid_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getid_mascota(){
       return $this->id_mascota;
     } 
     function setid_detalle($id_detalle){
       $this->id_detalle = $id_detalle;
     } 
     function getid_detalle(){
       return $this->id_detalle;
     } 

}
?> 
