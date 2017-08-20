<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

 if (isset($_SESSION['MiSesion'])){
  echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ") 
  [<a href='salir.php'>Salir</a>]";

//pagina.php

}

?>

<form action="login.php" method="post">
  Usuario: <input type="text" name="Usuario" value="">
  <br>
  Clave: <input type="text" name="Clave" value="">
  <br>
  <input type="submit" value="Enviar">
</form> 

</body>
</html>
