
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GEA CAPITAL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href = "font/stylesheet.css" rel = "stylesheet" type = "text/css" />
        <link rel="shortcut icon" href="/imagenes/GEA/GEA.png">
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



.nav-link:hover {
            border-top: 5px solid black;
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
              <a class="nav-link" id="conoEn"  href="/#Conocenos"  style="font-family: 'Bebas Neue', cursive;">Conócenos</a>
              </center>
            </li>
            <li class="nav-item" id="carta">
              <center>
              <a class="nav-link"  href="/#Carta" id="cartaEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Carta del director</a>
              </center>
            </li>
            <li class="nav-item" id="desa">
              <center>
              <a class="nav-link"  href="/#Desarrollos" id="desaEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Desarrollos</a>
            </center>
            </li>
            <li class="nav-item" id="socios">
              <center>
              <a class="nav-link" href="/#Socios" id="sociosEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Socios comerciales</a>
              </center>
            </li>
            <li class="nav-item" id="inv">
              <center>
              <a class="nav-link" href="/#Inversionistas" id="invEn" style="font-family: 'Bebas Neue', cursive;  height: 60px;">Inversionistas</a>
              </center>
            </li>
            <li class="nav-item" id="cont">
              <a class="nav-link"  href="/#Contacto" id="contEn" style="font-family: 'Bebas Neue', cursive; height: 60px;">Contacto</a>
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

<center>
  <h1>Aviso de privacidad</h1>
  <h2><u>AVISO DE PRIVACIDAD INTEGRAL</u></h2>
</center>
  <div class="container">    
    <p class="text-justify">Los datos personales que han sido proporcionados por usted voluntariamente serán utilizados por GEA CAPITAL. Utilizará sus datos personales, sensibles y patrimoniales o financieros, así como cualquier otro dato que pudiera facilitarse a lo largo de la relación comercial.</p>
    <p class="text-justify">GEA CAPITAL, como parte de su registro de clientes podrá recabar y tratar la siguiente información:</p>
    <p class="text-justify">1.-  Datos de identificación tales como Nombre y apellidos, propietario o usuario
que ocupen los servicios.</p>
<p class="text-justify">2.- Datos de Ubicación tales como domicilio, teléfono de oficina o casa, celular, fax
y/o correo electrónico.</p>
<p class="text-justify">3.-  Datos Patrimoniales tales como forma y programas de pago; Recibo de Pagos,
datos para facturación.</p>
<p class="text-justify">De esta forma GEA CAPITAL, empresa Responsable de la
información recabada; nos comprometemos a que esta misma será tratada bajo
estrictas medidas de seguridad, siempre garantizando confidencialidad.</p>
<br>
<center>
<h4>FINALIDADES PRIMARIAS DEL USO DE LA INFORMACIÓN</h4>
</center>
<p class="text-justify">GEA CAPITAL, tratará sus datos personales para realizar todas
las actividades relativas a prestarle el servicio al cliente, enviar publicidad,
promociones, encuestas de calidad del servicio, realizar las gestiones necesarias
para la facturación del servicio, realizar descuentos en su caso, y llevar a cabo una
gestión personalizada de los servicios que GEA CAPITAL
proporciona, así como informarle los cambios del sistema a los cuales el cliente se
adhiera.</p>
<p class="text-justify">De igual manera, se atenderán quejas y sugerencias para evaluar la calidad de
nuestros servicios, comunicarle programas de pago y demás servicios que se
ofrezcan.</p>
<br>
<center>
<h4>FINALIDADES SECUNDARIAS DEL USO DE LA INFORMACIÓN</h4>
</center>
<p class="text-justify">Si usted no se opone, se tratarán sus datos personales necesarios para
finalidades secundarias como, por ejemplo, contactarlo para dar seguimiento a sus
comentarios y/o informarle acerca de nuestros, programas de pago,
mercadotecnia y prospección comercial.</p>
<p class="text-justify">El uso secundario de su información personal puede ser utilizada de forma
secundaria en estrategias comerciales, solo utilizando la información necesaria sin
entrar a los datos sensibles, tales como; nombre, domicilio, edad, o cualquier otro
dato que usted considere personalísimo.</p>
<p class="text-justify">Todos los datos que ingresen a través de concursos o promociones serán
recabados y resguardados con finalidad de crear un historial del cliente.  Todo lo
que a nosotros entre, será considerado como información confidencial.
</p>
<h5>En caso de no estar de acuerdo, podrá acceder a nuestro correo
electrónico: <u style="word-break: break-all;">privacidadgea@gmail.com</u></h5>
<br>
<center>
<h4>TRANSEFERENCIA DE INFORMACIÓN</h4>
</center>
<p class="text-justify">GEA CAPITAL, para cumplir con las finalidades que se
describen anteriormente u otras aquellas exigidas legalmente o por autoridades
competentes, podrá transferir la información necesaria a través de cualquier
tercero que participe junto con GEA CAPITAL, de índole
comercial, como empresa de enlace del Centro de Atención Telefónica.</p>
<p class="text-justify">Los datos personales pueden ser transferidos a cualquier de las plataformas
electrónicas internas, para la actualización de un padrón de usuarios y poder tener
un mejor manejo y control de la información personal que usted nos ha otorgado.</p>
<h5>En caso de no estar de acuerdo, podrá acceder a nuestro correo electrónico:
<u style="word-break: break-all;">privacidadgea@gmail.com</u></h5>
<br>
<center>
<h4>DERECHOS ARCO</h4>
</center>
<p class="text-justify">Usted usuario o su representante legal podrá ejercer cualquiera de los derechos
de Acceso, Rectificación, Cancelación u Oposición  (en lo sucesivo Derechos
ARCO), así como revocar su consentimiento para el tratamiento de sus datos
personales enviando un correo electrónico al Responsable de Privacidad de GEA CAPITAL, a la dirección electrónica
<u>privacidadgea@gmail.com</u> del sitio web.</p>
<p class="text-justify">Su petición deberá ser realizada a través de una Solicitud para ejercer derechos
ARCO elaborada por el usuario que desea ejercer sus derechos ARCO, para
poder atender su disposición conforme a la normatividad.  Para que el
Responsable de Privacidad de GEA CAPITAL de seguimiento a
su solicitud, usted o su representante legal, deberá acreditar correctamente su
identidad para lo que es necesario que complete todos los campos indicados en la solicitud y lo acompañe con copia alguna de las identificaciones vigentes que se
señalen en el mismo.</p>
<p class="text-justify">En caso de que la información proporcionada en la Solicitud sea errónea o
insuficiente, o bien, no se acompañen los documentos de acreditación
correspondientes, el Responsable, dentro de la solicitud, podrá requerirle que
aporte los elementos o documentos necesarios para dar trámite a la misma. Usted
con 10 (diez), días hábiles siguientes a la recepción para atender el requerimiento,
contados a partir del siguiente en que lo haya recibido.  De no dar respuesta en
dicho plazo, se tendrá por no presentada la solicitud correspondiente.
El Responsable le comunicará la determinación adoptada, en un plazo máximo de
20 (veinte) días hábiles contado desde la fecha en que se recibió la solicitud, a
efecto de que, si resulta procedente, haga efectiva la misma dentro de los 15
(quince días hábiles siguiente a que se comunique la respuesta.  La respuesta se
dará vía electrónica a la dirección de correo que se especifique en la solicitud.</p>
<br>
<center>
<h4>LIMITACIÓN DE LA INFORMACIÓN</h4>
</center>
<p class="text-justify">La limitación y/o divulgación de sus datos personales pueden ser limitados en su
uso de divulgación, enviando la solicitud a GEA CAPITAL al
correo <u style="word-break: break-all;">privacidadgea@gmail.com</u>. Deberá enviar a la par, identificaciones
que acrediten su identidad, mismos que como se explica anteriormente se le dará
el uso único de reconocimiento oficial ya que como se ha mencionado antes el
otorgamiento de los datos que usted nos proporciona, únicamente pueden ser
transmitidos al titular y/o representante legal; esto con la finalidad de evitar robos
de identidad o mal uso de esta información.  Todo apegado siempre a los
lineamientos, leyes y reglamentos que nos ocupan, señalados en párrafos
anteriores.</p>
<br>
<center>
<h4>CAMBIOS AL AVISO DE PRIVACIDAD</h4>
</center>
<p class="text-justify">GEA CAPITAL, se reserva el derecho a cambiar su Aviso de
Privacidad, siempre apegándose al cumplimiento de la Ley Federal de Protección
de Datos Personales en Posesión de los Particulares, así como en su Reglamento
y sus Lineamientos, publicando en su página web el anuncio de Cambio de Aviso
de Privacidad para que quede siempre al acceso del usuario.</p>
<br>
<center>
<h4>MARCO LEGAL</h4>
</center>
<p class="text-justify">Ley Federal de Protección de Datos Personales en Posesión de Particulares:</p>
<p class="text-justify">Artículo 1.- La presente Ley es de orden público y de observancia general en toda
la República y tiene por objeto la protección de los datos personales en posesión
de los particulares, con la finalidad de regular su tratamiento legítimo, controlado e
informado, a efecto de garantizar la privacidad y el derecho a la autodeterminación
informativa de las personas.</p>
<p class="text-justify">Artículo 2.- Son sujetos regulados por esta Ley, los particulares sean personas
físicas o morales de carácter privado que lleven a cabo el tratamiento de datos
personales, con excepción de: I. Las sociedades de información crediticia en los
supuestos de la Ley para Regular las Sociedades de Información Crediticia y
demás disposiciones aplicables, y II. Las personas que lleven a cabo la
recolección y almacenamiento de datos personales, que sea para uso
exclusivamente personal, y sin fines de divulgación o utilización comercial.</p>
<p class="text-justify">Artículo 14.- El responsable velará por el cumplimiento de los principios de
protección de datos personales establecidos por esta Ley, debiendo adoptar las
medidas necesarias para su aplicación. Lo anterior aplicará aún y cuando estos
datos fueren tratados por un tercero a solicitud del responsable. El responsable
deberá tomar las medidas
necesarias y suficientes para garantizar que el aviso de privacidad dado a conocer
al titular, sea respetado en todo momento por él o por terceros con los que guarde
alguna relación jurídica.</p>
<p class="text-justify">Artículo 15.- El responsable tendrá la obligación de informar a los titulares de los
datos, la información que se recaba de ellos y con qué fines, a través del aviso de
privacidad.</p>
<p class="text-justify">Artículo 16.- El aviso de privacidad deberá contener, al menos, la siguiente
información: I. La identidad y domicilio del responsable que los recaba; II. Las
finalidades del tratamiento de datos; III. Las opciones y medios que el responsable
ofrezca a los titulares para limitar el uso o divulgación de los datos; IV. Los medios
para ejercer los derechos de acceso, rectificación, cancelación u oposición, de
conformidad con lo dispuesto en esta Ley; V. En su caso, las transferencias de
datos que se efectúen, y VI. El procedimiento y medio por el cual el responsable
comunicará a los titulares de cambios al aviso de privacidad, de conformidad con
lo previsto en esta Ley. En el caso de datos personales sensibles, el aviso de
privacidad deberá señalar expresamente que se trata de este tipo de datos.</p>
<p class="text-justify"><b>Para más información, te invitamos a descargar la Ley Federal de Protección
de Datos Personales en Posesión de Particulares.</b></p>
<p>
<a href="http://www.diputados.gob.mx/LeyesBiblio/pdf/LFPDPPP.pdf" style="word-break: break-all;">http://www.diputados.gob.mx/LeyesBiblio/pdf/LFPDPPP.pdf</a>
</p>
  </div>
</div>
 </div>
      <!-- FOOTER 
<footer class="container-fluid" style="background-image: url('/imagenes/GEA Azul y Plateado.png'); padding: 0px">
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
                                privacidadgea@gmail.com
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

    </body>
</html>
