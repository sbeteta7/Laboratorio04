<?php
$valor01 = $_POST['valor01'];
$valor02 = $_POST['valor02'];
$valor03 = $_POST['valor03'];


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

<body style="background=black;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-sm-3">
                <h1><a href="Index.html">Laboratorio 3</a></h1>
            </div>

            <div class="col-sm-9">
                <div class="navbar-nav">
                    <a class="nav-link" href="Ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link" href="Ejercicio02.html">Ejercicio 02</a>
                    <a class="nav-link" href="Ejercicio03.html">Ejercicio 03</a>
                    <a class="nav-link" href="Ejercicio04.html">Ejercicio 04</a>
                    <a class="nav-link active" href="Ejercicio05.html">Ejercicio 05</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1> Valores ingresados:</h1>
                <p>Primer valor:
                    <?php echo $valor01 ?>
                </p>
                <p>Segundo valor:
                    <?php echo $valor02 ?>
                </p>

                <p>Tercer valor:
                    <?php echo $valor03 ?>
                </p>

            </div>

            <div class="col-6">
                <h1>El número mayor es:</h1>
                <div>
                    <p>
                        <?php
                        if ($valor01 >= $valor02 && $valor01 >= $valor03) {
                            echo $valor01;
                        } else if ($valor02 >= $valor01 && $valor02 >= $valor03) {
                            echo $valor02;
                        } else {
                            echo $valor03;
                        }

                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>