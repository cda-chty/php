<?php

namespace App;

class DB
{
    private static ?\PDO $pdo = null;

    /**
     * Permet d'établir une connexion à la BDD
    */
    private static function getInstance(): \PDO
    {
        if (!self::$pdo) { // On fait la connexion une SEULE fois
            self::$pdo = new \PDO('mysql:host=localhost;dbname=movies', 'root', '');
        }

        return self::$pdo;
    }

    /**
     * Permet de faire un select dans la BDD.
     */
    public static function select(string $sql, array $parameters = []): array
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    /**
     * Permet de faire un select (seul) dans la BDD.
     */
    public static function selectOne(string $sql, array $parameters = []): array|bool
    {
        $query = self::getInstance()->prepare($sql);
        $query->execute($parameters);

        return $query->fetch();
    }

    /**
     * Permet de faire un insert dans la BDD.
     */
    public static function insert(string $sql, array $parameters = []): bool
    {
        $query = self::getInstance()->prepare($sql);

        return $query->execute($parameters);
    }
}
