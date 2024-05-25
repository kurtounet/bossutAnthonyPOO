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

</head>

<body>
    <div class="container col-5 mt-5">
        <div class="card ">
            <img src="<?php echo ($moto->getImage()) ?>" class="container-fluid w-50"
                alt="<?php echo ($moto->getModel()) ?>">
            <div class="card-body">
                <h5 class="card-title text-primary"><?php echo ($moto->getModel()) ?></h5>
                <p class=" card-text">Type :<?php echo ($moto->getType()) ?></p>
                <p class="card-text">Marque :<?php echo ($moto->getBrand()) ?></p>
                <p class="card-text">prix : <?php echo ($moto->getPrice()) ?></p>
            </div>
            <div class="card-footer d-flex justify-content-around">
                <a href="http://localhost/bossutAnthonyPOO/index.php/moto/edit/<?php echo ($moto->getId()); ?>"
                    class="btn btn-primary">Modifier</a>
                <form action="http://localhost/bossutAnthonyPOO/index.php/moto/delete/<?php echo ($moto->getId()); ?>"
                    method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette moto?');">
                    <input type="submit" class="btn btn-danger" value="Supprimer">
                </form>
            </div>

        </div>
    </div>

</body>

</html>