<?php

class veterinario
{
    private $id_vet;
    private $id_mascota;
    private $nombre_vet;
    private $nombre_veterinaria
    private $direccion;
   
    
     function __construct($id_vet, $id_mascota,$nombre_vet, $nombre_veterinaria, $direccion) {
       $this->id_vet = $id_vet;
       $this->id_mascota = $id_mascota;
	$this->nombre_vet = $nombre_vet;
	$this->nombre_veterinaria = $nombre_veterinaria;
       $this->direccion = $direccion;
	
      
     }
    
     function setId_Vet($id_vet){
       $this->id_vet = $id_vet;
     } 
     function getId_Vet(){
       return $this->id_vet;
     } 
     function setId_Mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
	function getId_Mascota(){
       return $this->id_mascota;
     } 

function setNombre_Vet($nombre_vet){
       $this->nombre_vet = $nombre_vet;
     } 
     function getNombre_Vet(){
       return $this->nombre_vet;
     }

	function setNombre_Veterinaria($nombre_veterinaria){
       $this->nombre_veterinaria = $nombre_veterinaria;
     } 
     function getNombre_Veterinaria(){
       return $this->nombre_veterinaria;
     } 
 
    
 	function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
    


}

?> 
