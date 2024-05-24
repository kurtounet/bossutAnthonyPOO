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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-md-6 mx-auto p-3 shadow">
        <h1>Ajouter une Moto</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="brand" class="form-label">Marque:</label>
                <input type="text" id="brand" name="brand" class="form-control" value="MOI" required>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Modèle:</label>
                <input type="text" id="model" name="model" class="form-control" value="Anthony" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <select id="type" name="type" class="form-select" required>
                    <option value="Enduro">Enduro</option>
                    <option value="Custom">Custom</option>
                    <option value="Sportive">Sportive</option>
                    <option value="Roadster">Roadster</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix:</label>
                <input type="number" id="price" name="price" class="form-control" value="10000" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image (URL):</label>
                <input type="url" id="image" name="image" class="form-control"
                    value="https://picsum.photos/id/237/200/300">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
            <p><?php echo ($error ?? "") ?></p>
        </form>
    </div>

</body>

</html>