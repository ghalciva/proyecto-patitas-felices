<?php

class animal
{
    private $raza;
    private $color;
    private $sexo;
	private $nombre;
private $fecha_nacimiento;
private $edad;
private $id_mascota;
private $imagen;


    
     function __construct($raza, $color,$sexo,$nombre,$fecha_nacimiento,$edad,$id_mascota,$imagen) {
        $this->raza = $raza;
        $this->color = $color;
 	$this->sexo = $sexo;
 	$this->nombre = $nombre;
 	$this->fecha_nacimiento = $fecha_nacimiento;
 	$this->edad = $edad;
$this->id_mascota = $id_mascota;
$this->imagen = $imagen;
     }
function setid_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 

     function getid_mascota(){
       return $this->id_mascota;
     } 
    
     function setraza($raza){
       $this->raza = $raza;
     } 

     function getraza(){
       return $this->raza;
     } 

     function setcolor($color){
       $this->color = $color;
     } 

     function getcolor(){
       return $this->color;
     } 

 function setsexo($sexo){
       $this->sexo = $sexo;
     } 

     function getsexo(){
       return $this->sexo;
     } 

function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 

function setedad($edad){
       $this->edad = $edad;
     } 

     function getedad(){
       return $this->edad;
     } 
function setfecha_nacimiento($fecha_nacimiento){
       $this->fecha_nacimiento = $fecha_nacimiento;
     } 

     function getfecha_nacimiento(){
       return $this->fecha_nacimiento;
     } 

function setimagen($imagen){
       $this->imagen = $imagen;
     } 

     function getimagen(){
       return $this->imagen;
     } 

}

?> 
