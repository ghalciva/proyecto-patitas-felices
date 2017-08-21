<?php

class Usuario
{
    private $id_usuario;
    private $id_persona;
	private $contrasena_user
    
     function __construct($id_usuario, $contrasena_user) {
       $this->id_usuario = $id_usuario;
       $this->pass = $contrasena_user;
     }
    
     function setId_usuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getId_usuario(){
       return $this->id_usuario;
     } 
     function setContrasena_user($contrasena_user){
       $this->contrasena_user = $contrasena_user;
     } 
     function getContrasena_user(){
       return $this->contrasena_user;
     } 
}

?> 
