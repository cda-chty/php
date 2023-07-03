<?php

/**
 * Fonctions sur les chaînes
 */

// On peut extraire des chaines
$email = 'fiorella@boxydev.com';
$domain = strstr($email, '@'); // @boxydev.com
$domain = substr($domain, 1); // boxydev.com
$username = strstr($email, '@', true); // fiorella

echo "Le domaine est $domain et l'utilisateur est $username. <br>";

// Vérifier qu'une chaine contient un truc
if (str_contains($email, 'boxydev')) {
    echo "L'email $email contient boxydev <br>";
}

// On peut remplacer des termes dans une chaine
echo 'Email anonyme :';
echo str_replace('fiorella', '********', $email).'<br>';

// En PHP, une chaine est un tableau si on la transforme avec str_split
foreach (str_split($username) as $letter) {
    echo "$letter - ";
}
echo '<br>';

echo $username[2].'<br>'; // o

// substr (fiorella@boxydev.com)
echo substr($email, 0, 8).'<br>'; // fiorella
echo substr($email, 9, -4).'<br>'; // boxydev
echo substr($email, -3).'<br>'; // com

// Transformer des chaines en tableau
$countries = 'Italie, France, Portugal';
$countries = explode(', ', $countries);
var_dump($countries);

echo '<br>';
echo implode('; ', $countries).'<br>';

// Quelques fonctions pour les formulaire
$password = 'azerty123    ';
$password = trim($password); // 'azerty123    ' => 'azerty123'
var_dump($password);

echo "Le mot de passe $password fait ".strlen($password).' caractères <br>';

// Exemple de faille XSS
$message = $_GET['message'] ?? null;

// On désactive l'interprétation du HTML
$message = htmlspecialchars($message ?? '');
// strip_tags($message); // Supprime les balises

echo $message;
