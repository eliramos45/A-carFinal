<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

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
                <h1>A-Car</h1>
                <p> Los alumnos merecen una manera para transportarse de manera segura y barata. Por eso, hecho por alumnos, hemos diseñado, A-Car, un sistema de rides entre estudiantes.</p>
                <button type="button">Explora</button>
            </div>
            <div class="col">
                <div onclick="viaja()" class="card card1">
                    <h5>Viaja</h5>
                    <p>Encuentra con quien te vas a ir.</p>
                </div>
                <div class="card card2" onclick="redirectToSeleccion()">
                    <h5>Metodos de pago </h5>
                    <p>Encuentra la manera más optima para pagar.</p>
                </div>
                <div onclick="manejaAhora()" class="card card3">
                    <h5>Maneja </h5>
                    <p>Encuentra una manera de generar dinero extra.</p>
                </div>
                <div onclick="redirectSoporte()" class="card card4" >
                    <h5>Soporte </h5>
                    <p>Aquí te solucionaremos cualquier problema.</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>