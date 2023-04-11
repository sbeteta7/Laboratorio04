<?php
$nota01 = $_POST['nota1'];
$nota02 = $_POST['nota2'];
$nota03 = $_POST['nota3'];


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
                    <a class="nav-link active" href="Ejercicio04.html">Ejercicio 04</a>
                    <a class="nav-link" href="Ejercicio05.html">Ejercicio 05</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1> Notas ingresadas:</h1>
                <p>Primera nota:
                    <?php echo $nota01 ?>
                </p>
                <p>Segunda nota:
                    <?php echo $nota02 ?>
                </p>

                <p>Tercera nota:
                    <?php echo $nota03 ?>
                </p>

            </div>

            <div class="col-6">
                <h1>El resultado del curso es:</h1>
                <div>
                    <?php
                    $promedio=round(($nota01 + $nota02 + $nota03)/3,2);
                    
                    if ($promedio>=13) {
                        echo "Aprobado";
                    }else{
                        echo "Reprobado";
                    }
                    
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>