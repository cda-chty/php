<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le PHP</title>
</head>
<body>
    <?php
        // On peut afficher du texte en PHP
        echo 'Hello PHP';

        // Les variables
        $age = 2023 - 1994;
        $price = 2.99;
    ?>

    <h1><?php echo 'Hello PHP, tu as '.$age.' ans.'; ?></h1>
    <p><?= "La variable \$price contient $price €"; ?></p>
</body>
</html>
