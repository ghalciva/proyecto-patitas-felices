<?php
session_start();
include_once("AdministradorCollector.php");

$id_administrador = $_POST['id_administrador'];
$id_persona = $_POST['id_persona'];


$AdministradorCollectorObj = new AdministradorCollector();
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
   
        echo "<p>Se modifico un nuevo administrador</p>";
        $AdministradorCollectorObj->updateAdmin($id_administrador,$id_persona);
       
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readAdmin.php'>";
                            //}else{   
                              // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
