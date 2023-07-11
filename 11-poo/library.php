<?php

require 'vendor/autoload.php';

use App\Library\Book;

$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothéque</title>
</head>
<body>
    <?php
        $b = new Book('Harry Potter à l\'école des sorciers', 250);
    ?>

    <p>On est sur la page <?= $b->page(); ?></p>
    <p>On tourne la page 1 fois</p>
    <?php $b->nextPage(); ?>
    <p>On est sur la page <?= $b->page(); ?></p>
    <p>On ferme le livre</p>
    <?php $b->close(); ?>
    <p>On est sur la page <?= $b->page(); ?></p>
    <h1>Le titre du livre est : <?= $b->getName(); ?></h1>
    <p>Il y a <?= $b->countPages(); ?> pages.</p>

    <p>On tourne la page 900 fois</p>
    <?php for ($i = 0; $i < 300; $i++) {
        $b->nextPage()->nextPage()->nextPage();
    } ?>
    <p>On est sur la page <?= $b->page(); ?></p>
</body>
</html>
