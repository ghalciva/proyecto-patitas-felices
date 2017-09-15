<?php
 session_start();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patitas Felices</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
     <!-- CSS -->
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
	</head>
	<body>
		<section>
			<?php
				$_SESSION['MiSesion'] = $_POST['usuario'];
				$usuario = $_POST['usuario'];
				$clave = $_POST['clave'];
			?>
    <!-- Header Start -->
  <header>
        <div class="container">
            <ul class="login">
                <li class="loginu"><a href="pages/salir.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a></li>
                <li class="loginu"></span> Bienvenido <?php echo $usuario;?> </a></li>
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
                          <a class="navbar-brand" href="index.php">
                            <img class="navbar-brand" src="img/logo.png" alt="Logo" >
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php">Inicio</a></li>
                            <li><a href="pages/nosotros.php">Nosotros</a></li>
                            <li><a href="pages/mascotas.php" >Mascotas</a></li>
                            <li><a href="pages/agenda.php">Agenda</a></li>
                            <li><a href="pages/contacto.php" >Contacto</a></li>
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
              <h1 class="animated fadeInUp">Administrar tablas</h1>
                  <a class="btn btn-default btn-call-to-action" href="tablaAdopcionMascota.php">Adopcion de mascota</a>
                  <a class="btn btn-default btn-call-to-action" href="pages/modelo/animal/readAnimal.php">Animal</a>	      	      
                  <a class="btn btn-default btn-call-to-action" href="tablaCliente.php">Cliente</a>	      
                  <a class="btn btn-default btn-call-to-action" href="tablaDetalleReserva.php">Detalle de reserva</a>  
                  <a class="btn btn-default btn-call-to-action" href="tablaFichaMedica.php">Ficha médica</a>	     
                  <a class="btn btn-default btn-call-to-action" href="pages/modelo/gato/readGato.php">Gato</a><br>
                  <a class="btn btn-default btn-call-to-action" href="pages/modelo/perro/readPerro.php">Perro</a>	 
                  <a class="btn btn-default btn-call-to-action" href="tablaPersona.php">Persona</a>	               
                  <a class="btn btn-default btn-call-to-action" href="tablaRegistroPersona.php">Registro de persona</a>	           
                  <a class="btn btn-default btn-call-to-action" href="tablaReserva.php">Reserva</a>	           
                  <a class="btn btn-default btn-call-to-action" href="tablaUsuario.php">Usuario</a>	           
                  <a class="btn btn-default btn-call-to-action" href="tablaVeterinario.php">Veterinario</a>	           
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
                <li><a href="nosotros.php">Acerca de</a></li>
                <li><a href="politicas.php">Políticas de privacidad</a></li>
                    
    
                 
              </ul>
              </div>
          </div>
        </div>
      </div>
    </footer>
            
    

 
</body>
</html>

