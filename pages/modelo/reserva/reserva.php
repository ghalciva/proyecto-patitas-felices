<<?php
class reserva
{
    private $id_reserva;
    private $id_cliente;
<<<<<<< HEAD
    private $fecha_consulta;
=======
<<<<<<< HEAD
    private $id_mascota;
    private $fecha;
   private $id_veterinario;
    
     function __construct($id_reserva, $id_cliente,$id_mascota,$fecha,$id_veterinario) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
 	$this->id_mascota = $id_mascota;
=======
    private $fecha;
>>>>>>> 2d4cc1e43c24862e011b34eb46451fdea4db0595
   private $id_veterinario;
    
     function __construct($id_reserva, $id_cliente,$fecha_consulta,$id_veterinario) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
<<<<<<< HEAD
 	$this->fecha_consulta = $fecha_consulta;
=======
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
 	$this->fecha = $fecha;
>>>>>>> 2d4cc1e43c24862e011b34eb46451fdea4db0595
        $this->id_veterinario = $id_veterinario;
 	
     }
<<<<<<< HEAD
function setid_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getid_reserva(){
       return $this->id_reserva;
     } 
    
     function setfid_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getid_cliente(){
       return $this->id_cliente;
     } 
     function setid_mascota($id_mascota){
       $this->id_mascota = $id_mascota;
     } 
     function getid_mascota(){
       return $this->id_mascota;
     } 
 function setfecha($fecha){
       $this->fecha = $fecha;
     } 
     function getfecha(){
       return $this->fecha;
     }
 
function setid_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getid_veterinario(){
=======
function setId_reserva($id_reserva){
       $this->id_reserva = $id_reserva;
     } 
     function getId_reserva(){
       return $this->id_reserva;
     } 
    
     function setId_cliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getId_cliente(){
       return $this->id_cliente;
     } 
     
 function setFecha($fecha_consulta){
       $this->fecha_consulta = $fecha_consulta;
     } 
     function getFecha_consulta(){
       return $this->fecha_consulta;
     }
 
function setId_veterinario($id_veterinario){
       $this->id_veterinario = $id_veterinario;
     } 
     function getId_veterinario(){
>>>>>>> c3d28f6c9be7dcc91186c9a048e297e1ca51aa62
       return $this->id_veterinario;
     } 



}
?> 
