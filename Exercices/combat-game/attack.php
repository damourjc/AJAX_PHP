<?php

session_start();

// Vie actuelle
$monsterHP = $_SESSION["monsterHP"];

// Dégâts aléatoires
$damage = rand(5, 20);

// Message spécial
$message = "";

// Chance de critique
$criticalChance = rand(1, 100);

if($criticalChance <= 20){

    $damage *= 2;

    $message = "💥 Coup critique !";
}

// Chance d'esquive
$dodgeChance = rand(1, 100);

if($dodgeChance <= 10){

    $damage = 0;

    $message = "😎 Le monstre esquive !";
}

// Retirer les dégâts
$monsterHP -= $damage;

// Empêcher valeurs négatives
if($monsterHP < 0){

    $monsterHP = 0;
}

// Sauvegarder nouveaux PV
$_SESSION["monsterHP"] = $monsterHP;

// Vérifier victoire
$victory = false;

if($monsterHP <= 0){

    $victory = true;

    $message = "🏆 Victoire ! Le monstre est vaincu.";
}

// Tableau résultat
$resultat = [

    "damage" => $damage,
    "monsterHP" => $monsterHP,
    "message" => $message,
    "victory" => $victory

];

// JSON
header('Content-Type: application/json');

echo json_encode($resultat);

?>