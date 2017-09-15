<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Galeria de Perros - Patitas felices</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    
    <!-- CSS -->
   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     


  </head>
	<body>	

<header>
        <div class="container">
            <ul class="login">
            <li class="loginu"><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
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
    <section id="global-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Pasos para adoptar</h1>
                            <table>
                            <tr> 
                                <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                <td> <img src="../img/imgs/search.png" width="260" height="180" alt="Img"></td> 
                                <td> <img src="../img/imgs/cursor.png" width="260" height="180" alt="Img"></td>     
                                <td> <img src="../img/imgs/check.png" width="260" height="180" alt="Img"></td>     
                            </tr>  
                            <tr> 
                                <td> &nbsp; </td>
                                <td> <p style="text-align:center"> Encuentra a tu mascota favorita </p> </td> 
                                <td> <p style="text-align:center"> Selecciona tu favorita </p> </td> 
                                <td> <p style="text-align:center"> Listo! Mascota nueva </p> </td>     
                            </tr>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Portfolio Start -->
    <section id="portfolio-work"> 
        <h5> &nbsp; </h5>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                    <table>
                        <tr> 
                            <td> 
                                <form class="navbar-form navbar-left">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Búsqueda rápida">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="sidebartitle"> <a href="perros.php"> Perros </a> </td>
                        </tr>
                        <tr>
                            <td> 
                                <ul> <li> &nbsp; </li>
                                    <li> <a href="adoptarPerro.php" class="sidebarsubt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adoptar </a> </li>
                                    <li> <a href="verPerros.php" class="sidebarsubt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ver </a> </li>
                                </ul> 
                            </td>
                        </tr>
                        <tr>
                            <td class="sidebartitle"> <a href="gatos.php"> Gatos </a> </td>
                        </tr>
                        <tr>
                            <td> 
                                <ul> <li> &nbsp; </li>
                                    <li> <a href="#" class="sidebarsubt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adoptar </a> </li>
                                    <li> <a href="#" class="sidebarsubt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ver </a> </li>
                                </ul> 
                            </td>
                        </tr>
                    </table>
                  
                    
                </div>
              </div>
            </div>
        </div>
    </section>

    <!-- pets gallery sections -->
    <section id="clients-logo-section">
        <h5> &nbsp; </h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="imagenes"> 
                            <table>
                                <?php


include_once("../animalCollector.php");
$animalCollectorObj = new animalCollector();
foreach ($animalCollectorObj->showAnimals() as $c){ 
  echo "<tr>";
  echo $c->getIdMascota() . "  -  " . $c->getNombre();                                     
  #echo " <a href='formularioEditar.php?id=". $c->getIdMascota() . "'>editar</a> " ;
  #echo " <a href='formularioEliminar.php?id=". $c->getIdMascota(). "'>eliminar</a>";
  echo "</tr>"; 
}

?>
                            </table>


                            </div>
                        </div>
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
              <h2>¿Ya adoptaste?</h2>
              <p>Guayaquil alberga a más de 600 perros y gatos que deambulan en las calles, si ya adoptaste desde nuestra plataforma, nos gustaría saber como fue tu experiencia.</p>
              <a class="btn btn-default btn-call-to-action" href="#" >Cuéntanos tu historia</a>
            </div>
          </div>
        </div>
      </div>
    </section>
	</body>
</html>

