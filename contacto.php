<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
       <title>Coup d'etat</title>
      <link rel="icon" type="image/png" href="img/icono-empresa.png"/>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
        <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                  </div>                  
                  <p class="nav-text">Menú</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.html">Inicio</a>
                        </li>
                        <li><a href="nosotros.html">Nosotros</a>
                        </li>
                        <li><a href="simulador.html">Simulador</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href=""><strong>VR</strong>LIFE</a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                     <li><a href="index.html#third-block">Galería</a>
                        </li>
                        <li>
                           <a>Videos</a>             
                           <ul>
                              <li><a href="videos.html">Desarrollo y documentación</a>
                              </li>
                              <li><a href="videos.html">Experiencia de usuarios</a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="contacto.php">Contacto</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="head">
            <div class="line">
               <h1>Contacta con nosotros</h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
                     <h2>RVLIFE</h2>
                     <address>
                        <p><i class="icon-home icon"></i> FCFM - UANL</p>
                        <p><i class="icon-globe_black icon"></i> Nuevo León, México</p>
                        <p><i class="icon-mail icon"></i> rvlife@gmail.com</p>
                     </address>
                     <br />
                     <!--<h2>Redes sociales</h2>
                     <p><i class="icon-facebook icon"></i> <a href="index.html">Dimension entertainment</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="#">@DimensionEnt</a></p>-->
                  </div>
                  <div class="s-12 l-6">
                     <h2>Envíanos un comentario:</h2>
                     <form class="customform" id="form-comentario" action="" method="post">
                        <div class="s-12 l-7"><input class="form-control requerido" id="correo" name="correo" placeholder="Tu correo" title="Your e-mail" type="text" /></div>
                        <div class="s-12 l-7"><input class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" title="Your name" type="text" /></div>
                        <div class="s-12"><textarea class="form-control" id="comentario" placeholder="Tu comentario" name="comentario" rows="5"></textarea></div>
                        <div class="s-12 m-6 l-4"><button id="boton-enviar" type="submit">Enviar comentario</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAP -->	
        </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>2017
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="contant.php" title="Sobre nosotros"><strong>VRLIFE</strong></a>
               </p>
            </div>
         </div>
      </footer>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>

      <script language="javascript" type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script src="js/comentario.js"></script>

      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 


      <style>
      .requerido
{
   border: 2px solid rgba(255,0,0,0.5);
}
</style>

   </body>
</html>