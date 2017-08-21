<?php

class adoptar
{
    private $id_adopcion;
    private $fk_id_mascota;
    private $fk_id_cliente;
	private $fecha_adopcion;


    
     function __construct($id_adopcion, $fk_id_mascota) {
       $this->id_adopcion = $id_adopcion;
       $this->fk_id_mascota = $fk_id_mascota;
     }
    
     function setid_adopcion($id_adopcion){
       $this->id_adopcion = $id_adopcion;
     } 
     function getid_adopcion(){
       return $this->id_adopcion;
     } 
     function setfk_id_mascota($fk_id_mascota){
       $this->fk_id_mascota = $fk_id_mascota;
     } 
     function getfk_id_mascota(){
       return $this->fk_id_mascota;
     } 
}

?> 
