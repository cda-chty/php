<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices boucles</title>
</head>
<body>
    <h2>1. Ecrire une boucle qui affiche les nombres de 10 à 1</h2>

    <?php for ($i = 10; $i >= 1; $i--) { ?>
        <span><?= $i; ?> /</span>
    <?php } ?>

    <h2>2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>

    <?php for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            echo "$i ";
        }
    } ?>

    <h2>3. Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>

    <?php
        $a = rand(1, 100); // 96
        $b = rand(1, 100); // 36

        echo "Le PGCD de $a et $b est ";

        while ($a != $b) {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }

        echo $a;
    ?>

    <h2>4. Coder le jeu du FizzBuzz ⭐</h2>

    <?php for ($i = 1; $i <= 100; $i++) {
        if ($i % 15 === 0) {
            echo 'FizzBuzz - ';
        } else if ($i % 3 === 0) {
            echo 'Fizz - ';
        } else if ($i % 5 === 0) {
            echo 'Buzz - ';
        } else {
            echo "$i - ";
        }
    } ?>
</body>
</html>
