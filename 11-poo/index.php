<?php

require 'vendor/autoload.php';

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
</body>
</html>
