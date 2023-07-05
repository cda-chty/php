<?php

/**
 * Script qui permet d'importer un CSV dans une base de données
 */

// Ouvrir le fichier en lecture
$file = fopen('exports/categories.csv', 'r');

$categories = [];
$count = 0;

// On va parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    if ($count++ === 0) {
        continue; // On passe la première ligne du CSV
    }

    $categories[] = [
        'name' => $line[1],
    ];
}

// Connexion à la BDD pour importer les catégories
require 'config/functions.php';

// Clean de la table avant l'import
db()->query('
    SET FOREIGN_KEY_CHECKS = 0;
    TRUNCATE category;
    SET FOREIGN_KEY_CHECKS = 1;
');

foreach ($categories as $category) {
    $query = db()->prepare('INSERT INTO category (name) VALUES (:name)');
    $query->execute($category); // ->execute(['name' => 'Action']);
}
