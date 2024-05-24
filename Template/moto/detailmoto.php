<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo ($title ?? "Default Title") ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body>

    <div class="card w-25">
        <img src="<?php echo ($moto["image"]) ?>" class="card-img-top" alt="<?php echo ($moto["model"]) ?>">
        <div class="card-body">
            <h5 class="card-title text-primary"><?php echo ($moto["model"]) ?></h5>
            <p class=" card-text">Type :<?php echo ($moto["type"]) ?></p>
            <p class="card-text">Marque :<?php echo ($moto["brand"]) ?></p>
            <p class="card-text">prix : <?php echo ($moto["price"]) ?></p>
        </div>
        <div class="col d-flex justify-content-around m-1" style="width: 100%; height: 10%;">
            <a href="/moto/edit/<?php echo ($moto["id"]) ?>" class="btn btn-primary">Modifier</a>
            <a href="/moto/delete/<?php echo ($moto["id"]) ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
    </div>
</body>

</html>