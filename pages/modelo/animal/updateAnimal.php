<?php
session_start();

$usuario = $_SESSION['MiSesion'];

$idMascota=$_GET["idMascota"];
$nombre=$_GET["nombre"];
$edad=$_GET["edad"];
$raza=$_GET["raza"];
$fecha=$_GET["fecha"];
$sexo=$_GET["sexo"];
$color=$_GET["color"];
$imagen=$_GET["imagen"];

include_once("animalCollector.php");
$animalCollectorObj = new animalCollector();

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Animal</title>
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
#	              $usuario = $_SESSION['MiSesion'];
    ?>

<!-- Header Start -->
  <header>
        <div class="container">
            <ul class="login">
                <li class="loginu"><a href="../../../salir.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a></li>
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
                    <form action="saveUpdateAnimal.php" method="get">
                        <h1 class="form-group">M O D I F I C A R &nbsp;&nbsp;&nbsp;  A N I M A L</h1>
			<?php
				echo "<label>IdMascota</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' name='idMascota' class='form-control' value='". $idMascota . "' readonly>";
				echo "</div>";
				echo "<label>Nombre</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $nombre . "' name='nombre'>";
				echo "</div>";
				echo "<label>Edad</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $edad . "' name='edad'>";
				echo "</div>";			
				echo "<label>Raza</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $raza . "' name='raza'>";
				echo "</div>";
				echo "<label>Fecha Nacimiento</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $fecha . "' name='fecha'>";
				echo "</div>";
				echo "<label>Sexo</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $sexo . "' name='sexo'>";
				echo "</div>";
				echo "<label>Color</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $color . "' name='color'>";
				echo "</div>";
				echo "<label>Imagen</label>";
				echo "<div class='form-group'>";
				echo "<input type='text' class='form-control' value='". $imagen . "' name='imagen'>";
				echo "</div>";
				echo "<a href='saveUpdateAnimal.php?idMascota=". $idMascota ."'><button class='btn btn-default' type='submit'> Siguiente </button>";

			?>                        
                   </form>
              </div>
            </div>
        </center></div>
        </section> 
    </section>


    
      <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                             } 
                        ?>
 
    </body>
</html>
