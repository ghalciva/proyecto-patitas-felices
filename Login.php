<?php

class Login
{
    private $idPersona;
    private $nombre;
    private $apellido;
private $correo;
private $direccion;
private $contrasena;
private $fechanac;
    
     function __construct($idPersona, $nombre) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
	
     }

  function __construct($idPersona, $nombre, $apellido, $correo, $direccion, $contasena, $fechanac) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
$this->apellido = $apellido;
$this->correo = $correo;
$this->direccion = $direccion;
$this->contrasena = $contrasena;
$this->fechanac = $fechanac;
	
     }
    
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     } 
function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
function setFechanac($fechanac){
       $this->fechanac = $fechanac;
     } 
     function getFechanac(){
       return $this->fechanac;
     } 
}

?> 
