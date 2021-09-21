<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/site.css">
    <title>Mon site test pour les cupcakes</title>
</head>
<body>
<?php
include"Includes/menu.php";
DisplayMenu();
?>


<div class="container">
    <div class="text-white jumbotron bg-dark mt-2 text-justify">
    <h2 class="text-left">Crazy Cupcakes</h2>

    <p>
    Fiers de notre savoir faire, venez découvrir nos Crazy Cupcakes faits avec Amour et Passion depuis déjà 20 ans. C'est une histoire familiale que vous pourrez 
    <a href="about.php">découvrir.</a>
    </p>
    

        <div id="carouselpicture" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                                        <img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcake1.jpg" alt="cupcake 1">
                </div>
                <div class="carousel-item">
                    <img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcake2.jpg" alt="cupcake 2">
                </div>
                <div class="carousel-item">
                    <img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcake3.jpg" alt="cupcake 3">
                </div>
                <div class="carousel-item">
<img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcake4.jpg" alt="cupcake 4">
                </div>
                <div class="carousel-item">
<img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcake5.jpg" alt="cupcake 5">
                </div>
                <div class="carousel-item">
<img class="product mr-2 img-fluid img-thumbnail" src="Images/cupcakefist.jpg" alt="cupcake fist">
                </div>
            </div>
            <a href="#carouselpicture" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a href="#carouselpicture" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
<!-- Contrôles Pause et Play -->
<button type="button" class="btn btn-default btn-play" carousel="#carouselpicture" aria-label="Activer le caroussel" style="display: none;" title="Activer le caroussel">
    <span class="bi bi-play-btn" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default btn-pause" carousel="#carouselpicture" aria-label="Mettre en pause le caroussel" title="Mettre en pause le caroussel">
    <span class="bi bi-pause-btn" aria-hidden="true"></span>
</button>
</div>
</div>

<div class="position-absolute" style="right: 0px">
(c) 2021 <img src="Images/logo.png" alt="Logo de l'entreprise" class="height-15"> Crazy Cupcakes

</div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>