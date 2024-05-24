<div class="card w-25">
    <img src="<?php echo ($moto->getImage()); ?>" class="card-img-top" alt="<?php echo ($moto->getModel()); ?>">
    <div class="card-body">
        <h5 class="card-title text-primary"><?php echo ($moto->getModel()); ?></h5>
        <p class=" card-text">Type :<?php echo ($moto->getType()); ?></p>
        <p class="card-text">Marque :<?php echo ($moto->getBrand()); ?></p>
        <p class="card-text">prix : <?php echo ($moto->getPrice()); ?></p>
    </div>
    <div class="col d-flex justify-content-around m-1" style="width: 100%; height: 10%;">
        <a href="http://localhost/bossutAnthonyPOO/index.php/moto/edit/<?php echo ($moto->getId()); ?>" class="btn btn-primary">Modifier</a>

        <form action=" http://localhost/bossutAnthonyPOO/index.php/moto/delete/<?php echo ($moto->getId()); ?>" method="POST" onsubmit="return confirm('Êtes vous sur de vouloir supprimer ?');">
            <input class="btn btn-danger" type="submit" value="Supprimer">
        </form>
    </div>
</div>