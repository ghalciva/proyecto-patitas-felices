<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> INICIO SESION </title>
	</head>
	<body>
<?php
if(isset($_SESSION['MiSesion'])){
	echo"<p>Hola usuario:(" . $_SESSION['MiSesion']. ")
		[<a href='salir.php'>salir</a>]";


include_once('LoginCollector.php');

$id =1;

$LoginCollectorObj = new LoginCollector();

foreach ($LoginCollectorObj->showLogins() as $c){
  echo "<div>";
  echo $c->getId_usuario() . "  && " .$c->getNombre();
	echo " " . "<a href='formularioLoginEditar.php?id=".$c->getId_usuario()."'>Editar</a>";
	echo " " . "<a href='eliminar.php?id=".$c->getId_usuario()."'>ELiminar</a>";                                      
  echo "</div>"; 
}





}else{
?>

		<form action ="login.php" method="get">
		<fieldset>
			<label> USUARIO </label>
		     		<input type="text" name="usuario"/></br>
		     	<label> CLAVE</label>
				<input type="text" name="clave"/></br>
		     	<button type="submit">ACEPTAR</button>
		</fieldset>
		</form> 

<?php } ?>

		
	</body>
</html>

