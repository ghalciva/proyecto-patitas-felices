<?php

class estado
{
    private $id_estado;
    private $descripcion;
    
    
     function __construct($id_estado,$descripcion) {

 	$this->id_estado = $id_estado;
       $this->descripcion = $descripcion;
     }

<<<<<<< HEAD
    function setIdEstado($id_estado){
       $this->id_estado = $id_estado;
     } 
     function getIdEstado(){
       return $this->id_estado;
     } 

function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
=======
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
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
       return $this->descripcion;
     } 
}

?>
