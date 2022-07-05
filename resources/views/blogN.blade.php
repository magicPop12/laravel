<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- Styles -->
       

        
    </head>
    <body>
<nav class="navbar navbar-expand-md navbar-light  bg-light">
      <div class="container">

        <a class="navbar-brand" href="/ghoru">
            
          <img src="/imagenes/Ghoru/LogoRecortado1.png" style="height: 60px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#Conocenos">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/unete">Unete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Reseñas">Reseñas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Administración</a>
            </li>
            <li class="nav-item">
                 <div>
               <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
               </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
                </div>
            </li>
          </ul>
          
        </div>
      </div>
</nav>
 @foreach($cat as $p)
 <center>
                <div class="container">
                   @php
                                      $primera = explode(",",$p->image_path);
                                    @endphp
                                  <!--
                                  Aqui esta la clase que controla el tamaño y posicion de las imagenes
                                  --> 
                    <img class="img-fluid" style="height: 300px; width: 500px;" src="/{{$primera[0]}}" alt="">
                    <h6>{{ $p->titulo }}</h6>
                  <h5>{{ $p->created_at }}</h6>
                </div>
                </center>
                <br><br>
                <div class="container">
                  
                    <!--<textarea cols="100" rows="12">--->
                  <p style="text-align: justify;">{{$p->parrafo1}}</p>
                  <p style="text-align: justify;">{{$p->parrafo2}}</p>
                  <p style="text-align: justify;">{{$p->parrafo3}}</p>
                  <p style="text-align: justify;">{{$p->parrafo4}}</p>
                </div>
                
                @endforeach
                  <footer class="container-fluid">
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
          <p>&copy; 2022 Hecho por Data Docks &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos y condiciones</a></p>
      
        </div>
      </div>
   </div>
  
  </footer> 
 <script src="../js/bootstrap.js" crossorigin="anonymous"></script>
</body>
</html>
