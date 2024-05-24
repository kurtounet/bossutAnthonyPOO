Toutes les moto
<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo ($title ?? "Default Title") ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>


<h1>Liste des Motos</h1>
<h1><?php echo ($type ?? "") ?></h1>
<a href="http://localhost/bossutAnthonyPOO/index.php/moto/add" class="btn btn-primary">Ajouter une Moto</a>
<form action="" method="POST">
    <select name="type">
        <option value="">Tous les types</option>
        <option value="Enduro">Enduro</option>
        <option value="Custom">Custom</option>
        <option value="Sportive">Sportive</option>
        <option value="Roadster">Roadster</option>
    </select>
    <button type="submit">Filter</button>
</form>

<body>

    <div class="container">

        <div class="d-flex justify-content-evenly align-items-center flex-wrap gap-3">
            <?php foreach ($motos as $moto) {

                include(__DIR__ . "/../../Template/moto/card.php");
            }
            ?>
        </div>
    </div>

</body>

</html>