<?php
include_once("PersonaCollector.php");
session_start();
$user = $_GET['user'];
$pass = $_GET['pass'];

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
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../indexAdmin.php'>";
                    //echo "admin";
                }else{
                    $_SESSION['user'] = $user;
                    $_SESSION['rol'] = $c->getIdRol();
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                    //echo "demas";
                }
                
               
                 
		        
                
            }
        }
        
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="../../iniciarsesion.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
		
	   ?>
            
    </body>
</html>
