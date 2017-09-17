<?php

class consulta
{

    private $id_consulta;
    private $id_reserva;
    private $hora;
    private $detalle;
    
    
     function __construct($id_consulta,$id_reserva,$hora,$detalle) {

 	$this->id_consulta = $id_consulta;
       $this->id_reserva = $id_reserva;
       $this->hora = $hora;
	$this->detalle = $detalle;
     }

<<<<<<< HEAD
    function setid_consulta($id_consulta){
       $this->id_consulta = $id_consulta;
     } 
     function getid_consulta(){
       return $this->id_consulta;
     } 

function setid_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getid_reserva(){
       return $this->id_reserva;
     } 

function sethora($hora){
       $this->hora = $hora;
     } 
     function gethora(){
       return $this->hora;
     } 

     function setdetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getdetalle(){
=======
    function setId_consulta($id_consulta){
       $this->id_consulta = $id_consulta;
     } 
     function getId_consulta(){
       return $this->id_consulta;
     } 

function setId_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_reserva(){
       return $this->id_reserva;
     } 

function setHora($hora){
       $this->hora = $hora;
     } 
     function getHora(){
       return $this->hora;
     } 

     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
       return $this->detalle;
     } 
     

}

?> 
