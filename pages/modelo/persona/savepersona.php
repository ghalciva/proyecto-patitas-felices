<?php
session_start();
include_once("PersonaCollector.php");

$nombre=$_GET['nombre'];
$direccion=$_GET['direccion'];
$apellido=$_GET['apellido'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$correo=$_GET['correo'];
$fecha_nacimiento=$_GET['fecha_nacimiento'];
$id_rol=$_GET['id_rol'];



$PersonaCollectorObj = new PersonaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        
    
    </head>
    <body>
        
        <?php
		  //if (isset($_SESSION['MiSesion'])){
   
        echo "<p>Se creo un  nuevo usuario </p>";
        $PersonaCollectorObj->createPersona($nombre,$direccion,$apellido,$user,$pass,$correo,$fecha_nacimiento,$id_rol);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPersona.php'>";
                            //}else{   
                              // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
