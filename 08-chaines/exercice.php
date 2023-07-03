<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaines</title>
</head>
<body>
    <?php
        function acronym(string $words): string {
            // Expert avancé une seule ligne
            // return implode('', array_map(fn ($word) => $word[0] ?? '', explode(' ', $words)));

            // Transformer la chaine en tableau
            $words = explode(' ', $words);
            $acronym = '';

            foreach ($words as $word) {
                $acronym .= $word[0] ?? '';
            }

            return strtoupper($acronym);
        }

        $words = $_POST['words'] ?? '';
        echo acronym($words);

        function conjugate(string $verb): string {
            $radical = substr($verb, 0, -2); // cherch

            $subjects = [
                'Je' => 'e',
                'Tu' => 'es',
                'Il / Elle / On' => 'e',
                'Nous' => 'ons',
                'Vous' => 'ez',
                'Ils' => 'ent',
            ];

            $result = [];

            foreach ($subjects as $subject => $ending) {
                $result[] = "$subject $radical$ending"; // Nous cherchons
            }

            return implode('<br>', $result);
        }

        $verb = $_POST['verb'] ?? '';
        echo conjugate($verb);
    ?>

    <form method="post" action="">
        <input type="text" name="words" value="<?= $words; ?>">

        <button>Acronymiser</button>
    </form>

    <form method="post" action="">
        <input type="text" name="verb" value="<?= $verb; ?>">

        <button>Conjuguer</button>
    </form>
</body>
</html>
