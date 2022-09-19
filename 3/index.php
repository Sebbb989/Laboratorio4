<?php 
require_once "./app.php";
$app = new depresiacion($_GET["po"], $_GET["vu"]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Lab4</title>
</head>
<body>
    
    <div class="container-md text-center">
        <h1>Calculo de la Depresiacion</h1>
        <h5>Precio original: <?php echo $_GET["po"]; ?></h5>
        <h5>Vida util: <?php echo $_GET["vu"]; ?></h5>
        <h5>Depresiacion Anual: <?php echo $app->getDa(); ?></h5>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Año</th>
                    <th scope="col">Valor Por Año</th>
                    <th scope="col">Valor Recuperado</th>
                </tr>
            </thead>
            <tbody>
                <?php $app->Calcular(); ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>