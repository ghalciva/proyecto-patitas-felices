<?php
session_start();
include_once("AdministradorCollector.php");

$id_administrador = $_GET['id_administrador'];


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
       
		  ///if (isset($_SESSION['MiSesion'])){
   
        echo "<p>Se elimino la tabla #" . $id_administrador ."?</p>";
        $AdministradorCollectorObj->deleteAdmin($id_administrador);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readAdmin.php'>";
                          //  }else{   
                            //   echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
