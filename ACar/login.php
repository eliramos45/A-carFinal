
<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Login A-Car</title>
    <?php  //llama al materialize 
        include ("estilo.php"); 

        ?>
    </head>

    <body>
        <div>
            <img class="fondo" src="images/fondo.png" alt="fondo">
            <div class="card">
                    <img src="images/carro naranja.png" class="card-img-top" alt="Logo A-car Naranja">
                    <h4>A-Car</h4>
                    <b  >De estudiantes. Para estudiantes</b>
                    <div class="card-body">
                    <div class="row">
                        <form class="col s12" action="dashboard.php" method="POST">
                        <div class="row">
                            <div class="input-field col s6">
                            <input id="matricula" type="text" class="validate" name=" matricula">
                            <label for="matricula">Matrícula</label>
                            </div>
                            <div class="input-field col s6">
                            <input id="contrasenia" type="password" class="validate" name ="contrasenia">
                            <label for="contrasenia">Contraseña</label>
                            </div>
                            
                            <a href= "paginaprincipal.php" class="waves-effect waves-light btn">Cancelar</a>
                            <button class="btn btn-outline-primary mt-3"  id="btn-login" type="submit">
                             Iniciar Sesión
                            </button>
                           
                        </div>
                            
                        </form>
                     </div>
                    
        
                    </div>
                </div>
            
        </div>
        
       
    </body>
  </html>

  
