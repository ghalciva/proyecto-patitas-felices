
<?php

class receta
{
    private $id_receta;
    private $id_consulta;
    private $descripcion;
    private $cantidad;

    
    
     function __construct($id_receta,$id_consulta,$descripcion,$cantidad) {

 	$this->id_receta = $id_receta;
       $this->id_consulta = $id_consulta;
       $this->descripcion = $descripcion;
	$this->cantidad = $cantidad;
     }

    function setid_receta($id_receta){
       $this->id_receta = $id_receta;
     } 
     function getiid_receta(){
       return $this->id_receta;
     } 

function setid_consulta($id_consulta){
       $this->id_consulta = $id_consulta;
     } 
     function getid_consulta(){
       return $this->id_consulta;
     } 
function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     } 
function setcantidad($cantidad){
       $this->cantidad = $cantidad;
     } 
     function getcantidad(){
       return $this->cantidad;
     } 


}

?>
