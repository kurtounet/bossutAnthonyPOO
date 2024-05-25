<?PHP
include_once (__DIR__ . "/../../Template/block/header.php");
?>

        <div class="container col-md-6 mx-auto p-3 shadow">
            <h1>Ajouter une Moto</h1>
            <?php

            if (!empty($error)) {
                echo ("<p class='text-danger'>" . $error[0] . "</p>");
            }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
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
                    <p>
                        €</p>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image (URL):</label>
                    <input type="url" id="image" name="image" class="form-control" value="http://localhost/bossutAnthonyPOO/assets/images/motorbike.png" required/>
                    <input type="file" name="avatar">
                </div>


                <button type="submit" class="btn btn-primary">Ajouter</button>

            </form>
        </div>

<?PHP
include_once (__DIR__ . "/../../Template/block/footer.php");
?>
