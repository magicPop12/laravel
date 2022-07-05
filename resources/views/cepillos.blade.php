
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
.nav-item>a:hover {
            background-color: #77b82a !important;
            color: white !important;
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
              <a class="nav-link" href="/#Inicio" style="font-family: 'Bebas Neue', cursive;">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#Nosotros" style="font-family: 'Bebas Neue', cursive;">NOSOSTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#Historia" style="font-family: 'Bebas Neue', cursive;">HISTORIA</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-family: 'Bebas Neue', cursive;">PRODUCTOS</a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown1 dropend">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#PERICO" role="button" aria-expanded="true" style="font-family: 'Bebas Neue', cursive;">PERICO</a>
                  <ul class="dropdown-content1">
                    <a class="dropdown-item" href="#cepillos" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DE MANO</a>
                    <a class="dropdown-item" href="#escobasTipoCepillo" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO CEPILLO</a>
                    <a class="dropdown-item" href="#escobasTipoAbanico" style="font-family: 'Bebas Neue', cursive;">ESCOBAS TIPO ABANICO</a>
                    
                    <a class="dropdown-item" href="#articulosDiversos" style="font-family: 'Bebas Neue', cursive;">ARTÍCULOS DIVERSOS</a>
                    <a class="dropdown-item" href="#cepilloDentales" style="font-family: 'Bebas Neue', cursive;">CEPILLOS DENTALES</a>
                    
                    
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#Bonita" style="font-family: 'Bebas Neue', cursive;">LA BONITA</a></li>
                <li><a class="dropdown-item" href="#Hechicera" style="font-family: 'Bebas Neue', cursive;">LA HECHICERA</a></li>
                
                 </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#Contacto" style="font-family: 'Bebas Neue', cursive;">CONTACTO</a>
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
<div class="container-fluid" style="padding: 0px;">
  <div class="container">
    <center>
      <hr id="PERICO">
      <br>
      <br>
      <br>
            <h1>PERICO</h1>
            <br id="cepillos">
            <br>
      <br>
      <br>
            <h2>CEPILLOS DE MANO</h2>
            <br>
    </center>
    <!--Terminado--->
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloMano/CP-20.png" class="img-fluid">
      
      <center>
        <a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-20" role="button" style=" background-color: #77b82a; color: white;">
          <center>
          Ver más
          </center>
        </a>
      </center>  
      </div>
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/cepilloMano/CP-30.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-30" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/cepilloMano/CP-35.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-35" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
     <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/cepilloMano/CP-45.png" class="img-fluid">
        			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-45" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloMano/PE-1.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PE-1" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloMano/PE-2.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PE-2" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/cepilloMano/CP-FLEX.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-FLEX" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloMano/CP-LP.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CP-LP" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
    </div>
    <center>
            <hr id="escobasTipoCepillo">
            <br>
      <br>
      <br>
            <h2>ESCOBAS TIPO CEPILLO</h2>
            <br>
    </center>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
    
        <img src="imagenes/plasticos/productos/EscobaC/CE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/EscobaC/P-140.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-140" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/EscobaC/P-180.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-180" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
    
        <img src="imagenes/plasticos/productos/EscobaC/P-200.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-200" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
    
        <img src="imagenes/plasticos/productos/EscobaC/P-220.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-220" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
     
        <img src="imagenes/plasticos/productos/EscobaC/PML.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PML" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/EscobaC/P-DUAL.png" class="img-fluid">
      		
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-DUAL" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
    
        <img src="imagenes/plasticos/productos/EscobaC/PF.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PF" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/EscobaC/PC.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PC" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
  
        <img src="imagenes/plasticos/productos/EscobaC/PI.png" class="img-fluid">
      		
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PI" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
    </div> 
    <center>
        <hr id="escobasTipoAbanico">
        <br>
      <br>
      <br>
            <h2>ESCOBAS TIPO ABANICO</h2>
            <br>
    </center>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/EscobaA/AI-160.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#AI-160" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/EscobaA/AI-200.png" class="img-fluid">
    
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#AI-200" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
     
        <img src="imagenes/plasticos/productos/EscobaA/P-250.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-250" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
    </div> 
    <center>
        <hr id="articulosDiversos">
        <br>
      <br>
      <br>
            <h2>ARTÍCULOS DIVERSOS</h2>
            <br>
    </center>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
   
        <img src="imagenes/plasticos/productos/articulosDiversos/PWC-1.png" class="img-fluid">
      		
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PWC-1" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
     
        <img src="imagenes/plasticos/productos/articulosDiversos/PWC-2.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PWC-2" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PR.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PR" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/articulosDiversos/PR-B.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PR-B" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/articulosDiversos/PLV-20.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PLV-20" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PLV-20M.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PLV-20M" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PLV-40.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PLV-40" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PC-E.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PC-E" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
  
        <img src="imagenes/plasticos/productos/articulosDiversos/PM-250.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PM-250" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PM-300.png" class="img-fluid">
      		
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PM-300" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
     
        <img src="imagenes/plasticos/productos/articulosDiversos/PM-350.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PM-350" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
   
        <img src="imagenes/plasticos/productos/articulosDiversos/PJ-40.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PJ-40" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/CI-30.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CI-30" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">

        <img src="imagenes/plasticos/productos/articulosDiversos/CI-40.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CI-40" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/articulosDiversos/CI-50.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CI-50" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
     
        <img src="imagenes/plasticos/productos/articulosDiversos/CI-60.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CI-60" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/P-80.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#P-80" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/articulosDiversos/JI-P.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#JI-P" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/articulosDiversos/PC-WC.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PC-WC" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/articulosDiversos/PF-WC.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PF-WC" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
      
      
      
      
      
    </div> 
    <center>
        <hr id="cepilloDentales">
        <br>
      <br>
      <br>
            <h2>CEPILLOS DE DIENTES</h2>
            <br>
    </center>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/cepilloDentales/PDA.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PDA" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloDentales/PDAE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#PDAE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/cepilloDentales/CDAE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CDAE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/cepilloDentales/CDIE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#CDIE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      

    </div>
    <center>
        <hr id="Bonita">
        <br>
        <br>
        <br>
            <h1>LA BONITA</h1>
            <br>
    </center>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/Bonita/BC-20.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BC-20" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/Bonita/BC-30.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BC-30" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/Bonita/BC-35.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BC-35" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/Bonita/BC-40.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BC-40" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
 
        <img src="imagenes/plasticos/productos/Bonita/BC-50.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BC-50" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
  
        <img src="imagenes/plasticos/productos/Bonita/B-100.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#B-100" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/Bonita/B-160.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#B-160" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/Bonita/B-200.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#B-200" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
       <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/Bonita/B-250.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#B-250" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/Bonita/BJ-40.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BJ-40" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
  
        <img src="imagenes/plasticos/productos/Bonita/BWC-1.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BWC-1" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
        
        <img src="imagenes/plasticos/productos/Bonita/BWC-2.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BWC-2" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">

        <img src="imagenes/plasticos/productos/Bonita/BRB.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BRB" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
       
        <img src="imagenes/plasticos/productos/Bonita/BCE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BCE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
      <div class="col-lg-4 col-sm-6">

        <img src="imagenes/plasticos/productos/Bonita/BM-150.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#BM-150" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
      
    </div> 
    <center>
        <hr id="Hechicera">
        <br>
      <br>
      <br>
            <h1>LA HECHICERA</h1>
            <br>
    </center>
     <div class="row" style="padding-bottom: 20px;">
      <div class="col-lg-4 col-sm-6">
      
        <img src="imagenes/plasticos/productos/Hechizera/HE.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#HE" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      <div class="col-lg-4 col-sm-6">
    
        <img src="imagenes/plasticos/productos/Hechizera/HC.png" class="img-fluid">
      			
			<center>
			<a class="btn btn-lg" href="" data-bs-toggle="modal" data-bs-target="#HC" role="button" style=" background-color: #77b82a; color: white;">
			          <center>
			          Ver más
			          </center>
			</a>
			</center>
			</div>   
      
     
      
    </div>
    

<!--------------AREA DE LOS MODALES-->
<!---------------CEPILLOS DE MANO---------->
<div class="modal fade" id="CP-20" tabindex="-1" role="dialog" aria-labelledby="CP-20Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
        <center>
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-20 MODAL.png" >
         </center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CP-30" tabindex="-1" role="dialog" aria-labelledby="CP-30Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-30 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CP-35" tabindex="-1" role="dialog" aria-labelledby="CP-35Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-35 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CP-45" tabindex="-1" role="dialog" aria-labelledby="CP-45Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-45 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CP-FLEX" tabindex="-1" role="dialog" aria-labelledby="CP-FLEXLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-FLEX MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CP-LP" tabindex="-1" role="dialog" aria-labelledby="CP-LPLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/CP-LP MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PE-1" tabindex="-1" role="dialog" aria-labelledby="PE-1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/PE-1 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PE-2" tabindex="-1" role="dialog" aria-labelledby="PE-2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloMano/PE-2 MODAL.png" >
      </div>
    </div>
  </div>
</div>
<!-------FIN DE CEPILLOS DE MANO-------->
<!---INCIO DE ESCOBAS TIPO C--->
<div class="modal fade" id="CE" tabindex="-1" role="dialog" aria-labelledby="CELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/CE MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-140" tabindex="-1" role="dialog" aria-labelledby="P-140Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/P-140 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-180" tabindex="-1" role="dialog" aria-labelledby="P-180Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/P-180 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-200" tabindex="-1" role="dialog" aria-labelledby="P-200Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/P-200 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-220" tabindex="-1" role="dialog" aria-labelledby="P-220Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/P-220 MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PC" tabindex="-1" role="dialog" aria-labelledby="PCLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/PC MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-DUAL" tabindex="-1" role="dialog" aria-labelledby="P-DUALLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/P-DUAL MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PF" tabindex="-1" role="dialog" aria-labelledby="PFLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/PF MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PI" tabindex="-1" role="dialog" aria-labelledby="PILabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/PI MODAL.png" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PML" tabindex="-1" role="dialog" aria-labelledby="PMLLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaC/PML MODAL.png" >
      </div>
    </div>
  </div>
</div>
<!--FIN DE ESCOBAS TIPO C-->
<!--INICIO DE ESCOBAS TIPO A----->
<div class="modal fade" id="AI-160" tabindex="-1" role="dialog" aria-labelledby="AI-160Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaA/AI-160 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AI-200" tabindex="-1" role="dialog" aria-labelledby="AI-200Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaA/AI-200 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-250" tabindex="-1" role="dialog" aria-labelledby="P-250Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/EscobaA/P-250 MODAL.png">
      </div>
    </div>
  </div>
</div>
<!--FIN DE ESCOBAS TIPO A---->
<!--INICIO DE ARTICULOS DIVERSOS--->
<div class="modal fade" id="CI-30" tabindex="-1" role="dialog" aria-labelledby="CI-30Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/CI-30 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CI-40" tabindex="-1" role="dialog" aria-labelledby="CI-40Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/CI-40 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CI-50" tabindex="-1" role="dialog" aria-labelledby="CI-50Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/CI-50 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CI-60" tabindex="-1" role="dialog" aria-labelledby="CI-60Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/CI-60 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="JI-P" tabindex="-1" role="dialog" aria-labelledby="JI-PLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/JI-P MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="P-80" tabindex="-1" role="dialog" aria-labelledby="P-80Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/P-80 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PC-E" tabindex="-1" role="dialog" aria-labelledby="PC-ELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PC-E MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PC-WC" tabindex="-1" role="dialog" aria-labelledby="PC-WCLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PC-WC MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PDA" tabindex="-1" role="dialog" aria-labelledby="PDALabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PDA MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PDAE" tabindex="-1" role="dialog" aria-labelledby="PDAELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PDAE MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PF-WC" tabindex="-1" role="dialog" aria-labelledby="PF-WCLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PF-WC MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PJ-40" tabindex="-1" role="dialog" aria-labelledby="PJ-40Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PJ-40 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PLV-20" tabindex="-1" role="dialog" aria-labelledby="PLV-20Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PLV-20 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PLV-20M" tabindex="-1" role="dialog" aria-labelledby="PLV-20M" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PLV-20M MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PLV-40" tabindex="-1" role="dialog" aria-labelledby="PLV-40Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PLV-40 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PM-250" tabindex="-1" role="dialog" aria-labelledby="PM-250Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PM-250 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PM-300" tabindex="-1" role="dialog" aria-labelledby="PM-300Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PM-300 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PM-350" tabindex="-1" role="dialog" aria-labelledby="PM-350Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PM-350 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PR" tabindex="-1" role="dialog" aria-labelledby="PRLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PR MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PR-B" tabindex="-1" role="dialog" aria-labelledby="PR-BLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PR-B MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PWC-1" tabindex="-1" role="dialog" aria-labelledby="PWC-1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PWC-1 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PWC-2" tabindex="-1" role="dialog" aria-labelledby="PWC-2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/articulosDiversos/PWC-2 MODAL.png">
      </div>
    </div>
  </div>
</div>
<!--FIN DE ARTICULOS DIVERSOS--->
<!--INICIO DE CEPILLO DENTAL--->
<div class="modal fade" id="CDAE" tabindex="-1" role="dialog" aria-labelledby="CDAELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloDentales/CDAE MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CDIE" tabindex="-1" role="dialog" aria-labelledby="CDIELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloDentales/CDIE MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PDA" tabindex="-1" role="dialog" aria-labelledby="PDALabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloDentales/PDA MODAL1.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PDAE" tabindex="-1" role="dialog" aria-labelledby="PDAELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/cepilloDentales/PDAE MODAL.png">
      </div>
    </div>
  </div>
</div>
<!--FIN DE CEPILLO DENTAL--->
<!--LA HECHICERA---->
<div class="modal fade" id="HC" tabindex="-1" role="dialog" aria-labelledby="HCLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Hechizera/HC MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="HE" tabindex="-1" role="dialog" aria-labelledby="HELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Hechizera/HE MODAL.png">
      </div>
    </div>
  </div>
</div>
<!--FIN DE LA HECHICERA--->
<!--INICIO DE LA BONITA--->
<div class="modal fade" id="B-100" tabindex="-1" role="dialog" aria-labelledby="B-100Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/B-100 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="B-160" tabindex="-1" role="dialog" aria-labelledby="B-160Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/B-160 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="B-200" tabindex="-1" role="dialog" aria-labelledby="B-200Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/B-200 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="B-250" tabindex="-1" role="dialog" aria-labelledby="B-250Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/B-250 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BC-20" tabindex="-1" role="dialog" aria-labelledby="BC-20Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BC-20 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BC-30" tabindex="-1" role="dialog" aria-labelledby="BC-30Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BC-30 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BC-35" tabindex="-1" role="dialog" aria-labelledby="BC-35Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BC-35 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BC-40" tabindex="-1" role="dialog" aria-labelledby="BC-40Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BC-40 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BC-50" tabindex="-1" role="dialog" aria-labelledby="BC-50Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BC-50 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BCE" tabindex="-1" role="dialog" aria-labelledby="BCELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BCE MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BJ-40" tabindex="-1" role="dialog" aria-labelledby="BJ-40Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BJ-40 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BM-150" tabindex="-1" role="dialog" aria-labelledby="BM-150Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BM-150 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BRB" tabindex="-1" role="dialog" aria-labelledby="BRBLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BRB MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BWC-1" tabindex="-1" role="dialog" aria-labelledby="BWC-1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BWC-1 MODAL.png">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BWC-2" tabindex="-1" role="dialog" aria-labelledby="BWC-2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="B-100Label"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
      </div>
      <div class="modal-body">
         <img class="d-block w-100" src="/imagenes/plasticos/productos/Bonita/Modales/BWC-2 MODAL.png">
      </div>
    </div>
  </div>
</div>
<!---FIN DE LA BONITA-->
<!------------FIN DE MODAL------------->
   </div>
 </div>
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
                              Creado por <a href="http://datadocks.com.mx/">Data Docks</a>
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

    </body>
</html>
