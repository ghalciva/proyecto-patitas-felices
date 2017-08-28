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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>



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
                    <li><a href="index.php" >Inicio</a></li>
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
    
    <!--      <div class="col-md-10 col-md-offset-2" -->
      
    <!-- contact form start -->
    <section id="slider">
        <section id="contact-form">
          <div class="container"><center>
              <div class="col-md-12">
                    <div class="block">
                    <form action="registrado.php" method="post" target="_blank">
                          <h1 class="form-group">REGÍSTRALO</h1>
                        <div class="form-group">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre de la mascota">
                        </div>
                        <div class="form-group">
                          <input type="text" name="fecha" class="form-control" placeholder="Fecha de nacimiento de la mascota aa/mm/dd">
                        </div>
                        <div class="form-group">
                          <input type="text" name="raza" class="form-control" placeholder="Raza de la mascota">
                        </div>
                        <div class="form-group">
                          <input type="text" name="edad" class="form-control" placeholder="Edad de la mascota">
                        </div>
			<div class="form-group">
                          <input type="text" name="color" class="form-control" placeholder="Color de la mascota">
                        </div>
			<div class="form-group">
                          <input type="text" name="sexo" class="form-control" placeholder="Sexo de la mascota">
                        </div>
			<div class="form-group">
                        <input type="submit" name="imagen" class="form-control" value="Cargar imagen...">
                        </div>
                        <button class="btn btn-default" type="submit"> Siguiente </button>
                         </form>
              </div>
            </div>
        </center></div>
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
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Políticas de privacidad</a></li>
              </ul>
              </div>
          </div>
        </div>
      </div>
    </footer>
            
            
 
            
    
    </body>
</html>
