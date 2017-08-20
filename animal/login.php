<?php
session_start();
?>

<?php

$_SESSION['MiSesion']= $_POST['Usuario'];

$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];

echo "Usuario: " . $usuario . " Clave: " . $clave;
echo "<br> <br>";
echo "<a href='registrar.php'> Continuar </a>";

?>
