<?php
session_start();
include_once("PersonaCollector.php");

$id_persona = $_GET['id_persona'];


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
       
		  ///if (isset($_SESSION['MiSesion'])){
   
        echo "<p>Se elimino la tabla #" . $id_persona ."?</p>";
        $PersonaCollectorObj->deletePersona($id_persona);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readPersona.php'>";
                          //  }else{   
                            //   echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             //} 
                        ?>
  
    </body>
</html>
