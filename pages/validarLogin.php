<?php
include_once("modelo/persona/PersonaCollector.php");
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$PersonaCollectorObj = new PersonaCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
       
        <?php

        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getUser() == $user && $c->getPass() == $pass){
                if($c->getIdRol()==2){
                    $_SESSION['user'] = $user;
                    $_SESSION['rol'] = $c->getIdRol();
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=indexAdmin.php'>";
                    
                }else{
                    $_SESSION['user'] = $user;
                    $_SESSION['rol'] = $c->getIdRol();
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
                }
                
               
                 
		        
                
            }
        }
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="iniciarsesion.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
		
	   ?>
            
    </body>
</html>
