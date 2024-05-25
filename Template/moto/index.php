<?PHP
include_once (__DIR__ . "/../../Template/block/header.php");
?>
<h1 class="text-center text-danger">Liste des
    <?php
    if (isset($selectedType)) {
        echo ($selectedType);
    } else {
        echo ('Motos');
    } ?>
</h1>
<div class="container p-3">

    <div
        class="d-flex justify-content-evenly align-items-center flex-wrap gap-3"><?php
        foreach ($motos as $moto) {
            include (__DIR__ . "/../../Template/moto/card.php");
        }
        ?>
    </div>
</div>

<?PHP
include_once (__DIR__ . "/../../Template/block/footer.php");
?>

