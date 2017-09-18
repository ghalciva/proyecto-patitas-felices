<?php
session_start();
include_once("PersonaCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_rol = $_POST['id_rol'];



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
        $PersonaCollectorObj->createPersona($nombre,$apellido,$correo,$direccion,$user,$pass,$fecha_nacimiento,$id_rol);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=read_persona.php'>";
                            //}else{   
                              // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
