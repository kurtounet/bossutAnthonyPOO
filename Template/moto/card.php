<a class="myCard" href="http://localhost/bossutAnthonyPOO/index.php/moto/<?php echo ($moto->getId()); ?>">
    <div class="card">
        <img src="<?php echo ($moto->getImage()) ?>" class="container-fluid" alt="<?php echo ($moto->getModel()); ?>">
        <div class="card-body">
            <h5 class="card-title text-primary"><?php echo ($moto->getModel()); ?></h5>
            <p class="m-1">Type :
                <?php echo ($moto->getType()); ?>
            </p>
            <p class="m-2">Marque :
                <?php echo ($moto->getBrand()); ?>
            </p>
            <p class="m-1">Prix :
                <?php echo ($moto->getPrice()); ?>
                €
            </p>
        </div>
    </div>
</a>

