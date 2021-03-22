<?php

include "Pokemon.php";
include "ElectricPokemon.php";
include "WaterPokemon.php";

$pika = new ElectricPokemon("Pika");
$pika
    ->setType("electric")
    ->setHp(75);

$schiggy = new WaterPokemon("Schiggy");
$pika->setType("water");

$schiggy->flee();

$pika->attack($schiggy);

// var_dump($pika);
// var_dump($schiggy);