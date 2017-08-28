<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patitas felices</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    
    <!-- CSS -->
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     




  </head>
  <body>

<?php
if(isset($_SESSION['MiSesion'])){
	echo"<p>Hola usuario:(" . $_SESSION['MiSesion']. ")
		[<a href='salir.php'>salir</a>]";


include_once('LoginCollector.php');

$id =1;

$LoginCollectorObj = new LoginCollector();

foreach ($LoginCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdPersona() . "  && " .$c->getNombre();

	echo " " . "<a href='eliminar.php?id=".$c->getIdPersona()."'>ELiminar</a>";    
 
}





}else{
?>

    <!-- Header Start -->
  <header>
    <div class="container">
         <div id="user">
        <ul class="login">
            <li class="loginu"><a href="registrate.html"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>
            <li class="loginu"><a href="iniciarsesion.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
        </ul>
        </div>
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                  
               
                   <a class="navbar-brand" href="index.php">
                            <img class="navbar-brand" src="img/logo.png" alt="Logo" >
                            </a>
                     
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="above">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="mascotas.php">Mascotas</a></li>
                    <li><a href="agenda.html">Agenda</a></li>
                     <li><a href="reserva.html">Reserva tu consulta</a></li>
                    <li><a href="contacto.html">Contáctenos</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
        
    <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
              <h1 class="animated fadeInUp">PATITAS FELICES</h1>
                <p class="animated fadeInUp">Nuestros angelitos esperan por tí </p>
            </div>
              
              
              <div class="newOne">
                  <p class="op">¿Deseas dar en adopción? </p>
                  <form action="formulario.php" method="post">
		  <input type="submit" value="Registralo" class="btn btn-default"> </input>
		  </form>
              </div>
          </div>
        </div>
      </div>
    </section>
      
    <!-- Wrapper Start -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
	<div id="informacion">
          <h2>¿POR QUÉ ADOPTAR?</h2>
          <p>Cuando vas por la calle y logras ver a algún perro o gato caminando sin rumbo alguno, ¿no te has puesto a pensar qué será de su vida? </p>
          <p>Las mascotas no son objetos inanimados sin sentimientos ni juguetes para divertirse un rato y luego ser relegados al olvido, son seres vivos con derechos que deben ser respetados y tratados con toda la consideración posible. </p>
 <p>Las mascotas adoptadas suelen ser muy agradecidos y nobles por haber sido rescatados y reintegrados a una nueva familia, así que encontrarás un amigo fiel y muy cariñoso cada vez que entres por la puerta. </p> </div>

          
          <a class="btn btn-default btn-call-to-action" href="mascotas.html" target="_blank">Adopta una mascota</a>
        </div>
      </div>
    </div>
  </section>

    <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>Auspiciantes</h2>
                <table> 
                    <tr> 
                        <td> <img  src="img/imgs/ausp1.png" alt="ProPlan"> </td>
                        <td> <img  src="img/imgs/ausp2.png" alt= "Bayer"> </td>
                        <td> <img  src="img/imgs/ausp3.png" alt= "Royal Canin"> </td>
                    </tr>
                </table>
                   
              <p>Marcas reconocidas a nivel nacional/internacional para darle mejor calidad de vida a tu mascota</p>
              <a class="btn btn-default btn-call-to-action" href="#" >Conoce más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="#">Mapa del sitio</a></li>
                <li><a href="nosotros.html">Acerca de</a></li>
                <li><a href="politicas.html">Políticas de privacidad</a></li>
                    
    
                 
              </ul>
              </div>
          </div>
        </div>
      </div>
    </footer>
            
            
<?php } ?>
            
    
    </body>
</html>
