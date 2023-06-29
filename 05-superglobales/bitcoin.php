<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin</title>
    <link rel="stylesheet" href="bitcoin.css">
</head>
<body>
    <?php
        // On va récupèrer les variables
        $amount = $_POST['amount'] ?? null;
        $currency = $_POST['currency'] ?? 'euro';

        isset($_POST['amount']); // => Vérifie que amount est dans le tableau
        empty($_POST); // => Vérifie si le tableau est vide (ou false ou 0 ou '')

        if (!empty($_POST)) {
            $rate = 27836.91;

            if ($currency === 'euro') {
                $from = 'euros';
                $to = 'bitcoins';
                $result = $amount / $rate;
            } else {
                $from = 'bitcoins';
                $to = 'euros';
                $result = $amount * $rate;
            }
        }
    ?>

    <div class="container">
        <h1>Bitcoin</h1>

        <?php if (isset($result)) { ?>
            <h2><?= "$amount $from"; ?> valent <?= "$result $to"; ?>.</h2>
        <?php } ?>

        <form action="" method="post">
            <div class="section">
                <label for="amount">Montant</label>
                <input type="text" name="amount" id="amount" value="<?= $amount; ?>">
            </div>

            <div class="section">
                <label for="currency">Devise</label>
                <select name="currency" id="currency">
                    <option <?= $currency === 'euro' ? 'selected' : ''; ?> value="euro">Euros vers bitcoins</option>
                    <option <?= $currency === 'btc' ? 'selected' : ''; ?> value="btc">Bitcoins vers euros</option>
                </select>
            </div>

            <button>Convertir</button>
        </form>
    </div>
</body>
</html>
