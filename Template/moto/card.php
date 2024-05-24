<div class="card w-25">
    <img src="<?php echo ($moto->getImage()); ?>" class="card-img-top" alt="<?php echo ($moto->getModel()); ?>">
    <div class="card-body">
        <h5 class="card-title text-primary"><?php echo ($moto->getModel()); ?></h5>
        <p class="card-text">Type : <?php echo ($moto->getType()); ?></p>
        <p class="card-text">Marque : <?php echo ($moto->getBrand()); ?></p>
        <p class="card-text">Prix : <?php echo ($moto->getPrice()); ?></p>
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