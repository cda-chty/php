<?php

/**
 * Renvoie le nom de la page actuelle.
 */
function pageName() {
    $uri = $_SERVER['REQUEST_URI']; // /php/09-includes/contact.php
    $name = strrchr($uri, '/'); // /contact.php
    $name = substr($name, 1, -4); // contact

    return $name;
}

/**
 * Permet de valider un email.
 */
function validEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Permet de valider des valeurs dans un tableau.
 * ['html', 'toto'] => Pas valide
 * ['html', 'php'] => Valide
 */
function validArray(array $data, array $valid): bool {
    foreach ($data as $item) {
        if (!in_array($item, $valid)) {
            return false;
        } 
    }

    return true;
}

/**
 * Permet d'afficher checked si une valeur est dans un tableau.
 */
function checked(string $value, array $array): string {
    return in_array($value, $array) ? 'checked' : '';
}
