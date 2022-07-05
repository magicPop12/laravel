<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">

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
<div class="container">
      <div class="row">
                <!--Esto llama a la funcion products, que te manda los resultados de la consulta sql,
                  esto viene deñ controlador InicioController.php--->
                <!-- Por cada producto como p-->
              @foreach($post as $p)
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="single-product form-inline">
                                        @php
                                      $primera = explode(",",$p->image_path);
                                    @endphp
                                  <!--
                                  Aqui esta la clase que controla el tamaño y posicion de las imagenes
                                  --> 
                    <center>              
                    <img class="img-fluid" style="height: 200px;" src="{{$primera[0]}}" alt="">
                    </center>
                    <div class="product-details d-inline p-2">
                      

                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6"> 
                  <h6>{{ $p->titulo }}</h6>
                      <h5>{{ $p->created_at }}</h6>
                      <p>{{$p->slug}}</p>
                    
                        <a href="{{URL::action([App\Http\Controllers\Controller::class , 'blogN'],[$p->id])}}">
                        Leer mas
                      </a>
                </div>
              </div>
                @endforeach
      </div>
</div>  
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>    