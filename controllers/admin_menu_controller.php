<?php

include_once '_classes/Menus.php';
include_once '_classes/Carte.php';
include_once '_classes/Admin.php';

/* Menus */

$allMenus = Menus::getAllMenus();
$allCartePlats = Carte::getAllCartePlats();