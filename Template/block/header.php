<?php

// 1 active l'affichage des erreurs ou 0 désactive l'affichage des erreurs
// pour eviter qu'un petit malin, est des infos sur les debugs.
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);



$title = "Concession Motos";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title><?php echo ($title ?? "Default Title") ?></title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>

            <style>
                  img {                        
                                               
                        object-fit: contain; 
                        object-position: center;
                        width: 200px;
                        height: 150px;
                        
                  }
                  .myCard {
                        width: 250px;
                        height: 350px;                       
                  }
            </style>

</head>

<body> 
      <?php
      include_once (__DIR__ . "/navbar.php");
      ?>