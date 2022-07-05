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
<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
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
              <a class="nav-link" href="#Conocenos">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Unete">Unete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Reseñas">Reseñas</a>
            </li>
            
          </ul>
          
        </div>
      </div>
</nav>


   
     <main class="py-4">
            <div class="container">
                @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                    
                </div>
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">
                    <ul>
                        @foreach($session()->get('success') as $message)
                        <li>
                            {{$message}}
                        </li>
                        @endforeach
                    </ul>
                    
                </div>
                @endif
            </div>
            
        </main>
        <center>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('assets/img/card-primary.png') }}" alt="">
                    <h1 class="card-title">{{ _('LOGIN') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-dark mb-2">Ingresa un correo válido <strong></strong> y una contraseña mayor a <strong>8 carácteres</strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Email') }}">
                        
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        
                        <input type="password" placeholder="{{ _('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        
                    </div>
                </div>
                 <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('Ir') }}</button>
                
                <div class="card-footer">
                   
                    <div class="pull-left">
                        <h6>
                          
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                           
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </center>
      <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>                                       
</main>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>

    </body>
</html>
<style type="text/css">
      .register-account{
        background: url(http://cdn.paper4pc.com/images/grunge-texture-wallpaper-5.jpg) no-repeat center top;
        background-color: transparent;
        background-image: url(http://cdn.paper4pc.com/images/grunge-texture-wallpaper-5.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center top;
        background-clip: border-box;
        background-origin: padding-box;
        background-size: auto auto;
        background-size: cover;
        padding: 200px 0 150px;
        padding-top: 200px;
        padding-right: 0px;
        padding-bottom: 150px;
        padding-left: 0px;
        width: auto;

}

/*Login Form CSS*/
.login-form input{
  width: 100%;
  border: 1px solid #983B85;
  padding: 0.7em;
  margin: 0.6em 0;
  border-radius: 0;
  margin-bottom: 15px;
}
.login-form{
  margin-bottom: 30px;
} 
.signform {
  background-color: #FFF;
  padding-bottom: 40px;
  padding-top: 35px;
  margin: 0 auto;
  margin-top: auto;
}
.bts {
  padding: 2em;
  margin: 0.6em 0;
  margin-top: 
}
.bts-a:hover{
  color: #983B85;;
  text-decoration: none;
  background: white;   
}
.bts span {
  text-align: center; 
  font-size: .9em;
  font-family: 'Arimo', sans-serif;
  font-weight: 700;
  font-style: normal;
}
.social{
  transition: background 200ms ease-in-out 0s;
  -webkit-transition: background 200ms ease-in-out 0s;
  -moz-transition: background 200ms ease-in-out 0s;
  -o-transition: background 200ms ease-in-out 0s;
  -ms-transition: background 200ms ease-in-out 0s;
  
  margin-top: 12px;
  -webkit-border-top-left-radius:1px;
  -moz-border-radius-topleft:1px;
  border-top-left-radius:1px;
  -webkit-border-top-right-radius:1px;
  -moz-border-radius-topright:1px;
  border-top-right-radius:1px;
  -webkit-border-bottom-right-radius:1px;
  -moz-border-radius-bottomright:1px;
  border-bottom-right-radius:1px;
  -webkit-border-bottom-left-radius:1px;
  -moz-border-radius-bottomleft:1px;
  border-bottom-left-radius:1px;
  text-indent:0;
  display:block;
  color:#ffffff;
  height:50px;
  line-height:50px;
  width: 100%;
  text-decoration:none;
  text-align:center;
}

.fblogin {   
  background-color:#3b5898;  
}
.fblogin:hover {
  background-color:#5177c2;
}
.fblogin:active {
  position:relative;
  top:1px;
}
.gplogin {  
  background-color:#dd4c39; 
}
.gplogin:hover {
  background-color:#f06e60;
}
.gplogin:active {
  position:relative;
  top:1px;
}
.twlogin { 
  background-color:#00abee;  
}
.twlogin:hover {
  background-color:#4cbde6;
}
.twlogin:active {
  position:relative;
  top:1px;
}
.login-form input:focus, .login-form input:active {
  border-bottom: 2px solid #79B42B;
  outline: none;
}
.subbt:hover {
  background-color: #79b42b;
}
.subbt {
 
  text-shadow: 0 1px 0 rgba(122, 122, 122, 0.85);
  transition: background 500ms ease-in-out 0s;
  -webkit-transition: background 500ms ease-in-out 0s;
  -moz-transition: background 500ms ease-in-out 0s;
  -o-transition: background 500ms ease-in-out 0s;
  -ms-transition: background 500ms ease-in-out 0s;
  background-color: #79b42b;
  border: none;
  color: #FFF;
  padding: 10px 15px 10px 15px;
  margin-top: 10px;
  cursor: pointer;
  font-size: .9em;
  border-radius: 3px;
  width: 218px;
  font-family: 'Arimo', sans-serif;
  font-weight: 700;
  font-style: normal;

}
.right a {
  position: relative;
  color: #81B040;
  text-decoration: none;
  font-family: 'Arimo', sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: .9em;
  float: right;
  margin-top:5px;
}
.headit { 
  position: relative; 
  top: -10px;
}
.headit h4{
  color:#81B040;
}
.bts a:hover{
  text-decoration: none;
  color: white;
}
.bts a:active{
  color: white;
  text-decoration: none;
}
.bts a:focus{
  text-decoration: none;
  color: white;
}
.headit a {
text-decoration: none;
}

.fa.fa-check-square {
padding-right: 19px;
}
form#login-form:before {
  content: '';
  color: #79b42b;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  margin: auto;
  height: 0.5em;
  width: 0.5em;
  left: 1.5em;
 
  z-index: 900;
}
form#login-form:after {
  content: '';
  position: absolute;
  background: rgba(128, 128, 128, 0.3);
  top: 0;
  right: 0;
  left: 0;
  bottom: 15px;
  margin: auto;  
  height: 3.25em;
  width: 0.1em;
  left: 2.15em;
 
  -moz-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
  -webkit-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
  box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
}
/*Media Query */
@media screen  and (min-width: 1400px) {
.signform { width: 680px; left: 25%; }
}


@media screen  and (max-width: 1400px) and (min-width: 1230px) {
.signform { width: 50%; left: 25%; }
}

@media screen  and (max-width: 1230px) and (min-width: 1000px) {
.signform { width: 60%; left: 15%; }
}

@media screen  and (max-width: 1000px) and (min-width: 900px) {
.signform { width: 70%; left: 10%; }
}

@media screen  and (max-width: 900px) and (min-width: 750px) {
.signform { width: 80%; left: 8%; }
}

@media screen  and (max-width: 750px) and (min-width: 640px) {
.signform { width: 90%; 
  left: 1%; 
  }
}

@media screen  and (min-width: 640px) {
  .left {   
  width: 47%;
  display: inline-table;
  margin-left: 20px;
  float: right;
  }
  .right {
  width: 40%;
  display: inline-table;
  margin-left: 50px; 
  }
}

@media screen  and (max-width: 640px) {
  .left { 
    width: 100%;
    display: inline-table;  
    margin-bottom: 25px;
  }
  .right {
    width: 85%;
    display: inline-table;
    margin-left: 20px;  
  }
  .signform { 
    width: 50%;
    min-width:255px;
  }
  form#login-form:before {
    content: ''; 
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
   
}
  form#login-form:after {
    content: '';
    position: absolute;   
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
    height:0em;
    width: 0em;
    left: 0em;
    top: 0em;
    
  }
}
@media screen  and (max-width: 1500px) and (min-width: 650px) {
form#login-form::before {
    content: 'or';
    color: #983B85;
    position: absolute;   
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
    height: 0.5em;
    width: 0.5em;
    left: 1.5em;
    top: 4.2em;
    z-index: 900;
  }
  form#login-form::after {
    content: '';
    position: absolute;
    background: rgba(128, 128, 128, 0.3);
    top: 0;
    right: 0;
    left: 0;
    bottom: 15px;
    margin: auto;
    height: 3.25em;
    width: 0.1em;
    left: 2.15em;
    top: -2.8em;
    -moz-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
    -webkit-box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
    box-shadow: 0 8.8em 0 0 rgba(128, 128, 128, 0.3);
}
}
@media screen  and (max-width: 640px) and (min-width: 460px) {
.signform { 
  left: 25%;
   }
}
@media screen  and (max-width: 460px) and (min-width: 400px) {
  .signform {
   left: 20%; 
  }
}
@media screen  and (max-width: 400px) and (min-width: 320px) {
  .signform {
   left: 30%; 
  }
}
@media screen  and (max-width: 320px) {
  .signform {
   left: 1%;
    }
}
.bts i{ 
    margin: 15px 15px 15px 20px;
    float: left;
    width: 5%;
    font-size: 20px;
    margin-left: 20px;
}
  </style>
