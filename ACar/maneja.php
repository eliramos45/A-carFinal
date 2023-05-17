<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link rel="stylesheet" href="maneja.css">
    <script src="maneja.js"></script>

    <link href="https: //fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>
    <div class="conatainer">
    <div class="navbar">
            <img src=" images/logo2.png" class="logo">
            <nav>
                <ul>
                    <li><a href="">MENU</a></li>
                    <li><a href="">CONFIGURACION</a></li>
                    <li><a href="">ACERCA DE</a></li>
                    <li><a href="">     </a></li>
                </ul>
            </nav>
            
        </div>

        <div class="row">
            <div class="col">
                <h1>Maneja</h1>
                <p> </p>
                
            </div>
            <div class="col">
                <div class="card card1" onclick="viaja()">
                    <h5>Peticiones de rides
                    </h5>
                    <p></p>
                </div>
                <div class="card card2" onclick="redirectToSeleccion()">
                    <h5>Dar de alta vehículos</h5>
                    <p</p>
                </div>
                <div onclick="dashboard()" class="card card3">
                    <h5>Regresar </h5>
                    <p></p>
                </div>
                <div onclick="direccion()" class="card card4" >
                    <h5>Actualizar dirección</h5>
                    <p></p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>