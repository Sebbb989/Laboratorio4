<?php 

if(isset($_GET['pph']) && isset($_GET['ht'])){
    include_once "./app.php";
    $app = new salNeto($_GET['pph'], $_GET['ht']);
    $salneto = $app->calSalario();

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
    
    <div class="container-sm text-center">
        <h1>Salario Neto de Trabajador</h1>
        <h5>El salario neto de este trabajador es de <?php echo $salneto; }?></h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>