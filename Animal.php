<?php

class Animal
{
    private $idMascota;
    private $nombre;
    private $edad;
    private $raza;
    private $fecha;
    private $sexo;
    private $color;
    private $imagen;
    
     function __construct($idMascota, $nombre, $edad, $raza, $fecha, $sexo, $color,$imagen) {
       $this->idMascota = $idMascota;
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->raza = $raza;
       $this->fecha = $fecha;
       $this->sexo = $sexo;
       $this->color = $color;
       $this->imagen = $imagen;
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
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
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
     function setImagen($imagen){
       $this->imagen = $imagen;
     } 
     function getImagen(){
       return $this->imagen;
     } 

}

?> 
