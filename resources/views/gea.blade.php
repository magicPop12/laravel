<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GEA Capital</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href = "font/stylesheet.css" rel = "stylesheet" type = "text/css" />
         <link rel="shortcut icon" href="/imagenes/GEA/GEA.png">
        <!-------Fonts----------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fenix&display=swap" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
.container-fluid{
  padding-left: 0rem;
  padding-right: 0rem;
  overflow: hidden;
}
body{
 /* background-image:url('imagenes/GEA/Fondo GEA obscuro 2.png');*/

background-position:right;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: white;

}
p{
  font-family: 'Fenix', serif;;
}
h5{
  font-family: 'Fenix', serif;;
}
h1 {font-family: 'Incompleeta';
}

input::placeholder {
  font-family: 'Fenix', serif;;
}
textarea::placeholder {
  font-family: 'Fenix', serif;;
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
.titulo{

}
.espacio{
  padding: 20px;
}
.espacio1{
  padding: 50px;
}
.abajo{
 
}
.celular{
  background-image:url('imagenes/GEA/Fondo GEA obscuro 2.png');
background-position:center;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.celular1{
  background-image:url('imagenes/GEA/Fondo GEA obscuro 2.png');
background-position:center;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
  .inver{
  background-image: url('imagenes/GEA/Diseño sin título (3).png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
     background-attachment: fixed;
  }
@supports (-webkit-touch-callout: none) {
  /* CSS specific to iOS devices */ 
.celular{
 background-color: #171615;
}
.celular1{
  background-color: #171615;
  }
      .inver{
  background-image: url('imagenes/GEA/Diseño sin título (3).png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
     background-attachment: scroll;
  }
  .abajo{
  padding-bottom: 30px;
}
.titulo{
    padding: 10px;
  }
}
@media only screen and (max-width: 600px) {
  .titulo{
    padding: 10px;
  }
  .espacio{
    padding: 5px;
  }
  .espacio1{
    padding: 5px;
  }
  .abajo{
  padding-bottom: 30px;
}
.celular{
    
  background-image:url('imagenes/GEA/celular3.png');
background-position:center;
    background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: cover;
}
.celular1{
  background-image:url('imagenes/GEA/celular4.png');
background-position:center;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
.espaMo{
  padding-top: 10px;
}

}
</style>  

   <style type="text/css">

    #app-messenger, #app-whatsapp{
  position: fixed;
  right: 24px;
  bottom: 25px;
  

  z-index: 1000;
  display: none;
}

#app-whatsapp{
  bottom: 30px;
  display: block;
}
#app-messenger i, #app-whatsapp i{
  font-size: 63px;
}
#app-whatsapp i{
  color: #1ebea5;
}
#app-messenger i{
  color: #0084ff; 
}

  </style>  
    
    </head>
    <!--style="background-color:#DFDEDC;-->
    <body>
     <!---
      <div id="app-whatsapp" class="bg-dark text-light">
        <div id="output" onclick="mover('Socios')">scrollTop: 0</div>
      </div>
     --->
     
<nav class="navbar navbar-expand-md navbar-light bg-light   sticky-top" id="nav"style="padding: 0px !important; ">
      <div class="container">

        <a class="navbar-brand" href="/">
            
            <img src="/imagenes/GEA Capital_GEA.png" style="height: 50px; padding: 0px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse" style="" >
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto" style="align-items: center;">
            <li class="nav-item" id="cono" style=" height: 60px;">
              <center>
              <a class="nav-link" id="conoEn" onclick="mover('Conocenos')"  style="font-family: 'Bebas Neue', cursive;">Conócenos</a>
              </center>
            </li>
            <li class="nav-item" id="carta">
              <center>
              <a class="nav-link"  onclick="mover('Carta')" id="cartaEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Carta del director</a>
              </center>
            </li>
            <li class="nav-item" id="desa">
              <center>
              <a class="nav-link"  onclick="mover('Desarrollos')" id="desaEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Desarrollos</a>
            </center>
            </li>
            <li class="nav-item" id="socios">
              <center>
              <a class="nav-link" onclick="mover('Socios')" id="sociosEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Socios comerciales</a>
              </center>
            </li>
            <li class="nav-item" id="inv">
              <center>
              <a class="nav-link" onclick="mover('Inversionistas')" id="invEn" style="font-family: 'Bebas Neue', cursive;  height: 60px;">Inversionistas</a>
              </center>
            </li>
            <li class="nav-item" id="cont">
              <a class="nav-link" onclick="mover('Contacto')" id="contEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Contacto</a>
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
    <!--Inicio de carrusel-->
    
   
    <!------Fin de carrusel---------->
     <div class="container-fluid text-light" style="padding: 0px; background-color:    #05123C;">
       <div id="myCarousel1" class="carousel slide" data-bs-ride="carousel"  style="margin-bottom: 0px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 100%;">
        <!--Aqui poner la imagen-->
        <a href="" data-bs-toggle="modal" data-bs-target="#">
        
       <img class="d-block w-100" src="/imagenes/GEA/1-1.png">
        </a>
        
      </div>
      <div class="carousel-item" style="height: 100%;">
       <!--Aqui poner la imagen-->
       <a href="" data-bs-toggle="modal" data-bs-target="#">
       <img class="d-block w-100" src="/imagenes/GEA/2.png">
   </a>
        
      </div>
      <div class="carousel-item" style="height: 100%;">
       <!--Aqui poner la imagen-->
       <a href="" data-bs-toggle="modal" data-bs-target="#">
       <img class="d-block w-100" src="/imagenes/GEA/3.png">
   </a>
       
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Despues</span>
    </button>
  </div>
    
    <!---¿Quienes somos?--->

    
      
    
        <div class="container" id="Conocenos">
          <br>
          <br>
    <br>
            <center>

                <h1 style="font-family: 'Incompleeta';" class="espaMo">¿Quiénes somos?</h1>
                <br>
                <h4 style="text-align: center;"><i>Somos una <u>empresa mexicana</u> especializada en el <u>desarrollo inmobiliario</u> en constante búsqueda de crear proyectos innovadores de alto impacto que generen valor al entorno urbano, y al mismo tiempo, conectar a clientes e inversionistas con nuestra experiencia operativa.</i></h4>
             
            </center>
            <br>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <br>
                  <center>
                  <h5 style="font-family: 'Incompleeta';" class="titulo">Misión:</h5>
                  </center>
                  <h5 style="text-align: justify;">Detectar oportunidades de desarrollo que fomenten el crecimiento socio económico y urbano del entorno, así como mantenernos a la vanguardia gracias al talento de nuestro equipo con el enfoque de crear desarrollos inmobiliarios exitosos.</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <center>
                    <br>
                  <h5 style="font-family: 'Incompleeta';" class="titulo">Visión:</h5>
                  </center>
                  <h5 style="text-align: justify;">
                  Potencializar cada proyecto para lograr que Gea Capital sea una empresa líder en el desarrollo inmobiliario, ofreciendo oportunidades de inversión atractivas para nuestros inversionistas y socios comerciales, y crear productos innovadores que puedan satisfacer las necesidades de nuestros clientes en México, Canadá, EE. UU. y Latinoamérica.
                  </h5>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <center>
                    <br>
                  <h5 style="font-family: 'Incompleeta';" class="titulo">Valores:</h5>
                  
                  <h5>
                    
                    Nuestros valores son:
                  
                  </h5>
                  <h5 style="text-align: justify;"><u>Transparencia</u> en todos nuestros procesos, <u>Pasión</u> por nuestros proyectos, <u>Trabajo en equipo</u> para alcanzar nuestros objetivos, <u>Honestidad</u> con nuestros clientes y colaboradores e <u>Integridad</u> en nuestro ser y hacer.</h5>
                  </center>
                </div>
                
                
            </div>
        </div>
    </div>
    <!--Fin de quienes somos-->
    <!---Carta del director--->
    
    <div class="container-fluid" id="imgCarta" style="background-color: #171615;">
        <center>
            
       

       
        
            
        </center>
        <div class="container-fluid celular1" id="celular">
        <div class="container" id="Carta">
        <br>
         <br>
            <br>
           <center>
          <h1>Carta del director</h1>
             </center> 
             <br>
           <div class="row">
               <div class="col-lg-8 col-sm-12">
                    <p style="text-align: justify;">
                       El mercado inmobiliario es uno de los sectores productivos más relevantes para el desarrollo económico nacional e internacional, esencial para el desarrollo de una economía sostenible dentro de un país. En México, el sector inmobiliario se caracteriza por ser uno de los pilares de progreso económico, ya que participa como una sobresaliente fuente de empleo y generador de riqueza, además de su alta participación dentro del PIB. Por lo que como desarrolladores inmobiliarios debemos mantenernos a la vanguardia y en los estándares más altos de calidad.
                    </p>
                    <p style="text-align: justify;">
                        En los últimos años, México ha incrementado la demanda de inmuebles residenciales, comerciales e industriales en venta y renta, sin embargo, el sector de la vivienda en nuestro país no cubre la demanda que existe actualmente, esto representa para nosotros un reto y una gran oportunidad para poder satisfacer dicha necesidad y brindar a más personas en todo el país nuestros servicios inmobiliarios, así como generar proyectos con una impacto humano, sustentable, urbano y de crecimiento económico.
                    </p>
                    <p style="text-align: justify;">
                      En Gea Capital nos enfocamos en ofrecer el mejor servicio y atención a nuestros inversionistas, así como a nuestros clientes finales.
                    </p>
                    <p style="text-align: justify;">
                      Nos encontramos en una búsqueda constante de oportunidades con un retorno de inversión atractivo para nuestros inversionistas para así poder ofrecerles las mejores alternativas de inversión, así como tierra con gran potencial a desarrollar. Cada uno de nuestros proyectos lleva consigo un enfoque social el cual busca hacer más accesible la industria inmobiliaria a cualquier persona, empresa u organización.

La adquisición de un bien inmueble es una de las decisiones más importantes que una persona u organización puede tomar, por lo que buscamos que nuestros proyectos sean personalizados, funcionales y con la mejor calidad del mercado.
                    </p>
               </div>
               <div class="col-lg-4 col-sm-12">
                <center>
                   <img src="/imagenes/GEA/image002.jpg" class="d-block w-100">
                   <h3>Director General</h3>
                   <img src="/imagenes/Firma A corregida blanco.png" style="height: 70px;" class="abajo">
               </center>
               </div>
           </div> 
        </div>
      </div>
    </div>
    <!--Fin de carta del director-->
    <!--Desarrollos---->
  
    <div class="container-fluid" id="imgDesa"  style="background-color: #33343B; color: white;">
        
        <img class="d-block w-100"  src='/imagenes/GEA/1.png'>
      
       
        <div class="container-fluid bg-light text-dark">
          <div class="espacio"  id="Desarrollos">
          <br>
          <br>
           <center>
          <h1>Desarrollos</h1>
             </center> 
             
             </div>
    <div class="row">
      <div class="col-lg-7 col-sm-12 order-last order-sm-first">
                    <!--Inicio de carrusel-->
                    <br>
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
  <br>
  <br>
  <br>
    </div>
    <!------Fin de carrusel---------->
    
  </div>
  <div class="col-lg-5 col-sm-12 order-first order-sm-last">
     <center>
      <br>
                      <img src="/imagenes/GEA/AlcolhuaPequeño2.png" style="width: 100%; padding-bottom: 10px;">
                       
                    <br>
                    
                    <h4><b><i>4 exclusivos departamentos en el corazón de la ciudad de Toluca.</i></b></h4>
                    <br>
                    </center>
                    <div>
                      <center>
                        <h3>
                        PRÓXIMAMENTE
                        <br>
                        </h3>
                      </center>
                    </div>
                    <center>
                    <hr style="width: 95%;">
                    </center>
                    <!--
                      ICONOS
                      --->
                      <div style="text-align: center;">
                      <h5 style = "line-height: 20px; font-family: 'Bebas Neue', cursive; display: inline; padding: 10px;">
                              <img src = '/imagenes/iconos/garage.svg' width="45" height="45" style='vertical-align: middle; padding-bottom: 7px;' /> 1-2
                            </h5>
                       
                            <h5 style = "line-height: 20px; font-family: 'Bebas Neue', cursive; display: inline; padding: 10px;">
                              <img src = '/imagenes/iconos/double-bed.svg' width="50" height="50" style='vertical-align: middle; padding-right:8px;' />2-3
                            </h5>
                            <h5 style = "line-height: 20px; font-family: 'Bebas Neue', cursive; display: inline; padding: 10px;">
                              <img src = '/imagenes/iconos/measurement-vertical.svg' width="30" height="30" style='vertical-align: middle' />90m<sup>2</sup>
                            </h5>
                             <h5 style = "line-height: 20px; font-family: 'Bebas Neue', cursive; display: inline; padding: 10px;">
                              <img src = '/imagenes/iconos/bathtub.svg' width="45" height="45" style='vertical-align: middle; padding-right: 5px;' />      2
                            </h5>
                            <h5 style = "line-height: 20px; font-family: 'Bebas Neue', cursive; display: inline; padding: 10px;">
                              <img src = '/imagenes/iconos/terrace (1).svg' width="50" height="50" style='vertical-align: middle; padding-right:8px;' />Terraza
                            </h5>
                        </div>
                        <!--FIN--->
                            <div>
                       <span class="badge rounded-pill bg-dark text-light">Pre-venta</span>
                       <span class="badge rounded-pill bg-dark text-light">En pagos</span>
                     </div> 
                            <center>
                             
                    <hr style="width: 95%;">
                    </center>
                    <div style="float: right; padding-right: 10px;">
<!------
                     <a type="button" disabled class="btn btn-dark text-light" href="#">Ver mas</a>
                      ----> 
                    </div>
  </div>
    </div>
  </div>
            </div>
     
    <!---Fin de desarrollos--->
    <!------------Inicio de socios comerciales--->
    
    <div class="container-fluid"  id="imgSocio" style="background-color: #171615">
       
        
        <div class="container-fluid celular1"  id="celular1">
<div class="container" id="Socios">
  <br>
  <br>
        <br>
        <center>
            <h1>Socios Comerciales</h1>
            <br>
            <br>
        </center>
        <center>
            <h4><i>Cada año esta industria se reinventa y es por lo que buscamos estar en vanguardia con socios
comerciales como parte importante de nuestros procesos.</i></h4>
<br>
        </center>
        <div class="row">
            <div class="col-lg-4 col-6 col-md-6">
                <center>
                <img class="d-block w-100" src="/imagenes/AMIDLogo1.png">
                </center>
            </div>
            <div class="col-lg-4 col-6  col-md-6 d-flex flex-wrap align-items-center">
                <center>
                <img  class="d-block w-100" src="/imagenes/LOGO BLANCO 1.png">
                </center>
            </div>
            <div class="col-lg-4 col-6 col-md-6 d-flex flex-wrap align-items-center">
                <center>
               
                <img class="d-block w-100" src="/imagenes/Logo omni blanco.png">
                </center>
            </div>
            <div class="col-lg-6 col-6 col-md-6  flex-wrap align-items-center">
                <center>
                 <img class="d-block w-100" style="" src="/imagenes/LOGO CODE TRANSPARENTE_Mesa de trabajo 1.1.png">
                </center>
            </div>
            <div class="col-lg-6 col-6 col-md-6  flex-wrap align-items-center">
                <center>
                <img class="d-block w-100" src="/imagenes/BLA logo blanco-01.png">
                </center>
            </div>
        </div>
      </div>
      <br>
        <br>
        <br>
    </div>
        
    </div>    
    <!--------Fin de socios comerciales--------------->
    <!------------Inicio de Inversionistas-------------->
    <div style="background-color: #171615">
   <div class="container-fluid" id="imgInv" >
        <img class="d-block w-100"  src='/imagenes/GEA/Inversionistas.png'>
      </div>
    <div class="container-fluid celular1" id="celular2">
        
        
        
        <div class="container-fluid text-light inver" id="Inversionistas">
          <br>
          <br>
        <br>
        <center>
            <h1>Inversionistas</h1>
            <br>
            
            
        </center>
            <div class="container espacio1">
              <h3 style="text-align: center;">Constantemente estamos en búsqueda de tierra para desarrollar, ofrecer opciones atractivas a nuestros inversionistas de capital y socios comerciales alineados a nuestros valores con quienes trabajar.</h3>
             

              
            </div>
            <div style="align-self: center;">
              <center>
                <a type="button" class="btn btn-light btn-lg text-dark" href="mailto:ivang@geacapital.com.mx"><i>Contáctanos</i></a>
              </center>
              <br>
              </div>
        </div>     
    
    <!------------------Fin de inversionistas----------------------------------->
    <!------------Inicio de Contacto-------------->
    
    
      <hr id="Contacto" >
      <br>
      <br>
        <center>
            <h1>Contacto</h1>
            <br>
        </center>
        <div class="container" id="imgCon">
            <div class="row">
                <div class="col-lg-4  col-sm-12">
                  <div class="container">
                    <center>
                    <i>Información de contacto</i>
                    <br>
                    </center>
                    <br>
                    <center>
                    <ul class="nav flex-column">
                        
                        <li>
                            <p style = "line-height: 20px;">
                              <img src = '/imagenes/iconos/email-symbol.png' width="30" height="30" style='vertical-align: middle' />
                            <a href="mailto:ivang@geacapital.com.mx" style="padding-left: 5px;">
                               ivang@geacapital.com.mx
                               </a>
                            </p>
                        </li>
                        <li>






                        </li>
                        <li>
                          
                            <p style = "line-height: 20px; ">
                              <img src = '/imagenes/iconos/world-wide-web.png' width="30" height="30" style='vertical-align: middle' /> 
                            <span style="padding-left: 5px;">
                              www.geacapital.com.mx
                              </span>
                            </p>
                        </li>
                    </ul>
                    </center>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                     <form method="post" action="contacto">
                {{csrf_field()}}
                <div class="mb-3">
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" required="" name="Nombre" placeholder="Nombre" aria-label="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" required="" name="Apellidos" placeholder="Apellidos" aria-label="Last name" required="">
                  </div>
                </div>
                <br>
                <input class="form-control" type="tel" name="Telefono" required="" placeholder="Telefono">
                <br>
                <input class="form-control" type="email" name="Correo" required="" placeholder="Correo">
                <br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Mensaje"></textarea>
                <center>
                    <div class="p-3">
                 <button type="submit" class="btn btn-secondary btn-round">Enviar</button>
                 </div>
                 </center>
        </form>
                </div>
            </div>
        </div>  

    </div>
    </div>
    <!------------------Fin de contacto----------------------------------->
   
      <!-- FOOTER 
<footer class="container-fluid" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px">
      -->
 <!---     
  <footer class="text-white" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px;">
    <div class="container">
    
    <ul class="nav flex-column">
                        <li>
                            <p style = 'line-height: 20px'>
                              <img src = '/imagenes/iconos/contact.png' width="30" height="30" style='vertical-align: middle' /> (722) 120 5986
                            </p>
                        </li>
                        <li>
                            <p style = 'line-height: 20px'>
                              <img src = '/imagenes/iconos/email-symbol.png' width="30" height="30" style='vertical-align: middle' /> ivang@geacapital.com.mx
                            </p>
                        </li>
                        <li>
                            <p style = 'line-height: 20px'>
                              <img src = '/imagenes/iconos/map-pin-point.png' width="30" height="30" style='vertical-align: middle' /> Nezahualtcoyotl 103, colonia 5 de Mayo, Toluca Estado de Mexico
                            </p>
                        </li>
                        
    </ul>
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2022 GEA Capital &middot; <a href="#" style="color: white;">Privacidad</a> &middot; Hecho por Data Docks</p>
    </div>
  </footer>  
    -->
      <footer class="container-fluid" style="background-color:#DFDEDC; padding: 0px; color: black;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
        <center>  
          <img src = '/imagenes/iconos/linkedin-square.svg' width="30" height="30" style='vertical-align: middle' /><span style="padding-left: 5px;">
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                               
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
            
         <img src = '/imagenes/iconos/email-symbol.svg' width="30" height="30" style='vertical-align: middle' />
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                                ivang@geacapital.com.mx
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
           <p style = 'line-height: 20px'>
                                
                               
                              </p>
                              </center>
          <p>&copy; 2022 Hecho por <a href="http://datadocks.com.mx/">Data Docks</a> &middot; <a href="/privacidad">Privacidad</a></p>
      
        </div>
      </div>
   </div>
  
  </footer>                                   
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/menu.js" crossorigin="anonymous"></script>
<script src="js/color.js" crossorigin="anonymous"></script>
<script src="js/scroll.js" crossorigin="anonymous"></script>

    </body>
</html>
