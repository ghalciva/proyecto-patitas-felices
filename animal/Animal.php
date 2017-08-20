<?php
//Demo.php
class Animal
{
    private $idMascota;
    private $nombre;
    private $edad;
    private $raza;
    private $fecha_nac;
    private $sexo;
    private $color;
    
     function __construct($idMascota, $nombre, $edad, $raza, $fecha_nac, $sexo, $color) {
       $this->idMascota = $idMascota;
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->raza = $raza;
       $this->fecha_nac = $fecha_nac;
       $this->sexo = $sexo;
       $this->color = $color;
     }
    
     function setIdMascota($idMascota){
       $this->idMascota = $idMascota;
     } 
     function getIdMascota(){
       return $this->idMascota;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setEdad($edad){
       $this->edad = $edad;
     } 
     function getEdad(){
       return $this->edad;
     } 
     function setRaza($raza){
       $this->raza = $raza;
     } 
     function getRaza(){
       return $this->raza;
     } 
     function setFecha_Nac($fecha_nac){
       $this->fecha_nac = $fecha_nac;
     } 
     function getFecha_Nac(){
       return $this->fecha_nac;
     } 
     function setSexo($sexo){
       $this->sexo = $sexo;
     } 
     function getSexo(){
       return $this->sexo;
     } 
     function setColor($color){
       $this->color = $color;
     } 
     function getColor(){
       return $this->color;
     } 


}

?> 
