<?php

$nombreyapellido = $_POST['nombreyapellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-black text-center display-5">Bienvenido</div>
                    </div>
                    <div class="card-body">
                        <p>
                            ¡Hola <?php echo $nombreyapellido ?>!
                            <br>
                            Tu direccion es <?php echo $direccion ?>
                            <br>
                            Tienes <?php echo $edad ?> años y tu correo es  <?php echo $email ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>