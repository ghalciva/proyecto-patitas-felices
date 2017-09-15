<?php
session_start();
?>
<?php
include_once("perroCollector.php");
$usuario = $_SESSION['MiSesion'];
$id;

$perroCollectorObj = new perroCollector();

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perro</title>
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
                <li class="loginu"><a href="../../salir.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión</a></li>
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
           
       <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
                 <h1>Tabla Perro</h1>
    <a href="createPerro.php"><button class="btn btn-default btn-call-to-action">Crear Perro</button></a> <br>
    <table id="tabla">
        <tr>    
            <th>&nbsp;&nbsp;IdPerro&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;IdMascota&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Nombre&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Edad&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Sexo&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Raza&nbsp;&nbsp;</th>
        </tr>
        <?php
            foreach ($perroCollectorObj->showDog() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdPerro() . "</td>";
            echo "<td>" . $c->getIdMascota() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";   
            echo "<td>" . $c->getEdad() . "</td>";
            echo "<td>" . $c->getSexo() . "</td>";
            echo "<td>" . $c->getRaza() . "</td>";                             
            
            echo "<td><a href='updatePerro.php?idPerro=" . $c->getidPerro() . "&idMascota=" . $c->getIdMascota() . "&nombre=" . $c->getNombre() . "&edad=" . $c->getEdad() . "&sexo=" . $c->getSexo() . "&raza=" . $c->getRaza()."'> <button class='btn btn-default btn-call-to-action'>Editar</button></a></td>";
            echo "<td><a href='deletePerro.php?idPerro=". $c->getidPerro() ."'><button class='btn btn-default btn-call-to-action'>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table> 	  
		<a href="../../../indexAdmin.php"><button class="btn btn-default btn-call-to-action">Regresar</button></a>         
            </div>
          </div>
        </div>
      </div>
    </section>
       
   <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../indexAdmin.php'>";
                             } 
                        ?>

</body>
</html>
