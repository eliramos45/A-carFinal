<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A-car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylePagina.css">
  </head>

  <body>
    <!--Primer nav donde están las redes y el número de teléfono-->
    <nav nav class="navbar1" >
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="facebook" src="images/logo f naranja.png" alt="Logo Facebook" >
            <img class="insta" src="images/ig naranja.png" alt="Logo Instagram" >
            <img class="twitter" src="images/twitter naranja.png" alt="Logo twitter"  >
          </a>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="textoNaranja" aria-current="page" href="#">( 01800-Acar )</a>
            </li> 
          </ul>
    </nav>
    <!--Segundo nav (logo a-car y menú) -->
      <div nav class="navbar2"  >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="LogoA-car" class="d-inline-block align-text-center" src="images/carro negro.png" alt="Logo A-car"  >
             A-Car
          </a>
          <ul class="nav justify-content-end">
            <li class="menu">
              <a class="nav-link rounded-pill" href="#">Inicio</a>
            </li>
            <li class="menu">
              <a class="nav-link rounded-pill" href="#">Sobre Nosotros</a>
            </li>
            <li class="menu">
              <a class="nav-link rounded-pill" href="#">Descargar</a>
            </li>
            <li class="menu">
              <a class="nav-link rounded-pill">Servicios</a>
            </li>
            <li class="menu">
                <a class="nav-link rounded-pill">Contáctanos</a>
              </li>
          </ul>
        </div>  
    </div>

    <!--Mapa con el título A-car -->
    <section id="Inicio">
    <div id="titulo_Acar" >
        <img src="images/MapaFondoRecortado2.jpg" alt="Mapa de Fondo" >
        <a  >A-Car</a>
        <b  >De estudiantes. Para estudiantes</b>
      
        <div class="d-grid gap-2 col-6 mx-auto">
          <button id="signUp" class="btn rounded-pill" type="button" onclick="window.location.href='login.php'">Sign Up Now</button>
        
        </div>
    </div>  
  </section>

    <!--Sobre nosotros (fondo blanco)-->    
    <section id="SobreNosotros">
          <div class="SobreNosotros">
             <h1>Sobre Nosotros</h1>
             <p> Ofrecemos un espacio seguro y factible para la movilización de los estudiantes a la Universidad </p>
             <img src="images/Personas.png" class="rounded mx-auto d-block" alt="Personas" >
           </div>
      </section>

    <!--Descargas-->    
      <section id="Descargar"  >
        <div class="Descargar">
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <img class="celular" src="images/Celulares.png" alt="Muestras de la Applicación" >
              </div>
              <div class="col">
                <h2 class="text-center">¡Obtén la aplicación celular A-Car</h2>
                <p class="text-center">Nuestra app es fácil y amigable de usar.</p>
                <c class="text-center">Descárgalo ahora en</c>


                <button type="button" style="border:none; background-color: #ED843C;">
                  <img src="images/logoGoogleplay.png" alt="Google Play" width="300"  href="https://play.google.com/store/games">
                  <img src="images/logo appstore.png" alt="App Store" width="300"  href="#">
                </button>
                
              </div>
        </div>
        </div>  
    </section>
    
    <section id="Servicios" >
      <footer class="PiedePagina" >
        
      <div  style="position:relative;">
        <img src="images/FondoRecortadomitad.jpg" alt="Mapa de Fondo" >
   

    <div  class="container text-center"style="position: absolute; top:60%; left:13% ">
      <div id="Comentarios" class="row" >

        <div class="col" >
          <div class="card text-bg-light mb-3" style="max-height: 15rem;" >
            <div class="card-header">"Excelente aplicación para garantizar la seguridad durante el traslado de los estudiantes de la Universidad Anáhuac Cancún ¡La recomiendo!"</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-auto">
                  <img src="images/fer foto.png" alt="Foto de perfil de usuario " width="20%" >
                </div>
                <div class="col-md-auto">
                  <h6 class="card-title">Fernando Lara Monter</h6>
                  <p class="card-text">Estudiante de 6to semestre</p>
                </div>
              </div>
            </div>          

          </div>
        </div>
      
        <div  class="col" >
          <div class="card text-bg-light mb-3" style="max-height: 15rem;" >
            <div class="card-header" style="padding-top: 20px; padding-bottom: 20px;">"Me ha facilitado mi vida de foránea y me siento segura al ir a la universidad"</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-auto"style="padding-top: 12px; padding-bottom: 12px;">
                  <img src="images/tam_foto.png" alt="Foto de perfil de usuario " width="26%" >
                </div>
                <div class="col-md-auto">
                  <h6 class="card-title">Tamia Emilia Polo Egas</h6>
                  <p class="card-text">Estudiante de 6to semestre</p>
                </div>
              </div>
            </div>          

          </div>
        </div>
 </div>  
      </div>
    </div>


    
       <ul class="nav justify-content-end" style="padding-top: 200px;">
        <li class="menu2">
          <a aria-current="page" href="#">Ponte en contacto</a>
        </li>
        <li class="menu2">
          <a aria-current="page" href="#">Privacidad</a>
        </li>
        <li class="menu2">
          <a aria-current="page" href="#">Aviso Legal</a>
        </li>
        <li class="menu2">
          <a aria-current="page" href="#">Marcas Registradas</a>
        </li>
        <li class="menu2">
          <a aria-current="page" href="#">Sobre nuestra Publicidad</a>
          </li>
        <li class="menu2">
          <a aria-current="page" href="#">© A-Car 2023</a>
        </li>
      </ul>
    </footer>


    </section>


  </body>
 
</html>
