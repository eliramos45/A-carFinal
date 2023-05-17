<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagoStyle.css">
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="card px-4">
            <div class=" my-3">
                <p class="h8">Metodos de pago</p>
                <p class="text-muted ">En esta pantalla podrás elegir el método de pago que más te acomode.</p>
            </div>

            <div class="debit-card mb-3">
                <div class="d-flex flex-column h-100">
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png" class="visa" alt="">
                                <p class="mt-2 mb-4 text-white fw-bold">Enrico Burstyn</p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p>4989 1237 1234 4532</p>
                        <p>01/24</p>
                    </div>
                </div>
            </div>
            <div class="debit-card card-2 mb-4">
                <div class="d-flex flex-column h-100">
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png" alt="master" class="master">
                                <p class="text-white fw-bold">Enrico Burstyn</p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p class="m-0">5540 2345 3453 2343</p>
                        <p class="m-0">05/23</p>
                    </div>
                </div>
            </div>

            <div class="debit-card card-2 mb-4">
                <div class="d-flex flex-column h-100">
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="images/cash.png" alt="master" class="master">
                                <p class="efectivo" image.png>
                                    Efectivo</p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p class="m-0"></p>
                        <p class="m-0"></p>
                    </div>
                </div>
            </div>
            <div class="btn mb-4" onclick="window.location.href='dashboard.php'">
                Elegir
            </div>

        </div>
    </div>
</body>

</html>