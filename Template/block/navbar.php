<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="list-unstyled d-flex justify-content-evenly">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/bossutAnthonyPOO/index.php/moto">Home</a>
            </li>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/add" class="btn btn-primary m-1">Ajouter une
                Moto</a>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/" class="btn <?php
    if ( $selectedType === null) {
        echo ('btn-danger');
    } else {
        echo ('btn-success');
    }
    ?> m-1">Toutes les moto</a>
        </li>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/Enduro" class="btn <?php
    if (isset($selectedType) && $selectedType === 'Enduro') {
        echo ('btn-danger');
    } else {
        echo ('btn-success');
    }
    ?> m-1">Enduro</a>
        </li>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/Custom" class="btn <?php 
        if (isset($selectedType ) && $selectedType  === 'Custom'){
            echo ('btn-danger');
        } else{
            echo ('btn-success');
        }
        ?>  m-1">Custom</a>
        </li>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/Sportive" class="btn <?php
    if (isset($selectedType) && $selectedType === 'Sportive') {
        echo ('btn-danger');
    } else {
        echo ('btn-success');
    }
    ?> m-1">Sportive</a>
        </li>
        <li><a href="http://localhost/bossutAnthonyPOO/index.php/moto/Roadster" class="btn <?php
    if (isset($selectedType) && $selectedType === 'Roadster') {
        echo ('btn-danger');
    } else {
        echo ('btn-success');
    }
    ?> m-1">Roadster</a>
        </li>
    </ul>        
    </div>
</nav>