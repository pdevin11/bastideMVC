<?php

include_once '_classes/Menus.php';
include_once '_classes/Carte.php';

/* Affichage des Menus */

$menusOnline = Menus::getMenusOnline();
$menusPending = Menus::getAllMenus();

/* Affichage des plats à la carte */

$allCartePlats = Carte::getAllCartePlats();