<?php

class estado
{
    private $id_estado;
    private $descripcion;
    
    
     function __construct($id_estado,$descripcion) {

 	$this->id_estado = $id_estado;
       $this->descripcion = $descripcion;
     }

    function setid_estado($id_estado){
       $this->id_estado = $id_estado;
     } 
     function getid_estado(){
       return $this->id_estado;
     } 

function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     } 
}

?>
