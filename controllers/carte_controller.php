<?php

include_once '_classes/Menus.php';
include_once '_classes/Carte.php';

/* Menus */

$allMenus = Menus::getMenusOnline();

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

$carteEntrees = Carte::getCarteDish('Entrée');
$carteSalades = Carte::getCarteDish('Salade');
$cartePlats = Carte::getCarteDish('Plat');
$carteFromages = Carte::getCarteDish('Fromage');
$carteDesserts = Carte::getCarteDish('Dessert');

