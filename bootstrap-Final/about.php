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
    <title>Notre histoire</title>
</head>
<body>
<?php
include"Includes/menu.php";
DisplayMenu();
?>

<div class="container bg-light mt-2 border rounded">
<h1 class="text-center">Notre Histoire</h1>
<div class='d-inline-block my-1 p-2 bg-light border rounded text-justify w-100'>
<h2>Qui se cache derrière Crazy Cupcakes ?</h2>
    <p>
    C'est notre Directeur Auguste Cupcake, un dévoreur de gâteaux, qui créa Crazy Cupcakes.
Depuis sa plus grande enfance, il n'arrête pas de les mélanger à toutes les sauces.
Il rencontra par la suite sa douce et tendre Véronique qui lui apprit la délicatesse et une autre technique pour faire de petits cake...
    </p>
</div>
<div class='d-inline-block my-1 p-2 bg-light border rounded text-justify w-100'>
    <h2>D'où est venu ce nom Crazy Cupcakes ?</h2>
    <img class="product product float-left mr-2 img-fluid img-thumbnail" src="Images/cupcakefist.jpg" alt="cupcake fist">
    <p>
    Auguste Cupcake créa le premier cupcake lorsqu'il voulu faire rentrer son gâteau dans sa tasse de café à l'aide de son poing: une idée un peu folle/crazy !
De là est né Crazy Cupcakes !
</p>
</div>
</div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>