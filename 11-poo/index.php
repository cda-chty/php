<?php

require 'vendor/autoload.php';

use App\Car;
use App\Cat;

$bianca = new Cat('Bianca');
$bianca->setFur('noir')->setFur('blanc');
$mina = new Cat('Mina');
$mina->setFur('noir');

dump($bianca, $mina);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <h1>Mon premier chat s'appelle <?= $bianca->getName(); ?></h1>
    <p>Et <?= $bianca->cry(); ?></p>
    <p>
        L'autre chat est <?= $mina->getName(); ?>.
        Et <?= $mina->cry(); ?>
    </p>

    <p><?= $bianca->playWith($mina); ?></p>

    <h2>Exercice classe Car</h2>
    <?php

        $alfa = new Car('Alfa', 'Rodéo', 'Gris');
        $bmw = new Car('BM', 'Double Pied', 'Noir');

        // On repeint la voiture (setter...)
        $alfa->repaint('Rouge');

        dump($alfa, $bmw);

    ?>

    <p>La voiture 1 est <?= $alfa->getColor(); ?>, c'est un(e) <?= $alfa->name(); ?></p>
    <p>La voiture 2 est <?= $bmw->getColor(); ?>, c'est un(e) <?= $bmw->name(); ?></p>

    <p><?= $alfa->drive(); ?> et <?= $alfa->klaxon(); ?></p>
    <p><?= $bmw->drive(); ?> et <?= $bmw->klaxon(); ?></p>

    <?php
        while ($bmw->hasFuel()) {
            echo $bmw->drive();
        }

        echo 'PLUS D\'ESSENCE';
        echo $bmw->drive();

        dump($alfa, $bmw);

        $bmw->fill(10)->fill(5);

        $bmw->fillUp();

        dump($bmw);
    ?>
</body>
</html>
