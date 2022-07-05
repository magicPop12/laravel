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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
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
h1 {font-family: 'Incompleeta';
}
</style>
        
    </head>
    <!--style="background-color:#DFDEDC;-->
    <body>
<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
      <div class="container">

        <a class="navbar-brand" href="/">
            
            <img src="/imagenes/GEA Capital_GEA.png" style="height: 50px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#Conocenos">Conócenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Carta">Carta del director</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Desarrollos">Desarrollos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Socios">Socios comerciales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Inversionistas">Inversionistas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contacto">Contacto</a>
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
    <h1>Nezahualcóyotl 237</h1>
     <p>4 exclusivos departamentos en el corazón de la ciudad de Toluca.</p>
    </center>
    <div class="row">
                <!-------Iconos del edificio---------->
               <div class="col-lg-5 col-sm-12">
                    <center>
                        <h5 style="font-family: 'Bebas Neue', cursive;">Nezahualcóyotl 237</h5>
                    </center>
                    <p>4 exclusivos departamentos en el corazón de la ciudad de Toluca.</p>
                    <div class="row">
                        <div class="col-3">
                    <ul class="nav flex-column">
                        <li>
                            <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                              <img src = '/imagenes/GEA/Estacionamiento.png' width="45" height="45" style='vertical-align: middle' /> 1-2
                            </p>
                        </li>
                        <li>
                            <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                              <img src = '/imagenes/GEA/Recámaras.png' width="50" height="50" style='vertical-align: middle' /> 3
                            </p>
                        </li>
                        
                    </ul>
                    </div>
                    <div class="col-6">
                    <ul class="nav flex-column">
                        <li>
                            <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                              <img src = '/imagenes/GEA/Baños.png' width="45" height="45" style='vertical-align: middle' /> 2
                            </p>
                        </li>
                        <li>
                            <p style = 'line-height: 20px'>
                              <img src = '/imagenes/GEA/Terraza.png' width="45" height="45" style='vertical-align: middle' />1
                            </p>
                        </li>
                        
                    </ul>
                    </div>
                    </div>

                </div>
                <!------Fin de iconos---------->
                <div class="col-lg-7 col-sm-12">
                    <!--Inicio de carrusel-->
    <div class="container-fluid">
       <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  style="margin-bottom: 0px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 100%;">
        <!--Aqui poner la imagen-->
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        
       <img class="img-fluid" src="/imagenes/INAH2_1 - Photo.jpg">
        </a>
        
      </div>
      <div class="carousel-item" style="height: 100%;">
       <!--Aqui poner la imagen-->
       <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">
       <img class="d-block w-100" src="/imagenes/INTERIOR_15 - Foto.jpg">
   </a>
        
      </div>
      <div class="carousel-item" style="height: 100%;">
       <!--Aqui poner la imagen-->
       <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">
       <img class="d-block w-100" src="/imagenes/INTERIOR_19 - Foto.jpg">
   </a>
       
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Despues</span>
    </button>
  </div>
    </div>
    <!------Fin de carrusel---------->
    <!--Modal: modal carrusel 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/INAH2_1 - Photo.jpg">
      </div>
    </div>
  </div>
</div>
    <!---------------------------->
    <!--Modal: modal carrusel 2-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/INTERIOR_15 - Foto.jpg">
      </div>
    </div>
  </div>
</div>
    <!--Modal: modal carrusel 3-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/INTERIOR_19 - Foto.jpg">
      </div>
    </div>
  </div>
</div>
    <!---------------------------->
  </div>
  </div>
</div>   
      <!-- FOOTER 
<footer class="container-fluid" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px">
      -->
  <footer class="container-fluid" style="background-color:#DFDEDC; padding: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
        <center>  
          <img src = '/imagenes/iconos/contact.svg' width="30" height="30" style='vertical-align: middle' /><span style="padding-left: 5px;">
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                               (722) 120 5986
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
            
         <img src = '/imagenes/iconos/email-symbol.svg' width="30" height="30" style='vertical-align: middle' />
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                                talento@ghoru.com.mx
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
           <p style = 'line-height: 20px'>
                                
                                <a href="https://www.linkedin.com/company/ghoru-talento/"><img src = '/imagenes/iconos/linkedin-square.svg' width="30" height="30" style='vertical-align: middle' /></a>
                              </p>
                              </center>
          <p>&copy; 2022 Hecho por Data Docks &middot; <a href="#">Privacidad</a></p>
      
        </div>
      </div>
   </div>
  
  </footer>                                       
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
