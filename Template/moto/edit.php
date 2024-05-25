<?PHP
include_once (__DIR__ . "/../../Template/block/header.php");
?>

        <div class="container col-md-6 mt-5">
            <h1>Modifier une Moto</h1>
            <?php

            if (!empty($error)) {
                echo ("<p class='text-danger'>" . $error[0] . "</p>");
            }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="brand" class="form-label">Marque:</label>
                    <input type="text" id="brand" name="brand" class="form-control" value="<?php echo ($moto->getBrand()); ?>" required>
                </div>

                <div class="mb-3">
                    <img src="<?php echo ($moto->getImage()) ?? "https://placehold.co/400"; ?>" alt="<?php echo ($moto->getModel()); ?>">

                    <input type="text" id="image" name="image" class="form-control" value="<?php echo ($moto->getImage()); ?>" required>
                    <input type="file" name="avatar">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Modèle:</label>
                    <input type="text" id="model" name="model" class="form-control" value="<?php echo ($moto->getModel()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <select
                        id="type" name="type" class="form-select" required><?php
                        if ($moto->getType() == "Enduro") {
                            echo ('<option value="Enduro" selected>Enduro</option>');
                            echo ('<option value="Custom">Custom</option>');
                            echo ('<option value="Sportive">Sportive</option>');
                            echo ('<option value="Roadster">Roadster</option>');
                        } elseif ($moto->getType() == "Custom") {
                            echo ('<option value="Enduro">Enduro</option>');
                            echo ('<option value="Custom" selected>Custom</option>');
                            echo ('<option value="Sportive">Sportive</option>');
                            echo ('<option value="Roadster">Roadster</option>');
                        } elseif ($moto->getType() == "Sportive") {
                            echo ('<option value="Enduro">Enduro</option>');
                            echo ('<option value="Custom">Custom</option>');
                            echo ('<option value="Sportive" selected>Sportive</option>');
                            echo ('<option value="Roadster">Roadster</option>');
                        } elseif ($moto->getType() == "Roadster") {
                            echo ('<option value="Enduro">Enduro</option>');
                            echo ('<option value="Custom">Custom</option>');
                            echo ('<option value="Sportive">Sportive</option>');
                            echo ('<option value="Roadster" selected>Roadster</option>');
                        }
                        ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prix:</label>
                    <input type="number" id="price" name="price" class="form-control" value="<?php echo ($moto->getPrice()); ?>" required>
                </div>


                <input type="hidden" id="id" name="id" value="<?php echo ($moto->getId()); ?>">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>

<?PHP
include_once (__DIR__ . "/../../Template/block/footer.php");
?>
