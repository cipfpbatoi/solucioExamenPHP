<?php

namespace Examen\Services;

use Examen\Exceptions\NoFoundException;
use Examen\Models\Product;
use PDO;
use PDOException;

class Database
{
    public static function connect():  PDO
    {
        $dbConfig =  require  $_SERVER['DOCUMENT_ROOT'] . '/../config/db.php';

        try {
            $dsn = "mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['dbname'];
            $db = new  PDO($dsn, $dbConfig['username'], $dbConfig['password']);
            $db->setAttribute( PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch  (PDOException $e) {
            die("Error de connexió: " . $e->getMessage());
        }

        return $db;

    }


    public static function getAll()
    {
        $db = self::connect();
        $sql = "SELECT * FROM productes";
        $sentence = $db->prepare($sql);
    
        $sentence -> execute();
        $sentence->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Product::class);
        return $sentence->fetchAll();

    }  
    
    public static function delete($id)
    {
        
        $conn = self::connect();
        $sql = "DELETE FROM productes WHERE id=:id";
        $sentence = $conn->prepare($sql);
        $sentence->bindValue(":id", $id);
        $lines = $sentence -> execute();
        if ($lines == 0) {
            throw new NoFoundException("No se ha podido eliminar el registro");
        }
    }

    public static function store($request)
    {
        $conn = self::connect();
        $sql = "INSERT INTO productes (nom,preu) VALUES (:nom,:preu)";
        $sentence = $conn->prepare($sql);
        foreach ($request as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }
        
        $sentence -> execute();
        return $conn-> lastInsertId();
    }

    public static function find($id)
    {
        $db = self::connect();
        $sql = "SELECT * FROM productes WHERE id = :id";
        $sentence = $db->prepare($sql);
        $sentence->bindValue(":id", $id);
        $sentence -> execute();
        $sentence->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Product::class);
        
        return $sentence->fetch();
        
    }

    public static function update($id, $request)
    {
        $conn = self::connect();
        $sql = "UPDATE productes SET nom=:nom,preu=:preu WHERE id=:id";
        
        $sentence = $conn->prepare($sql);
        foreach ($request as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }
        
        $sentence -> execute();
        return $id;
    }

}
