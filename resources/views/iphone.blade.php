<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GEA Capital</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href = "font/stylesheet.css" rel = "stylesheet" type = "text/css" />
         <link rel="shortcut icon" href="/imagenes/GEA/GEA.png">
          <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
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
.fixed-img {
  background-image: url("imagenes/GEA/Fondo GEA obscuro 2.png");
  height: 100%;
  width: 100%;
  position: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}
body{
 /* background-image:url('imagenes/GEA/Fondo GEA obscuro 2.png');*/

background-position:right;
    background-repeat: no-repeat;
  background-attachment: scroll;
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
.celular{
  background-image:url('imagenes/GEA/Fondo GEA obscuro 2.png');
background-position:center;
    background-repeat: no-repeat;
  background-attachment: scroll;
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
  background-image:url('imagenes/GEA/celular4.png');
background-position:center;
    background-repeat: no-repeat;
  
  background-size: cover;
}
  .inver{
  background-image: url('imagenes/GEA/Diseño sin título (3).png');
    background-repeat: no-repeat;
    
    background-position:center;
     background-attachment: scroll;
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
.celular{
  background-image:url('imagenes/GEA/celular4.png');
background-position:center;
    background-repeat: no-repeat;
  
  background-size: cover;
}
}
</style>
    <script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).on( "load", function() {

        console.log( "window loaded" );
    });
    </script>
    <script type="text/javascript">
    $(document).scroll(function() {

        $('#celular').css('background-position', 'right ' + (10-$(document).scrollTop()*0.3) + 'px');
    });
    </script>
</head>
<body>
<div class="container bg-dark celular">
          <br>
          <br>
    <br>
            <center>
                <h1 style="font-family: 'Incompleeta';">¿Quiénes somos?</h1>
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
                  <h5 style="font-family: 'Incompleeta';" class="titulo">Valores:</h5>
                  
                  <h5>
                    
                    Nuestros valores son:
                  
                  </h5>
                  <h5 style="text-align: justify;"><u>Transparencia</u> en todos nuestros procesos, <u>Pasión</u> por nuestros proyectos, <u>Trabajo en equipo</u> para alcanzar nuestros objetivos, <u>Honestidad</u> con nuestros clientes y colaboradores e <u>Integridad</u> en nuestro ser y hacer.</h5>
                  </center>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <center>
                    <br>
                  <h5 style="font-family: 'Incompleeta';" class="titulo">Visión:</h5>
                  </center>
                  <h5 style="text-align: justify;">
                  Potencializar cada proyecto para lograr que Gea Capital sea una empresa líder en el desarrollo inmobiliario, ofreciendo oportunidades de inversión atractivas para nuestros inversionistas y socios comerciales, y crear productos innovadores que puedan satisfacer las necesidades de nuestros clientes en México, Canadá, EE. UU. y Latinoamérica.
                  </h5>
                </div>
                
            </div>
        </div>
    </div>
 
  <div class="container-fluid celular" id="celular">
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
                   <img src="/imagenes/Firma A corregida blanco.png" style="height: 70px;">
               </center>
               </div>
           </div> 
        </div>
      </div>
<div class="container" style="height: 100vh;">
  <div class="fixed-img">
    <p>JJJJJ</p>
  </div>
</div>
   <script src="js/bootstrap.js" crossorigin="anonymous"></script>
</body>
</html>