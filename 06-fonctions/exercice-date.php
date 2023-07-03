<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <?php
        /**
         * Permet de traduire un jour / mois anglais en français.
         */
        function translate(string $value): string {
            $months = [
                'Monday' => 'Lundi',
                'Tuesday' => 'Mardi',
                'Wednesday' => 'Mercredi',
                'Thursday' => 'Jeudi',
                'Friday' => 'Vendredi',
                'Saturday' => 'Samedi',
                'Sunday' => 'Dimanche',
                'January' => 'Janvier',
                'February' => 'Février',
                'March' => 'Mars',
                'April' => 'Avril',
                'May' => 'Mai',
                'June' => 'Juin',
                'July' => 'Juillet',
                'August' => 'Août',
                'September' => 'Septembre',
                'October' => 'Octobre',
                'November' => 'Novembre',
                'December' => 'Décembre',
            ];

            // arrays_keys($months) => ['January', 'February']
            // $months => ['Janvier', 'Février']
            return str_replace(array_keys($months), $months, $value);
        }
    ?>

    <p>Exo 1 : <?= translate(date('l d F Y')).', il est '.date('H\hi \e\t s').' secondes'; ?></p>
    <p>Exo 2 : <?= translate(date('l', strtotime('+ 10 days'))); ?></p>
    <?php
        $christmas = strtotime('25 december'); // 1703000000
        $now = time(); // 1670000000
        $days = ($christmas - $now) / (60 * 60 * 24);
    ?>
    <p>Exo 3 : Noël est dans <?= ceil($days); ?> jours</p>
</body>
</html>
