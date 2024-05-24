<div class="card w-25">
    <img src="<?php echo ($moto["image"]) ?>" class="card-img-top" alt="<?php echo ($moto["model"]) ?>">
    <div class="card-body">
        <h5 class="card-title text-primary"><?php echo ($moto["model"]) ?></h5>
        <p class=" card-text">Type :<?php echo ($moto["type"]) ?></p>
        <p class="card-text">Marque :<?php echo ($moto["brand"]) ?></p>
        <p class="card-text">prix : <?php echo ($moto["price"]) ?></p>
    </div>
    <div class="col d-flex justify-content-around m-1" style="width: 100%; height: 10%;">
        <a href="http://localhost/bossutAnthonyPOO/index.php/moto/edit/<?php echo ($moto["id"]) ?>" class="btn btn-primary">Modifier</a>

        <form action=" http://localhost/bossutAnthonyPOO/index.php/moto/delete/<?php echo ($moto["id"]) ?>" method="POST" onsubmit="return confirm('Êtes vous sur de vouloir supprimer ?');">

            <input class="btn btn-danger" type="submit" value="Supprimer">
        </form>
    </div>
</div>