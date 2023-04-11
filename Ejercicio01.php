<?php
$date = date('d-m-y h:i:s');
$usuario = $_POST['usuario'];
$correo = $_POST['email'];

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
                    <a class="nav-link active" href="Ejercicio01.html">Ejercicio 01</a>
                    <a class="nav-link" href="Ejercicio02.html">Ejercicio 02</a>
                    <a class="nav-link" href="Ejercicio03.html">Ejercicio 03</a>
                    <a class="nav-link" href="Ejercicio04.html">Ejercicio 04</a>
                    <a class="nav-link" href="Ejercicio05.html">Ejercicio 05</a>
                </div>
                </div>
            </div>
        </div>
        </div>
    </nav>



    <div class="container mt-5" style="background-color: antiquewhite;">
        <div class="">
            <p class="text-center  fs-1 ">Datos enviados</p>
        </div>

        <div class="" style="background-color: blanchedalmond;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tiempo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody id="tbody-datos">

                    <tr>
                        <td id="td-hora">
                            <?php echo $date ?>
                        </td>

                        <td id="td-usuario">
                            <?php echo $usuario ?>
                        </td>
                        <td id="td-email">
                            <?php echo $correo ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>