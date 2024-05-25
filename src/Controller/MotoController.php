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

        if ($motos === false) {
            $error = "Aucune moto n'a été trouvée";
            include (__DIR__ . "/../../Template/moto/errors.php");
        } else {

            include (__DIR__ . "/../../Template/moto/index.php");
        }


    }

    // Route: /moto/$id
    public function getById($id)
    {
        $moto = $this->motoManager->findById($id);
        if ($moto === false) {
            $error = "Aucune moto n'a été trouvée";
            include (__DIR__ . "/../../Template/moto/errors.php");
        } else {
            include (__DIR__ . "/../../Template/moto/detail.php");
        }

    }

    // Route: /moto/$type
    public function getByType($type)
    {
        $motos = $this->motoManager->findByType($type);
        if ($motos === false) {
            $error = "Aucune moto n'a été trouvée";
            include (__DIR__ . "/../../Template/moto/errors.php");
        } else {
            $selectedType = $type;
            include (__DIR__ . "/../../Template/moto/index.php");
        }

    }
    private function uploadFile()
    {
        //On vérifie que le fichier est bien envoyé
        if (isset($_FILES['avatar']) and $_FILES['avatar']['error'] == 0) {

            // Etape 2 : on vérifie que la taille du fichier n'est pas sup a 1Mo
            if ($_FILES['avatar']['size'] <= 1000000) {

                //Etape 3 : on vérifie que l'extension est autorisée
                $extension = $_FILES['avatar']['type'];
                $extensions_autorisees = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');

                //Si l'extension est dans le tableau des extension autorisée            
                if (in_array($extension, $extensions_autorisees)) {
                    //on upload le fichier dans le dossier assets/uploads 

                    move_uploaded_file($_FILES['avatar']['tmp_name'], 'C:\laragon\www\bossutAnthonyPOO\assets\uploads\\' . basename($_FILES['avatar']['name']));
                    echo "L'envoi a bien été effectué !";
                    //et on retourne l'url
                    return 'http://localhost/bossutAnthonyPOO/assets/uploads/' . basename($_FILES['avatar']['name']);
                } else {
                    echo ('J\'accepte que les images ...');
                }
            } else {
                echo ('le fichier est trop lourd pour un petit serveur ... ');
            }
        }
    }



    // Route: /moto/add/
    public function add()
    {
        $error = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //On verifie si $_FILES["avatar"]["name"] existe (fichier sélectionné) et 
            //si la variable name n'est pas vide
            if (isset($_FILES["avatar"]["name"]) && !empty($_FILES["avatar"]["name"])) {
                //Si c'est le cas, on appel la fonction uploadFile, qui télécharge le fichier et 
                // returne l'url de l'image, puis on affecte cette url a $_POST["imageUrl"]
                $_POST["image"] = $this->uploadFile();
            }
            if (
                isset(

                $_POST['brand'],
                $_POST['model'],
                $_POST['type'],
                $_POST['price'],
                $_POST['image']
            )
                && !empty(trim($_POST['brand']))
                && !empty(trim($_POST['model'])) && !empty(trim($_POST['type']))
                && !empty(trim($_POST['price'])) && !empty(trim($_POST['image']))
            ) {

                $moto = new Moto(0, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                $this->motoManager->add($moto);

                header('Location: http://localhost/bossutAnthonyPOO/index.php/moto');
            } else {

                $error[] = 'Tous les champs doivent etre remplis et de type Enduro, Custom, Sportive, Roadster';
                include (__DIR__ . "/../../Template/moto/add.php");

            }
        } else {

            include (__DIR__ . "/../../Template/moto/add.php");
        }
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        $error = [];
        $moto = $this->motoManager->findById($id);
        if ($moto instanceof Moto) {
            if ($_SERVER['REQUEST_METHOD'] === "POST") {

                //On verifie si $_FILES["avatar"]["name"] existe (fichier sélectionné) et 
                //si la variable name n'est pas vide
                if (isset($_FILES["avatar"]["name"]) && !empty($_FILES["avatar"]["name"])) {
                    //Si c'est le cas, on appel la fonction uploadFile, qui télécharge le fichier et 
                    // returne l'url de l'image, puis on affecte cette url a $_POST["imageUrl"]
                    $_POST["image"] = $this->uploadFile();
                }

                if (
                    isset(
                    $_POST['id'],
                    $_POST['brand'],
                    $_POST['model'],
                    $_POST['type'],
                    $_POST['price'],
                    $_POST['image']
                )
                    && !empty(trim($_POST['id'])) && !empty(trim($_POST['brand']))
                    && !empty(trim($_POST['model'])) && !empty(trim($_POST['type']))
                    && !empty(trim($_POST['image']))
                ) {

                    $moto = new Moto($_POST['id'], $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
                    $this->motoManager->edit($moto);
                    header('Location: http://localhost/bossutAnthonyPOO/index.php/moto');
                } else {

                    $error[] = 'Tous les champs doivent etre remplis et de type Enduro, Custom, Sportive, Roadster';
                    include (__DIR__ . "/../../Template/moto/edit.php");
                }


            } else {

                include (__DIR__ . "/../../Template/moto/edit.php");
            }
        } else {

            $error = "Aucune moto n'a été trouvée";
            include (__DIR__ . "/../../Template/moto/errors.php");
        }
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        $moto = $this->motoManager->findById($id);
        if ($moto instanceof Moto) {
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                $this->motoManager->delete($id);
                header("Location: http://localhost/bossutAnthonyPOO/index.php/moto/");
            } else {

                header("Location: http://localhost/bossutAnthonyPOO/index.php/moto/");
            }
        } else {
            $error = "Aucune moto n'a été trouvée";
            include (__DIR__ . "/../../Template/moto/errors.php");
        }

    }
}
