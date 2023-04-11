<?php
$num1 = $_POST['primer_valor'];
$num2 = $_POST['segundo_valor'];
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
                    <a class="nav-link active" href="Ejercicio03.html">Ejercicio 03</a>
                    <a class="nav-link" href="Ejercicio04.html">Ejercicio 04</a>
                    <a class="nav-link" href="Ejercicio05.html">Ejercicio 05</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1> Datos ingresados:</h1>
                <p>Primer número:
                    <?php echo $num1 ?>
                </p>
                <p>Segundo número:
                    <?php echo $num2 ?>
                </p>

            </div>

            <div class="col-6">
                <h1>El cálculo es:</h1>
                <div>
                    <?php
                        if($num2==0){
                            ?>
                            <p>
                                El segundo número no puede ser 0
                            </p>
                            <?php
                        }   
                        else if ($num1 > $num2) {
                        $suma = $num1 + $num2;
                        $diferencia = $num1 - $num2;
                        ?>
                        <p>El resultado de la suma es:
                            <?php echo $suma ?>
                        </p>

                        <p>El resultado de la diferencia es:
                            <?php echo $diferencia ?>
                        </p>

                        <?php
                    } else {
                        $producto = $num1 * $num2;
                        $division = $num1 / $num2;

                        ?>

                        <p>El resultado del producto es:
                            <?php echo $producto ?>
                        </p>

                        <p>El resultado de la división es:
                            <?php echo round($division, 2) ?>
                        </p>

                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>