<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GHORU</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="/imagenes/Ghoru/logotipo_ghoru-07.png">
        <!-- Styles -->
       
<style type="text/css">
    #fondo{
      
        background-image:url('/imagenes/Ghoru/Fondo1.1.png');
        /*
       background-image:url('imagenes/Ghoru/logotipo_ghoru-17.png');
*/
  background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
     background-attachment: fixed;
    }
    #div1 {
  display: flex;
 
  height: 700px;
   align-items: center; 


  
}
    #div2 {
  display: flex;
 
  height: 700px;
   align-items: center; 


  
}
.people-wrap {
  
  display: flex;
  align-items: center
}
  .container-fluid{
  padding-right: var(--bs-gutter-x, 0.001rem) !important;
  padding-left: var(--bs-gutter-x, 0.001rem) !important;
}
#contenido{
  display: block; width: 60%;
}
#img1 {
  width: 60%;
  height: 500px;
}
hr{ 
  
    border:         none;
    border-left:    10px solid hsla(200, 10%, 50%,100);
    height:         90% !important;
    width:          10px; 
    border-color: white;
    opacity: 1; 
    border-radius: 5px;    
}
@media only screen and (max-width: 600px) {
  #contenido {
    display: block; width: 100%;
  }
hr{ 
  
    border:         none;
    border-left:    10px solid hsla(200, 10%, 50%,100);
    height:         10px !important;
    width:          100%; 
    border-color: white;
    opacity: 1; 
    border-radius: 5px;    
}
    #fondo{
      
        background-image:url('/imagenes/Ghoru/abajo.png');
        /*
       background-image:url('imagenes/Ghoru/logotipo_ghoru-17.png');
*/
  background-repeat: no-repeat;
    background-size: cover;
    background-position:right;
     background-attachment: fixed;
    }
}
</style>
  <style type="text/css">

    #app-messenger, #app-whatsapp{
  position: fixed;
  right: 24px;
  bottom: 25px;
  width: 60px;
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
<script type="text/javascript">
//<![CDATA[
var Textos = new Array();
  // Enter the names of the images below
  Textos[0]="¿Mejor sueldo?";
  Textos[1]="¿Horario flexible?";
  Textos[2]="¿Cambio de carrera?";
    Textos[3]="¿Home Office?";
  Textos[4]="¿Balance vida/trabajo?";
  Textos[5]="¿Quieres conseguir empleo?";


 
var nuevoTexto = -1; // para empezar en el primer texto -1, con 0 comienza por mostrar el segundo
var totalTextos = Textos.length;
 
function repetir() {
  nuevoTexto++;
  if (nuevoTexto == totalTextos) {
    nuevoTexto = 0;
  }
  document.getElementById('texto').innerHTML=Textos[nuevoTexto];
// cambiar 4 por el valor en segundos
  setTimeout("repetir()", 4*1000);
}
window.onload=repetir;
//]]>
</script>        
    </head>
    <body style="">
        <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=525525267805&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?">
     <img src="imagenes/iconos/whatsapp-color.png" height="50">
</a>
<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
      <div class="container">

        <a class="navbar-brand" href="/">
            
            <img src="/imagenes/Ghoru/LogoRecortado1.png" style="height: 60px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav  mb-2 mb-md-0  ms-auto">
             <li class="nav-item">
              <a class="nav-link" href="#Inicio">Inicio</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#unete">Únete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Conocenos">Conócenos</a>
            </li>
           
            
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
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
  <div id="Inicio"></div>
  <div class="container-fluid" id="fondo">
      <div class="container" id="div1" >
  <div  id="contenido">
    <div>
          <h1 class="display-3" id="texto" style="color: #113E69; font-family: 'Bebas Neue', cursive; ">¿Quieres conseguir empleo?</h1>
        </div>
  <img src="/imagenes/Ghoru/LogoRecortado1.png" style="height: 40%;" alt="" id="img1">

  <a class="btn btn-lg" href="/#unete" role="button" style="margin-top: 50px; background-color: #113E69; color: white;">
    <center>
  Encuentra el empleo de tus sueños
  </center>
  </a>
 
  </div>
      </div>
            <br id="unete">
      <br>
      <br>
      <!------Contacto----->
      <div class="container" id="div2" >
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
                 
                    <select name="Area" class="form-control" id="estado"  required>
                    <option value="">Empresa o talento</option>
                      <option value="Talento">Talento</option>
                      <option value="Empresa">Empresa</option>
                 
                    </select>
                    <center>
                        <div class="p-3" id="Conocenos">
                     <button type="submit" class="btn  btn-round" style=" background-color: #113E69; color: white;">Enviar</button>
                     </div>
                     </center>
                  </form>
              </div>
           </div>
         </div>
<!----Conocenos NUEVO---->      
      <div class="container-fluid" style="color: white; background-color: #163f67">
        <center>
        <h1 class="display-4" style=" font-family: 'Bebas Neue', cursive;  background-color: #ec6822;">Unimos el talento adecuado con la empresa indicada</h1>
        </center>
        <div class="container">
        <div class="row" style="">
          <div class="col-lg-4 col-sm-12"  style="align-items: center;">
            <center>
             <br>
             <br>
             <br>
            <h1 class="display-1" style="font-family: 'Bebas Neue', cursive; ">¿QUIÉNES SOMOS?</h1>
            <br>
            <br>
            </center>

          </div>
          <div class="col-lg-1 col-sm-0">
            
             <hr>
             
          </div>
          <div class="col-lg-7 col-sm-12">
            <br>
              <h1>Tu representante personal de carrera.</h1>
              <p>Alcanza tus metas profesionales y la más alta satisfacción personal, por medio de nuestra asesoría y búsqueda constante de las mejores oportunidades de empleo a lo largo de tu carrera.</p>
              <p>En GHORU, trabajamos de cerca con nuestros clientes corporativos para entender las necesidades sociales, culturales, intangibles y valores que el puesto y la organización requieren para ayudarlos en su crecimiento.</p>
              <br>
              <br>
          </div>
        </div>
</div>
      </div>
      <div class="container-fluid" style="background-color: white;">
        <center>
          <br>
        <h1>NUESTRO OBJETIVO</h1>
        </center>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <br>
              <p><b>Acompañar tu crecimiento profesional a lo largo del tiempo.</b></p>
              <ul class="nav flex-column">
                        
                        <li>
                            <div  class="people-wrap">
                          <div class="people">
                          <img src = '/imagenes/iconos/Ghoru1.png' width="80" height="80" style='vertical-align: middle; display: block;' />
                          </div>
                          <div>
                            <h4 style = "line-height: 20px; margin-bottom: 0px; padding-left: 1px;  color: #1f96cd;">
                               Desarrollando y mejorando tu plan de carrera. 
                            </h4>
                            <p style="margin-top: 5px;">
                              Conociendo de cerca tus habilidades, lo que amas hacer y en lo que eres bueno
                            </p>
                            </div>
                            </div>
                            <br>
                        </li>
                       <li>
                            <div  class="people-wrap">
                          <div class="people">
                          <img src = '/imagenes/iconos/Ghoru2.png' width="80" height="80" style='vertical-align: middle; display: block;' />
                          </div>
                          <div>
                            <h4 style = "line-height: 20px; margin-bottom: 0px; padding-left: 1px;  color: #fabb1d;">
                               Siendo el motor de búsqueda de nuevas oportunidades
                            </h4>
                            <p style="margin-top: 5px;">
                              Enfócate en tus actividades actuales, sabemos lo dificil que es buscar empleo mientras las ejecutas
                            </p>
                            </div>
                            </div>
                            <br>
                        </li>
                        <li>
                            <div  class="people-wrap">
                          <div class="people">
                          <img src = '/imagenes/iconos/Ghoru3.png' width="80" height="80" style='vertical-align: middle; display: block;' />
                          </div>
                          <div>
                            <h4 style = "line-height: 20px; margin-bottom: 0px; padding-left: 1px;  color: #0f3963;">
                               Nuestra meta es ayudarte a alcanzar satisfación personal y profesional en cualquier ámbito
                            </h4>
                            <p style="margin-top: 5px;">
                              Basado siempre en nuestra filosofía de vida
                            </p>
                            </div>
                            </div>
                            
                        </li>
                        <li>
                          <center>
                          <img src="/imagenes/Ghoru/nostros1.png" style="height: 300px;">
                          </center>
                        </li>
                    </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
              <img src="/imagenes/Ghoru/nosotros2.png" style="width: 100%;">
              <br>
              <br>
               <center>
        <h1 class="display-4" style=" font-family: 'Bebas Neue', cursive;  background-color: #0f3963; color: white;">Con Ghoru obtienes:</h1>
        </center>
        <div class="container">
        <ul class="nav flex-column">
          <li>
            <br>
            <h5>
            <b> - Talento con mayor disposición para el desempeño de sus labores</b>
          </h5>
            <br>
          </li>
          <li>
            <h5>
            <b> - Talento dentro de tu equipo que realmente quiere ser parte del crecimiento</b>
          </h5>
            <br>
          </li>
          <li>
            <h5>
            <b>
             - Relaciones a largo plazo, basadas en la comunicación honesta
          </b>
        </h5>
          <br>
        </li>
        </ul>
        </div>
            </div>
          </div>
        </div>  
        
      </div>
      <div class="container-fluid" style="background-color: #1f96cd;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div  class="people-wrap">
                                <div class="people">
                                <img src = '/imagenes/Ghoru/circulo.png' width="200" height="200" style='vertical-align: middle; display: block;' />
                                </div>
                                <div>
                                  <h4 style = "line-height: 20px; margin-bottom: 0px; padding-left: 1px;  color: white;">
                                     De las personas prefieren Balance de vida sobre mejor sueldo.
                                  </h4>
                                  
                                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div  class="people-wrap">
                                <div class="people">
                                <img src = '/imagenes/Ghoru/grafica.png' width="200" height="200" style='vertical-align: middle; display: block;' />
                                </div>
                                <div>
                                  <h4 style = "line-height: 20px; margin-bottom: 0px; padding-left: 1px;  color: white;">
                                    Reduce la rotación de personal y la falta de motivación.
                                  </h4>
                                  
                                  </div>
                  </div>
                </div>  
              </div>  
            </div>
        </div>
<!-----Fin de conocenos--------->      


      
  </div> 

      <!-- FOOTER -->
  <footer class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
        <center>  
           <img src = '/imagenes/iconos/contact.svg' width="30" height="30" style='vertical-align: middle' /><span style="padding-left: 5px;">
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                               +52 55 2526 7805
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
            <img src = '/imagenes/iconos/email-symbol.svg' width="30" height="30" style='vertical-align: middle' />
          <p style = "line-height: 20px;">
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
          <p>&copy; 2022 Hecho por <a href="http://datadocks.com.mx/">Data Docks</a> &middot; <a href="#">Privacidad</a></p>
      
        </div>
      </div>
   </div>
  
  </footer>                                       
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
