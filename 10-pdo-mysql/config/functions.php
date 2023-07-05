<?php

/**
 * Permet de se connecter à la BDD
 */
function db(): PDO {
    $db = new PDO('mysql:host=localhost;dbname=movies', 'root', '');

    return $db;
}
