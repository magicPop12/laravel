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
<main>
   
    <div class="container bg-light">

        <center>

        <h1 style="padding-top: 10px;">Generar Excell</h1>
        </center>
        <div class="container">
            <!--
    Metodo para crear y descargar en formato csv
    --->
    <center>
    <form method="post" action="crear">
                                                {{csrf_field()}}
                                              
                                                <input type="hidden" name="id" value="6">
                                                <button type="submit" class="btn btn-danger btn-lg btn-round">Generar Excell</button>
                                            </form>
                                            @if(Session::has('archivo'))
                  <div class="alert alert-success">

                    {{ Session::get('archivo') }}
                    <br>
                    <a href="clientes.csv">Documento</a> 
                   </div>
               @endif
    <!------------------->  
        </div>
    </div>
    </center>
    <div class="container">
      <form class='contacto' action="{{route('savepost')}}" target="" method="POST" name="formDatosCodigos" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                  
                  </div>
                 
                  <div class="row">
                 <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>ID</label>
                       
                      </div>
                    </div>
                    @if($errors->first('title'))
                    <i> {{ $errors->first('NombreCategorias') }}</i>
                     @endif
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>titulo</label>
                        <input type="text" class="form-control"name="titulo" value="{{old('title')}} " required>
                      </div>
                    </div>
                   
                    <div class="col-md-5 pl-1">
                      <div class="form-group">
                        <label>slug</label>
                        <input type="text" class="form-control"name="slug" value="{{old('slug')}} " required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <p>Descripcion</p>
                        <textarea name="parrafo1" value="{{old('description')}}" cols="100" rows="5" required></textarea>
                        <textarea name="parrafo2" value="{{old('description')}}" cols="100" rows="5" required></textarea>
                        <textarea name="parrafo3" value="{{old('description')}}" cols="100" rows="5" required></textarea>
                        <textarea name="parrafo4" value="{{old('description')}}" cols="100" rows="5" required></textarea>
                       <!-- <input type="text" class="form-control"name="description" value="{{old('description')}} " required>-->
                      </div>
                    </div>

                              @if($errors->first('image_path'))
        <i> {{ $errors->first('image_path') }} </i>
        @endif
                    <div class="mb-3">
                      <label for="formFile" class="form-label">IMAGEN DEL PRODUCTO</label>
                      <input type="file" class="form-control @error('file') is-invalid @enderror"  name="image"  value="{{old('image_path')}} " required>
                    </div>
                  </div>
                    <div class="d-grid gap-1">
  <button class="btn btn-primary" type="submit">Guardar Datos</button>

</div>
            
                </form>
    </div>
        
         
                                            
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
