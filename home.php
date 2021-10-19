
<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Registro/css/home.css">
    <link rel="shortcut icon" href="Img\logos\logoblanc.jpg" alt="Logo Roterger Designs" >
    
</head>
<header>
    <div class="menu">
    <img href="Img/logos/logorosa.jpg" class="logo" alt="Logo Roterger Designs" >
   <div class="lletresmenu">
<nav class="nav" >

   <ul>
					<li><a href="home.php"><i class="home" aria-hidden="true"></i><span class="off">Inicio</span></a></li>
					<li><a href="web/tienda.php"><i class="home" aria-hidden="true"></i><span class="off">Tienda</span></a></li>
					<li><a href="#"><i class="home" aria-hidden="true"></i><span class="off">Porfolio</span></a></li>
					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="off">Contacto</span></a></li>
                    <li class="Nom"><a href="#"><i class="home" aria-hidden="true">
                        <?php

                        if (isset($_SESSION['usuario']) )
                        {
                            echo ucfirst($_SESSION['usuario']);
                            
  

                          
                      
                        }
                        else{ 
                              ?>
                            
                                         <a href="Login/formulario_login.php">Iniciar Session</a>
                            <?php
                                                    }
                                                        
                                                   
                            
                            
                                            
                                                    if(isset($_SESSION['usuario']) ) {   ?>  
                                                        
                                                                              <?php
                                                                              }
                             ?>

           

           </i><span class="off"></span></a>
          

           <?php
          if(isset($_SESSION['usuario'])){ ?>
           <ul class="submenu">
               <li >
                    <a href="Registro/php/cerrar.php">Cerrar Session</a>
                </li>
            </ul> 
              <?php 
             } 
            
            else{
               
            ?>

            <ul class="submenu">
                <li >
                    <a href="Registro/registro.php">Registrate</a>
                </li>
            </ul> 
            <?php } ?>
                    </li>
  </ul>
                </nav>
</div>
</div>
</header>
<body>
<p class="paco"></p>
<p class="en"></p>
<p class="bolas"></p>
</body>
</html>