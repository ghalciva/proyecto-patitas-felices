<?php
session_start();
?>

<?php
include_once("animalCollector.php");
$animalCollectorObj = new animalCollector();
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Animal </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    
    <!-- CSS -->
   
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/animate.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  </head>
<body>
  <?php
	if (isset($_SESSION['MiSesion'])){
		$usuario = $_SESSION['MiSesion'];
  ?>
       
<!-- Header Start -->
  <header>
        <div class="container">
            <ul class="login">
                <li class="loginu"><a href="salir.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a></li>
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
                          <a class="navbar-brand" href="../../../indexAdmin.php">
                            <img class="navbar-brand" src="../../../img/logo.png" alt="Logo" >
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="nosotros.php">Nosotros</a></li>
                            <li><a href="mascotas.php" >Mascotas</a></li>
                            <li><a href="agenda.php">Agenda</a></li>
                            <li><a href="contacto.php" >Contacto</a></li>
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
        <section id="contact-form">
          <div class="container"><center>
              <div class="col-md-12">
                    <div class="block">
                    <form action="saveAnimal.php" method="post">
                          <h1 class="form-group">C R E A R &nbsp;&nbsp;&nbsp;  A N I M A L</h1>
                        <div class="form-group">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre de la mascota">
                        </div>
                        <div class="form-group">
                          <input type="text" name="edad" class="form-control" placeholder="Edad de la mascota">
                        </div>
                        <div class="form-group">
                          <input type="text" name="raza" class="form-control" placeholder="Raza de la mascota">
                        </div>
                        <div class="form-group">
                          <input type="date" name="fecha" class="form-control" placeholder="Fecha de nacimiento de la mascota aa/mm/dd">
                        </div>
			<div class="form-group">
                          <input type="text" name="sexo" class="form-control" placeholder="Sexo de la mascota">
                        </div>
			<div class="form-group">
                          <input type="text" name="color" class="form-control" placeholder="Color de la mascota">
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

    
      <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../indexAdmin.php'>";
                             } 
                        ?>
 
    </body>
</html>
