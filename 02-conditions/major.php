<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majeur condition</title>
</head>
<body>
<?php
    $age = 16;

    if ($age >= 18) { ?>
        <p>Vous pouvez entrer (<?= $age; ?> ans) 🕺</p>
    <?php } else if ($age >= 16) { ?>
        <p>Vous êtes presque majeur (dans <?= 18 - $age; ?> an(s)) 👑</p>
    <?php } else if ($age >= 14) { ?>
        <p>Vous êtes jeune 🐥</p>
    <?php } else { ?>
        <p>Interdit ou vous êtes trop jeune 👶</p>
    <?php } ?>
</body>
</html>
