<?php

/* Menus */

$allMenus = Menus::getAllMenus();

$entrees = $plats = $desserts = [];

for($i=0; $i<count($allMenus); $i++){
    $allEntrees = Menus::getEntrees($allMenus[$i]['id']);
    $allPlats = Menus::getPlats($allMenus[$i]['id']);
    $allDesserts = Menus::getDesserts($allMenus[$i]['id']);
    array_push($entrees, $allEntrees);
    array_push($plats, $allPlats);
    array_push($desserts, $allDesserts);
}

/* A la carte */

$carteEntrees = Carte::getCarteEntrees();
$carteSalades = Carte::getCarteSalades();
$cartePlats = Carte::getCartePlats();
$carteFromages = Carte::getCarteFromages();
$carteDesserts = Carte::getCarteDesserts();