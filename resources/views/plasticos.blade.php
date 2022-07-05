<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plasticos Italianos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href = "font/stylesheet.css" rel = "stylesheet" type = "text/css" />
        <link rel="shortcut icon" href="/imagenes/LOGO PARA PARED.png">
        <script src="js/bootstrap.js" crossorigin="anonymous"></script>
        <!-------Fonts----------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- Styles -->
       
<style type="text/css">
    .carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {

  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  max-height: 100%;
}
/*Quitar el padding de container
.container-fluid{
  padding-right: var(--bs-gutter-x, 0.00rem);
  padding-left: var(--bs-gutter-x, 0.00rem);
}
*/
h1 {font-family: 'Bebas Neue', cursive;}
input::placeholder {
  font-family: 'Bebas Neue', cursive;
}
textarea::placeholder {
  font-family: 'Bebas Neue', cursive;
}

body {
  background-image:url('imagenes/plasticos/Imágenes_Mesa de trabajo 1Ligera.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

#Conocenos{
  
  background-image:url('imagenes/plasticos/Imágenes_Mesa de trabajo 1Ligera.png');
  
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
    background-attachment: fixed;
    min-height: 700px;
}
.people-wrap {
  
  display: flex;
  align-items: center
}
.img 
{
  display: block
  /* remove gap*/
}
.dropdown1 {
  position: relative;
  display: inline-block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown1:hover .dropdown-content1 {
  display: inline;
}
.nav-item>a:hover {
            background-color: #77b82a !important;
            color: white !important;
        }
</style>
       
    </head>
    <!--style="background-color:#DFDEDC;-->
    <body>
<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
      <div class="container">

        <a class="navbar-brand" href="/">
            
            <img src="/imagenes/LOGO PARA PARED.png" style="height: 50px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#Inicio" style="font-family: 'Bebas Neue', cursive;">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Nosotros" style="font-family: 'Bebas Neue', cursive;">NOSOSTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Historia" style="font-family: 'Bebas Neue', cursive;">HISTORIA</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-family: 'Bebas Neue', cursive;">PRODUCTOS</a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown1 dropend">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/productos" role="button" aria-expanded="true" style="font-family: 'Bebas Neue', cursive;">PERICO</a>
                  <ul class="dropdown-content1">
                    <a class="dropdown-item" href="/productos#cepillos" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DE MANO</a>
                    <a class="dropdown-item" href="/productos#escobasTipoCepillo" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO CEPILLO</a>
                    <a class="dropdown-item" href="/productos#escobasTipoAbanico" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO ABANICO</a>
                    <a class="dropdown-item" href="/productos#articulosDiversos" style="font-family: 'Bebas Neue', cursive;">ARTICULOS DIVERSOS</a>
                    <a class="dropdown-item" href="/productos#cepillosDentales" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DENTALES</a>
                    
                    
                    
                  </ul>
                </li>
                <li><a class="dropdown-item" href="/productos#Bonita" style="font-family: 'Bebas Neue', cursive;">LA BONITA</a></li>
                <li><a class="dropdown-item" href="/productos#Hechizera" style="font-family: 'Bebas Neue', cursive;">LA HECHICERA</a></li>
                
                 </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contacto" style="font-family: 'Bebas Neue', cursive;">CONTACTO</a>
            </li>
             @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="/admin">Administración</a>
            </li>
            @endif
          </ul>
          
        </div>
      </div>
</nav>
<main>
    <!--Inicio de carrusel--->
    
   
     <div class="container-fluid" style="padding: 0px;" id="Inicio">
       <video class="mx-auto p-0 mt-0 d-block" style="height: 100%; width: 100%; opacity:1.0; margin: 0px; padding: 0px;" src="/imagenes/plasticos/Video Corporativo PI subtitulos.mp4?ngsw-bypass=true" autoplay=""  muted loop alt="NO" controls playsinline></video>
    
    </div>

    <!------Fin de carrusel---------->
    <!---¿Quienes somos?--->
    <div class="container-fluid bg-dark text-light" id="Conocenos" style="
    

    " >
        <div class="container">
            <center>
                <h1 style=" padding-top: 10%;">Nuestras marcas.</h1>
                <br>
                
            </center>
            <br>
            <br>
             <div class="row">
               <div class="col-lg-4 col-sm-12 d-flex flex-wrap align-items-center">
                <center>
                <img class="d-block w-100" style="" src="/imagenes/plasticos/Perico.png">
                </center>
            </div>
            <div class="col-lg-4 col-sm-12">
                <center>
                <img class="d-block w-100" src="/imagenes/plasticos/La Bonita.png">
                </center>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex flex-wrap align-items-center">
                <center>
                <img  class="d-block w-100" src="/imagenes/plasticos/La Hechicera.png">
                </center>
            </div>
           
            
          </div>
           <center>
              
              <a href="/productos" style="margin: 10px; background-color: #77b82a; color: white;" class="btn" role="button"><h5>Ver Productos</h5></a>
            </center>
            
           
        </div>
            
    </div>
    <!--Fin de quienes somos-->
    <!---Conocenos-->
   <div class="container-fluid bg-light">
        <center>
          <br id="Nosotros">
          <br>
          <br>
          <br>
            <h1 class="display-1">Nosotros</h1>
            <br>
        </center>
        <div class="container">
           <div class="row">
               <div class="col-lg-4 col-sm-12">
                    

                  <h2 class="display-4 text-end" id="parrafo"><strong>Conoce los</strong></h2>

                  <h2 class="display-4 text-end" id="parrafo2"><strong>principios  y</strong></h2>

                  <h2 class="display-4 text-end" id="parrafo3"><strong>valores de</strong></h2>

                  <h2 class="display-4 text-end" id="parrafo4"><strong>nuestra</strong></h2>

                  <h2 class="display-4 text-end" id="parrafo5"><strong>compañía</strong></h2>






               </div>
               <div class="col-lg-4 col-sm-12">
                <center>
                   
                   <h3 style="color: #77b82a;"><strong>FILOSOFÍA</strong></h3>
                   <br>
               </center>
               <p>Somos una empresa que está siempre a la vanguardia con el objetivo de innovar y revolucionar el mercado fabricando productos de limpieza de alta calidad, considerando el aspecto ecológico, para satisfacer las necesidades de nuestros usuarios, teniendo como guía nuestra misión y valores.</p>
               <center>
                 <h3 style="color: #77b82a;"><strong>MISIÓN</strong></h3>
                 <br>
               </center>
               <p>Innovar, desarrollar y fabricar productos para un entorno limpio.</p>
               <center>
                 <h3 style="color: #77b82a;"><strong>VISIÓN</strong></h3>
                 <br>
               </center>
               <p>Ser la empresa líder en diseño, desarrollo y fabricación de productos de limpieza, reconocida por nuestro servicio, calidad y confianza en cada una de nuestras marcas.</p>
               
               </div>
               <div class="col-lg-4 col-sm-12">
                <center><h3 style="color: #77b82a;"><strong>VALORES</strong></h3></center>

<ul><li><strong>PASIÓN</strong>: nos brindamos con empeño y constancia. Más que una labor,  trabajamos con amor y entrega.</li><li><strong>RESPETO:</strong>&nbsp;reconocemos y apreciamos nuestros principios y los de nuestro equipo.</li><li><strong>CONFIANZA</strong>: creamos un ambiente de calidad en las relaciones que se establecen entre nuestro equipo.</li><li><strong>TRABAJO EN EQUIPO:</strong>&nbsp;unimos esfuerzos  para el logro de nuestros objetivos y contribuimos al desarrollo de todos.</li><li><strong>CALIDAD:</strong>&nbsp;tenemos presentes las expectativas de nuestros clientes, para poder satisfacerlas e incluso superarlas, introduciendo la mejora continua.</li></ul>
                 
                 
               </div>
           </div> 
        </div>

      <br  id="Historia">
      <br>  
      <br>
    </div>

    <!--Conocenos-->
    <!--Historia---->
    
    <div class="container-fluid"  style="padding: 0px;">
        
        
        
        <div class="container-fluid" style="background-color: #c4a48b;">
            <div class="row">
               
                <div class="col-lg-6 col-sm-12" style="padding: 0px;">
                   <img src="imagenes/plasticos/HistoriaFinal1.png" style="width: 100%; padding: 0px;">

                </div>
                
                <div class="col-lg-6 col-sm-12" style="padding: 0px;">
                   <img src="imagenes/plasticos/HistoriaFinal2.png" style="width: 100%; padding: 0px;">
    
                </div>

                    </div>


                </div>
            </div>
       
    <!---Fin Historia--->
    <!------------Tecnologia--->

       
    <!--------Fin de socios comerciales--------------->
    
    <!------------Inicio de Contacto-------------->
    <br id="Contacto">
    <br>
    <br>
    <br>
    <div class="container-fluid"  style="padding: 0px;">
        <center>
            <h1 style="color: white;">Contacto</h1>
            <br>
        </center>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-sm-12">
                     <form method="post" action="contacto1">
                {{csrf_field()}}
                <div class="mb-3">
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" required="" name="Nombre" placeholder="Nombre" aria-label="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" required="" name="Apellidos" placeholder="Apellidos" aria-label="Last name">
                  </div>
                </div>
                <br>
                <input class="form-control" type="tel" name="Telefono" required="" placeholder="Teléfono">
                <br>
                <input class="form-control" type="email" name="Correo" required="" placeholder="Correo">
                <br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Mensaje" placeholder="Mensaje"></textarea>
                <center>
                    <div class="p-3">
                 <button type="submit" class="btn  btn-round" style="background-color: #77b82a; color: white;">Enviar</button>
                 </div>
                 </center>
        </form>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                   
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15054.34407374942!2d-99.5708132!3d19.38707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad4d6f2401a64f5f!2sPl%C3%A1sticos%20Italianos!5e0!3m2!1sen!2smx!4v1646337798457!5m2!1sen!2smx" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <h5 style="color: white;">Calle 6 Norte #201, Parque Ind. Toluca 2000,  C.P. 50200 Toluca de Lerdo, Méx.</h5>
                    <h5 style="color: white;">+52 (722) 2761470</h5>
                </div>
        </div>    
    </div>
    <!------------------Fin de contacto----------------------------------->
   
      <!-- FOOTER 
<footer class="container-fluid" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px">
      -->
  <footer class="text-white bg-dark" style=" padding: 0px;">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
             <div  class="people-wrap">
  <div class="people">
                          <img src = '/imagenes/LOGO PARA PARED.png' height="40" style='vertical-align: middle; display: block;' />
                          </div>
                          <div>
                            <p style = "line-height: 20px;">
                               <a href="/privacidad" style="color: white;">Privacidad</a> Plásticos Italianos 2022 Derechos reservados
                            </p>
                            <p>
                              
                              Creado por <a href="http://datadocks.com.mx/">Data Docks
                            </a>
                            </p>
                            </div>
                            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <p >Calle 6 Norte #201, Parque Ind. Toluca 2000, C.P. 50200 Toluca de Lerdo, Méx.</p>
    <p >+52 (722) 2761470 </p>
        </div>
      </div>
  </footer>                                       
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>
<script>
function myFunction(x) {
  if (x.matches) { // If media query matches

    document.getElementById("parrafo").className = "display-4 text-center";
    document.getElementById("parrafo2").className = "display-4 text-center";
    document.getElementById("parrafo3").className = "display-4 text-center";
    document.getElementById("parrafo4").className = "display-4 text-center";
    document.getElementById("parrafo5").className = "display-4 text-center";
  }else{
    document.getElementById("parrafo").className = "display-4 text-end";
    document.getElementById("parrafo2").className = "display-4 text-end";
    document.getElementById("parrafo3").className = "display-4 text-end";
    document.getElementById("parrafo4").className = "display-4 text-end";
    document.getElementById("parrafo5").className = "display-4 text-end";
  }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>
    </body>
</html>
