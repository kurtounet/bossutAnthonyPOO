<?php

namespace Src\Manager;


use Src\Entity\Moto;
use PDO;
use Exception;

class MotoManager extends DatabaseManager
{


    public function findAll()
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos ORDER BY id DESC");
        $query->execute();
        $results = $query->fetchAll();
        $motos = [];
        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }

        return $motos;
    }

    public function findById($id)
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE id = :id");
        $query->execute([':id' => $id]);
        $result = $query->fetch();

        if ($result != false) {
            return Moto::fromArray($result);
        } else {
            return false;
        }


    }
    public function findByType($Type)
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE type = :type");
        $query->execute([':type' => $Type]);
        $results = $query->fetchAll();
        $motos = [];

        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }

        if ($results != false) {
            return $motos;
        } else {
            return false;
        }

    }
    public function add(Moto $moto)
    {
        $query = $this->getConnection()->prepare(
            "INSERT INTO motos (brand, model, type, price, image) 
            VALUES (:brand, :model, :type, :price, :image)"
        );
        $query->execute([
            ':brand' => $moto->getBrand(),
            ':model' => $moto->getModel(),
            ':type' => $moto->getType(),
            ':price' => $moto->getPrice(),
            ':image' => $moto->getImage()
        ]);
    }

    public function edit(Moto $moto)
    {
        $query = $this->getConnection()->prepare(
            "UPDATE motos 
            SET brand = :brand, model = :model, type = :type, price = :price, image = :image 
            WHERE id = :id"
        );
        $query->execute([
            ':brand' => $moto->getBrand(),
            ':model' => $moto->getModel(),
            ':type' => $moto->getType(),
            ':price' => $moto->getPrice(),
            ':image' => $moto->getImage(),
            ':id' => $moto->getId()
        ]);
    }

    public function delete($id)
    {

        try {
            $query = $this->getConnection()->prepare("DELETE FROM motos WHERE id=:id");
            $query->execute([
                ":id" => $id
            ]);
        } catch (Exception $e) {
            echo ("Error during the connection to DataBase: " . $e->getMessage());
            exit;
        }
    }
}
