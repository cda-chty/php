<?php

require 'vendor/autoload.php';

use App\Library\Book;
use App\Library\Library;

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

    <?php
        $l = new Library();
        $l->addBook($b); // Ajoute le livre b dans un tableau
        $l->addBooks([ // Ajoute les livres suivant dans un tableau
            new Book('Chambre des secrets', 300),
            new Book('Prisonnier d\'Azkaban', 400),
            new Book('Coupe de feu', 500),
        ]);
    ?>

    <h2>Ma bibliothèque (<?= $l->count() ?> livres)</h2>

    <ul>
        <?php foreach ($l->books() as $book) { ?>
            <li><?= $book->getName(); ?></li>
        <?php } ?>
    </ul>

    <p>On a un total de <?= $l->totalPages() ?> pages dans notre bibliothèque.</p>

    <h3>On prend le livre Coupe de feu</h3>
    <?php $b = $l->getBook('coupe de feu'); ?>

    <?php if ($b) { ?>
        <h1>Le titre du livre est : <?= $b->getName(); ?></h1>
        <p>Il y a <?= $b->countPages(); ?> pages.</p>
    <?php } ?>

    <?php
        dump($l->findBooksByLetter('C')); // Trouve tous les livres qui commencent par cette lettre (array_filter ?)
        dump($l->randomBook()); // Sélectionne un livre aléatoire
    ?>
</body>
</html>
