<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- Styles -->
       
<style type="text/css">
    #fondo{

        background-image:url('imagenes/Ghoru/fondo1.1.png');

       
  background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
    }
    #div1 {
  display: flex;
 
  height: 700px;
   align-items: center; 

  
}
#contenido{
  display: block; width: 60%;
}
#img1 {
  width: 60%;
  height: 500px;
}
@media only screen and (max-width: 600px) {
  #contenido {
    display: block; width: 100%;
  }
</style>
        
    </head>
    <body style="background-color:#DFDEDC;">
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
              <a class="nav-link" href="#Conocenos">Conócenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/unete">Únete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Reseñas">Reseñas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Reseñas">Blog</a>
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
  <div class="container-fluid" id="fondo">
      <div class="container" id="div1" >
        <div>
          <h1 class="display-3" style="color: #EC6724; font-family: 'Bebas Neue', cursive; ">Únete a nuestra red de trabajo</h1>
          <div class="container">
                @if(Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                       </div>
                   @endif
                <form method="post" action="contacto">
                    {{csrf_field()}}
                    <div class="mb-3">
                    <br>
                    <input class="form-control" type="text" name="Nombre" required="" placeholder="Nombre">
                    </div>
                  <br>
                    <input class="form-control" type="text" name="Apellidos" required="" placeholder="Apellidos">
               <br>
                    <input class="form-control" type="tel" name="Telefono" required="" placeholder="Teléfono">
                   <br>
                    <input class="form-control" type="email" name="Correo" required="" placeholder="Correo">
                  <br>
                    <select name="estado" class="form-control" id="estado"  required>
                                     <option value="">Elija su estado de la republica</option>
                                     <option value="Aguascalientes">Aguascalientes</option>
                                     <option value="Baja California">Baja California</option>
                                     <option value="Baja California Sur">Baja California Sur</option>
                                     <option value="Campeche">Campeche</option>
                                     <option value="Coahuila">Coahuila</option>
                                     <option value="Colima">Colima</option>
                                     <option value="Chiapas">Chiapas</option>
                                     <option value="Chihuahua">Chihuahua</option>
                                     <option value="Distrito Federal">Distrito Federal</option>
                                     <option value="Durango">Durango</option>
                                     <option value="Guanajuato">Guanajuato</option>
                                     <option value="Guerrero">Guerrero</option>
                                     <option value="Hidalgo">Hidalgo</option>
                                     <option value="Jalisco">Jalisco</option>
                                     <option value="Mexico">Mexico</option>
                                     <option value="Michoacan">Michoacan</option>
                                     <option value="Morelos">Morelos</option>
                                     <option value="Nayarit">Nayarit</option>
                                     <option value="Nuevo Leon">Nuevo Leon</option>
                                     <option value="Oaxaca">Oaxaca</option>
                                     <option value="Puebla">Puebla</option>
                                     <option value="Queretaro">Queretaro</option>
                                     <option value="Quintana Roo">Quintana Roo</option>
                                     <option value="San Luis Potosi">San Luis Potosi</option>
                                     <option value="Sinaloa">Sinaloa</option>
                                     <option value="Sonora">Sonora</option>
                                     <option value="Tabasco">Tabasco</option>
                                     <option value="Tamaulipas">Tamaulipas</option>
                                     <option value="Tlaxcala">Tlaxcala</option>
                                     <option value="Veracruz">Veracruz</option>
                                     <option value="Yucatan">Yucatan</option>
                                     <option value="Zacatecas">Zacatecas</option>

                                 </select>
                   <br>
                    <input class="form-control" list="datalistOptions" type="text" name="Area" required="" placeholder="Área de interes">
                    <datalist id="datalistOptions">
                      <option value="Tecnologías de la información">
                      <option value="Mercadotecnía">
                      <option value="Servicio al cliente">
                      <option value="Diseño grafico">
                      <option value="Seguridad">
                    </datalist>
                    <center>
                        <div class="p-3">
                     <button type="submit" class="btn  btn-round" style=" background-color: #113E69; color: white;">Enviar</button>
                     </div>
                     </center>
                  </form>
              </div>
           </div>
         </div>  
  </div>  
      <!-- FOOTER -->
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
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
