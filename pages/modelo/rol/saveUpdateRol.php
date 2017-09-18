<?php
session_start();
include_once("RolCollector.php");


$id_rol = $_GET['id_rol'];
$descripcion = $_GET['descripcion'];



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
   
        echo "<p>Se modifico un nuevo rol</p>";
        $RolCollectorObj->updateRol($id_rol,$descripcion);
       
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readRol.php'>";
                            //}else{   
                              // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
