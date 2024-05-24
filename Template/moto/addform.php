<?PHP

/*
use Src\Controller\MotoController;

$motoController = new MotoController();
// Configuration de la base de données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["imageUrl"], $_POST["contenu"], $_POST["titre"], $_POST["auteur"])) {
        $motoController->add($_POST);
    }
}
*/
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
        <h1>Ajouter une Moto</h1>
        <form action="" method="POST">
            <label for="brand">Marque:</label>
            <input type="text" id="brand" name="brand" value="MOI" required>
            <br>
            <label for="model">Modèle:</label>
            <input type="text" id="model" name="model" value="Anthony" required>
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
            <input type="number" id="price" name="price" value="10000" required>
            <br>
            <label for="image">Image (URL):</label>
            <input type="url" id="image" name="image" value="https://picsum.photos/id/237/200/300">
            <br>
            <button type="submit">Ajouter</button>
            <p><?php echo ($error ?? "") ?></p>
        </form>
    </div>
</body>

</html>