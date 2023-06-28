<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php $table = 5; ?>

    <div class="main">
        <h2>Table de <?= $table; ?></h2>
        <?php for ($multiple = 0; $multiple <= 10; $multiple++) { ?>
            <p><?= "$table x $multiple = ".($table * $multiple); ?></p>
        <?php } ?>
    </div>

    <?php $class = 'test'; ?>
    <div class="flex <?= $class; ?>">
        <?php for ($table = 1; $table <= 10; $table++) { ?>
        <div class="w-20 main">
            <h2>Table de <?= $table; ?></h2>
            <?php for ($multiple = 0; $multiple <= 10; $multiple++) { ?>
                <p><?= "$table x $multiple = ".($table * $multiple); ?></p>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</body>
</html>
