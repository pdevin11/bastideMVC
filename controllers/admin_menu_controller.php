<?php

include_once '_classes/Menus.php';
include_once '_classes/Carte.php';

/* Affichage des Menus */

$menusOnline = Menus::getMenusOnline();
$menusPending = Menus::getAllMenus();

/* Affichage des plats à la carte */

$allCartePlats = Carte::getAllCartePlats();

/* Passer un menu hors ligne */

$idMenu = str_secur($_POST['idMenu']);

if(isset($_POST['offline'])){
    Admin::setMenuOffline($idMenu);
}

/* Passer un menu en ligne */