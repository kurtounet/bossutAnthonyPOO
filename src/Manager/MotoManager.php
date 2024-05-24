<?php

namespace Src\Manager;


use Src\Entity\Moto;
use PDO;

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
    public function findByType($Type)
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE type = :type");
        $query->execute([':type' => $Type]);
        return $query->fetchAll();
    }
    public function findById($id)
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE id = :id");
        $query->execute([':id' => $id]);
        return $query->fetch();
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
        $query = $this->getConnection()->prepare("DELETE FROM motos WHERE id = :id");
        $query->execute([':id' => $id]);
    }
}
