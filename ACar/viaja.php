<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link rel="stylesheet" href="viaja.css">
    <script src="viaja.js"></script>

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
                <h1>Viaja</h1>
                <p> </p>
                
            </div>
            <div class="col">
                <div class="card card1" onclick="viaja()">
                    <h5>Regresar
                    </h5>
                    <p></p>
                </div>
                <div class="card card2" onclick="redirectToSeleccion()">
                    <h5>Programar
                        viajes</h5>
                    <p</p>
                </div>
                <div onclick="direccion()" class="card card3">
                    <h5>Administrar direccion </h5>
                    <p>Encuentra una manera de generar dinero extra.</p>
                </div>
                <div onclick="redirectSoporte()" class="card card4" >
                    <h5>Consulta Historial </h5>
                    <p>Aquí te solucionaremos cualquier problema.</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>