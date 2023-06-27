<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>
<body>
    <?php
        $firstname = 'Fiorella';
    ?>

    <h1>Bonjour <?= $firstname; ?></h1>
    <h2><?= "Bonjour $firstname"; ?></h2>
    <h3><?= 'Bonjour '.$firstname; ?></h3>
</body>
</html>
