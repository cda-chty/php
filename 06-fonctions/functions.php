<?php

/**
 * Ability to say hello to people. 
 */
function hello(string $name, string $lang = 'fr'): string {
    $subjects = [
        'en' => 'Hello',
        'fr' => 'Bonjour',
        'it' => 'Buongiorno',
    ];

    $lang = strtolower($lang);
    $subject = $subjects[$lang] ?? $subjects['fr'];

    return "$subject $name";
}

/**
 * Ability to sum many numbers.
 * ... => Rest operator
 */
function addition(int $n1, int $n2, int ...$ns): int {
    return $n1 + $n2 + array_sum($ns);
}

// Parenthèse sur les fonctions anonymes (pas important mais intéressant)...
$names = ['Fiorella', 'Marina'];

$names = array_map(function ($name) {
    return strtoupper($name);
}, $names);

// Arrow function en PHP
$names = array_map(fn ($name) => strtoupper($name), $names);

// On peut "ranger" une fonction anonyme dans une variable
$lambda = fn ($n) => strtoupper($n);
$names = array_map($lambda, $names);

var_dump($names);

/* @todo A vérifier côté Java
list.forEach(System.out::println);

list.forEach((element) => System.out.println(element));

list.forEach(function (element) {
    System.out.println(element);
});
*/
