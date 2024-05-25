<a class="card w-25 H-25" href="http://localhost/bossutAnthonyPOO/index.php/moto/<?php echo ($moto->getId()); ?>">
    <div class="card ">
        <img src="<?php echo ($moto->getImage()) ?>" class="container-fluid" alt="<?php echo ($moto->getModel()); ?>">
        <div class="card-body">
            <h5 class="card-title text-primary"><?php echo ($moto->getModel()); ?></h5>
            <p class="card-text">Type :
                <?php echo ($moto->getType()); ?>
            </p>
            <p class="card-text">Marque :
                <?php echo ($moto->getBrand()); ?>
            </p>
            <p class="card-text">Prix :
                <?php echo ($moto->getPrice()); ?>
                €
            </p>
        </div>
    </div>
</a>

