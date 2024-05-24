<?PHP

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

<body>

    <div class="container col-6 ">
        <h1>Modifier une Moto</h1>

        <form action="" method="POST">
            <label for="brand">Marque:</label>
            <input type="text" id="brand" name="brand" value="<?= $moto['brand'] ?>" required>
            <br>
            <label for="model">Modèle:</label>
            <input type="text" id="model" name="model" value="<?= $moto['model'] ?>" required>
            <br>
            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="Enduro">Enduro</option>
                <option value="Custom">Custom</option>
                <option value="Sportive">Sportive</option>
                <option value="Roadster">Roadster</option>
            </select>
            <br>
            <label for="price">Prix:</label>
            <input type="number" id="price" name="price" value="<?= $moto['price'] ?>" required>
            <br>
            <label for="image">Image (URL):</label>
            <input type="url" id="image" name="image" value="<?= $moto['image'] ?>" required>
            <br>
            <input type="hidden" id="id" name="id" value="<?= $moto['id'] ?>">
            <button type="submit">Modifier</button>
        </form>
    </div>

</body>

</html>