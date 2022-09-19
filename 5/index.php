<?php require_once("./app.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Lab4</title>
</head>
<body>
    
    <div class="container-md">
        <h1>Componentes</h1>
        <?php echo Componentes::myModal(

            "Ir a Google",
            "danger",
            "Modal para ir a Google",
            "da click en el boton Google para abrir el buscador",
            "Cerrar",
            "Abrir Google.com",
            "https://www.google.com"

        ); ?>

        <br>
        <br>

        <?php echo Componentes::myCarousel(

            "Gato",
            "https://wp.es.aleteia.org/wp-content/uploads/sites/7/2017/03/web-photo-of-the-day-koldunov-alexey11.jpg",
            "Perro",
            "https://blog.doghouser.com/wp-content/uploads/2020/09/como-hacer-que-mi-perro-no-tire-de-la-correa.png",
            "Elefante",
            "https://www.larazon.es/resizer/fbD-5gh7GskWobHd2m-KJZ34UqU=/1800x1200/smart/filters:format(webp):quality(65)/cloudfront-eu-central-1.images.arcpublishing.com/larazon/NDOQJPEJR5HBBJDSTHQ75VXTRU.jpg"

        ); ?>





    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>