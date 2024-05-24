<?php

namespace Src\Controller;

use Src\Manager\MotoManager;
use Src\Entity\Moto;



class MotoController
{


    private $motoManager;

    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }

    // Route: /moto
    public function getAll()
    {
        $motos = $this->motoManager->findAll();
        dump($motos);
        //Appel de template
        include(__DIR__ . "/../../Template/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        $moto = $this->motoManager->findById($id);
        include(__DIR__ . "/../../Template/moto/detailmoto.php");
        echo "ROUTE: /moto/$id   (getById)";
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        // La requete fonctionne que pour les types suivants
        if (in_array($type, ['Enduro', 'Custom', 'Sportive', 'Roadster'])) {
            $motos = $this->motoManager->findByType($type);
        } else {
            $motos = $this->motoManager->findAll();
        }

        include(__DIR__ . "/../../Template/moto/index.php");
    }

    // Route: /moto/add/
    public function add()
    {

        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //redirection index
        //Enduro,Custom, Sportive, Roadster)
        //Afficher formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (

                isset($_POST['brand'])
                && isset($_POST['model'])
                && in_array($_POST['type'], ['Enduro', 'Custom', 'Sportive', 'Roadster'])
                && isset($_POST['price'])
                && isset($_POST['image'])
            ) {
                $moto = new Moto(null, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                $this->motoManager->add($moto);
                header('Location: http://localhost/bossutAnthonyPOO/index.php/moto');
            }
        } else {
            $error = 'Tous les champs doivent etre remplis et de type Enduro, Custom, Sportive, Roadster';
            include(__DIR__ . "/../../Template/moto/addform.php");
        }
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (
                isset($_POST['id'])
                && isset($_POST['brand'])
                && isset($_POST['model'])
                && isset($_POST['type'])
                && isset($_POST['price'])
                &&  isset($_POST['image'])
            ) {

                $moto = new Moto($_POST['id'], $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                $this->motoManager->edit($moto);
                header('Location: http://localhost/bossutAnthonyPOO/index.php/moto');
            }
        } else {
            $moto = $this->motoManager->findById($id);
            $error = "Tous les champs doivent etre remplis";
            include(__DIR__ . "/../../Template/moto/editform.php");
        }
    }

    // Route: /pizza/delete/$id
    public function delete($id)
    {
        //echo "ROUTE: /moto/delete/$id   (delete)";
        $this->motoManager->delete($id);
        header('Location: http://localhost/bossutAnthonyPOO/index.php/moto');
        //include(__DIR__ . "/../../Template/moto/delete.php");
    }
}
