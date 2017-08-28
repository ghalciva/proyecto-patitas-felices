<?php
include_once("LoginCollector.php");

$id =1;

$LoginCollectorObj = new LoginCollector();

foreach ($LoginCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdpersona() . "  && " .$c->getNombre();                                     
  echo "</div>"; 
}


?>
