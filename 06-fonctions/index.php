<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>
    <?php
        // Inclus le contenu du fichier functions.php
        require 'functions.php';
    ?>

    <h1><?= hello('Fiorella'); ?></h1>
    <h1><?= hello('Marina', 'en'); ?></h1>
    <h1><?= hello('Toto', 'IT'); ?></h1>
    <!-- mb_ pour les accents devant certaines fonctions -->
    <h1><?= mb_strtoupper(hello('Totô', 'es')); ?></h1>

    <p>1 + 2 = <?= addition(1, 2); ?></p>
    <p>1 + 2 + 3 + 4 = <?= addition(1, 2) + addition(3, 4); ?></p>
    <p>1 + 2 + 3 + 4 + 5 + 6 = <?= addition(1, 2, 3, 4, 5, 6); ?></p>

    <p><?= $lambda('fiofio'); ?></p>

    <h2>Les dates</h2>
    <p>Timestamp: <?= time(); ?></p>
    <p>Date du jour: <?= date('d/m/Y H:i'); ?></p>
    <p>Timestamp précis: <?= strtotime('18 november 1991'); ?></p>
    <p>Date précise: <?= date('l d/m', strtotime('+ 2 days')); ?></p>
</body>
</html>
