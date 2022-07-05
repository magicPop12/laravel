<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href = "font/stylesheet.css" rel = "stylesheet" type = "text/css" />
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
/*h1 {font-family: 'Incompleeta';
}*/
input::placeholder {
  font-family: 'Bebas Neue', cursive;
}
textarea::placeholder {
  font-family: 'Bebas Neue', cursive;
}
/*
body {
  background-image:url('imagenes/plasticos/Imágenes-03800px.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
*/
#Conocenos{
  /*
  background-image:url('imagenes/plasticos/Imágenes_Mesa de trabajo 1.png');
  */
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
    height: 700px;
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
</style>
        
    </head>
    <!--style="background-color:#DFDEDC;-->
    <body>
<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
      <div class="container">

        <a class="navbar-brand" href="/">
            
            <img src="/imagenes/LOGO PARA PARED.png" style="height: 60px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#Conocenos" style="font-family: 'Bebas Neue', cursive;">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Carta" style="font-family: 'Bebas Neue', cursive;">NOSOSTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Desarrollos" style="font-family: 'Bebas Neue', cursive;">HISTORÍA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Socios" style="font-family: 'Bebas Neue', cursive;">TECNOLOGÍA</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-family: 'Bebas Neue', cursive;">PRODUCTOS</a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown1 dropend">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="true" style="font-family: 'Bebas Neue', cursive;">PERICO</a>
                  <ul class="dropdown-content1">
                    <a class="dropdown-item" href="/cepillos" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DE MANO</a>
                    <a class="dropdown-item" href="/cepillosDentales" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DENTALES</a>
                    <a class="dropdown-item" href="/articulosDiversos" style="font-family: 'Bebas Neue', cursive;">ARTICULOS DIVERSOS</a>
                    <a class="dropdown-item" href="/escobasTipoAbanico" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO ABANICO</a>
                    <a class="dropdown-item" href="/escobasTipoCepillo" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO CEPILLO</a>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#" style="font-family: 'Bebas Neue', cursive;">LA HECHICERA</a></li>
                <li><a class="dropdown-item" href="#" style="font-family: 'Bebas Neue', cursive;">LA BONITA</a></li>
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
<div class="container-fluid">
  <div class="container">
    <center>
            <h1 class="display-1">PERICO</h1>
            <h3 class="display-2">ESCOBAS TIPO ABANICO</h3>
            <br>
    </center>
   
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <img src="imagenes/plasticos/productos/EscobaA/AI-160.png" class="img-fluid">
      </div>
      <div class="col-lg-4 col-sm-6">
        <img src="imagenes/plasticos/productos/EscobaA/AI-200.png" class="img-fluid">
      </div>
      <div class="col-lg-4 col-sm-6">
        <img src="imagenes/plasticos/productos/BCE.png" class="img-fluid">
      </div>
    </div>  
  </div>
</div>

   
      <!-- FOOTER 
<footer class="container-fluid" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px">
      -->
  <footer class="text-white" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px;">
    <div class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2016-2022 Plasticos Italianos &middot; <a href="#" style="color: white;">Privacidad</a> &middot; Hecho por Data Docks</p>
    </div>
  </footer>                                       
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
