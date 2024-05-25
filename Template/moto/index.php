<?PHP
include_once (__DIR__ . "/../../Template/block/header.php");
?>
<h1>Liste des Motos</h1>


<div class="container border p-3">

    <div
        class="d-flex justify-content-evenly align-items-center flex-wrap gap-3"><?php foreach ($motos as $moto) {

            include (__DIR__ . "/../../Template/moto/card.php");
        }
        ?>
    </div>
</div>

<?PHP
include_once (__DIR__ . "/../../Template/block/footer.php");
?>

