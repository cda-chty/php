<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <?php
        // On va récupèrer les variables
        $number1 = $_GET['number1'] ?? null;
        $number2 = $_GET['number2'] ?? null;
        $operator = $_GET['operator'] ?? '+';

        if ($number1 !== null && $number2 !== null) {
            if ($operator === '/') {
                $result = $number1 / $number2;
            } else if ($operator === '-') {
                $result = $number1 - $number2;
            } else if ($operator === 'x') {
                $result = $number1 * $number2;
            } else {
                $result = $number1 + $number2;
            }
        }
    ?>

    <div class="container">
        <h1>Calculator</h1>

        <?php if ($number1 !== null && $number2 !== null) { ?>
            <h2><?= "$number1 $operator $number2 = $result"; ?></h2>
        <?php } ?>

        <form action="" method="get">
            <div class="section">
                <label for="number1">Nombre 1</label>
                <input type="text" name="number1" id="number1" value="<?= $number1; ?>">
            </div>

            <div class="section">
                <label for="number2">Nombre 2</label>
                <input type="text" name="number2" id="number2" value="<?= $number2; ?>">
            </div>

            <div class="section">
                <label>Opérateur</label>
                <input type="radio" name="operator" id="operator-1" value="+">
                <label for="operator-1">Addition</label>
                <input type="radio" name="operator" id="operator-2" value="-">
                <label for="operator-2">Soustraction</label>
                <input type="radio" name="operator" id="operator-3" value="x">
                <label for="operator-3">Multiplication</label>
                <input type="radio" name="operator" id="operator-4" value="/">
                <label for="operator-4">Division</label>
            </div>

            <button>Calculer</button>
        </form>
    </div>
</body>
</html>
