<?php
$valor01 = $_POST['num1'];
$valor02 = $_POST['num2'];
$valor03 = $_POST['num3'];
$valor04 = $_POST['num4'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-sm-3">
                <h1><a href="Index.html">Laboratorio 3</a></h1>
            </div>

            <div class="col-sm-9">
                <div class="navbar-nav">
                <div class="navbar-nav">
                    <a class="nav-link" href="Ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link active" href="Ejercicio02.html">Ejercicio 02</a>
                    <a class="nav-link" href="Ejercicio03.html">Ejercicio 03</a>
                    <a class="nav-link" href="Ejercicio04.html">Ejercicio 04</a>
                    <a class="nav-link" href="Ejercicio05.html">Ejercicio 05</a>
                </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1> La suma del primer y segundo número</h1>
                <p>Primer número:
                    <?php echo $valor01 ?>
                </p>
                <p>Segundo número:
                    <?php echo $valor02 ?>
                </p>
                <p>El resultado es:</p>
                <p>
                    <?php echo $valor01 + $valor02 ?>
                </p>
            </div>

            <div class="col-6">
                <h1> El producto del tercer y cuarto número</h1>
                <p>Tercer número:
                    <?php echo $valor01 ?>
                </p>
                <p>Cuarto número:
                    <?php echo $valor02 ?>
                </p>
                <p>El resultado es:</p>
                <p>
                    <?php echo $valor01 * $valor02 ?>
                </p>
            </div>

        </div>
    </div>
</body>

</html>