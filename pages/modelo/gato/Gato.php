<?php

class Gato
{
    private $idGato;
    private $idMascota;
    private $nombre;
    private $edad;
    private $sexo;
    private $raza;
    
     function __construct($idGato, $idMascota, $nombre, $edad, $sexo, $raza) {
       $this->idGato = $idGato;
       $this->idMascota = $idMascota;
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->sexo = $sexo;
       $this->raza = $raza;
     }

     function setIdGato($idGato){
       $this->idGato = $idGato;
     } 
     function getIdGato(){
       return $this->idGato;
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
     function setSexo($sexo){
       $this->sexo = $sexo;
     } 
     function getSexo(){
       return $this->sexo;
     } 
     function setRaza($raza){
       $this->raza = $raza;
     } 
     function getRaza(){
       return $this->raza;
     } 

}

?> 
