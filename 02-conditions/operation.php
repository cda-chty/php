<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opération</title>
</head>
<body>
    <?php
        $numberA = 15;
        $numberB = 5;
        $numberC = 8;

        $result1 = $numberA + $numberB + $numberC;
        $result2 = $numberA * ($numberC - $numberB);
        $result3 = round(($numberC + $numberB) / $numberA, 2);
    ?>

    <p><?php echo $numberA.' + '.$numberB.' + '.$numberC.' = '.($numberA + $numberB + $numberC); ?></p>
    <?php echo "<p>$numberA x ($numberC - $numberB) = $result2</p>"; ?>
    <p><?= "($numberC + $numberB) / $numberA = $result3"; ?></p>

    <?php if ($result1 < 20 || $result2 < 20 || $result3 < 20) { ?>
        <p>Une des opérations renvoie moins de 20</p>
    <?php } ?>
</body>
</html>
