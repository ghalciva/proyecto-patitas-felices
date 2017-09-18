<?php
session_start();
include_once("RolCollector.php");

$descripcion = $_POST['descripcion'];




$RolCollectorObj = new RolCollector();
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
   
        echo "<p>Se creo un  nuevo rol </p>";
        $RolCollectorObj->createRol($descripcion);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readRol.php'>";
                            //}else{   
                              // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
