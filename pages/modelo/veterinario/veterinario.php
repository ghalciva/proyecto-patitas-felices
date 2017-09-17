
<?php

class veterinario
{

    private $id_veterinario;
    private $id_persona;
    private $titulo;
    private $ocupacion;
    
    
     function __construct($id_veterinario,$id_persona,$titulo,$ocupacion) {

 	$this->id_veterinario = $id_veterinario;
       $this->id_persona = $id_persona;
       $this->titulo = $titulo;
	$this->ocupacion = $ocupacion;
     }

    function setid_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getid_veterinario(){
       return $this->id_veterinario;
     } 

function setid_persona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getid_persona(){
       return $this->id_persona;
     } 

function settitulo($titulo){
       $this->titulo = $titulo;
     } 
     function gettitulo(){
       return $this->titulo;
     } 

     function setocupacion($ocupacion){
       $this->ocupacion = $ocupacion;
     } 
     function getocupacion(){
       return $this->ocupacion;
     } 
     

}

?>
