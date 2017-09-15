<?php
 session_start();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio Sesión - Patitas felices</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    
    <!-- CSS -->
   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
<?php
if(isset($_SESSION['MiSesion'])){
	echo"<p>Hola usuario:(" . $_SESSION['MiSesion']. ")
		[<a href='salir.php'>salir</a>]";


include_once('../LoginCollector.php');

$id =1;

$LoginCollectorObj = new LoginCollector();

foreach ($LoginCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdPersona() . "  && " .$c->getNombre();
	echo " " . "<a href='formularioDemoEditar.php?id=".$c->getIdPersona()."'>Editar</a>";
	echo " " . "<a href='eliminar.php?id=".$c->getIdPersona()."'>ELiminar</a>";    
	echo " " . "<a href='formularioinsertar.php?id=".$c->getIdPersona()."'>Nuevo</a>";                                    
  echo "</div>"; 
}





}else{
?>




    <!-- Header Start -->
  <header>
        <div class="container">
            <ul class="login">
                <li class="loginu"><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
            </ul>
            <div class="row">
                <div class="col-md-12">
                            <!-- header Nav Start -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="../index.php">
                            <img class="navbar-brand" src="../img/logo.png" alt="Logo" >
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php" >Inicio</a></li>
                            <li><a href="nosotros.php">Nosotros</a></li>
                            <li><a href="mascotas.php" >Mascotas</a></li>
                            <li><a href="agenda.php">Agenda</a></li>
                            <li><a href="contacto.php" >Contáctenos</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header close -->
    
    <!-- contact form start -->
    <section id="slider">
	<h3> &nbsp;</h3>
        <section id="contact-form">
          <div class="container">
              <div class="col-md-12">
                    <div class="block">
	<form action ="../indexAdmin.php" method="post">
                          <h2>INICIAR SESIÓN</h2>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="usuario" name="usuario">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" placeholder="contraseña" name="clave">
                        </div>
                        <button class="btn btn-default" type="submit">Ingresar</button>
                         </form>

           </div>
              
              
            </div>
       
        </div>
        </section> 
    </section>
      

    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="#">Mapa del sitio</a></li>
                <li><a href="nosotros.php">Acerca de</a></li>
                <li><a href="politicas.php">Políticas de privacidad</a></li>
              </ul>
              </div>
          </div>
        </div>
      </div>
    </footer>
            
            
 
            
<?php } ?>

    
    </body>
</html>
