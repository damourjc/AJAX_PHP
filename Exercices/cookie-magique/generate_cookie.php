<?php

// Tableau des cookies possibles
$cookies = [
    "Chocolat",
    "Vanille",
    "Fraise",
    "Caramel",
    "Pistache"
];

// Tableau des raretés
$raretes = [
    "Common",
    "Rare",
    "Epic",
    "Legendary"
];

// Choix aléatoire
$cookie = $cookies[array_rand($cookies)];
$rarete = $raretes[array_rand($raretes)];

// Points aléatoires
$points = rand(10, 500);

// Création du tableau final
$resultat = [
    "cookie" => $cookie,
    "rarete" => $rarete,
    "points" => $points
];

// Dire que la réponse est du JSON
header('Content-Type: application/json');

// Transformer le tableau PHP en JSON
echo json_encode($resultat);

?>