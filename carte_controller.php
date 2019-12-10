<?php

include_once '_classes/Menus.php';

$allMenus = Menus::getAllMenus();
$menuDetails = Menus::getMenuDetails();
$entrees = Menus::getEntrees($id);
$plats = Menus::getPlats($id);
$desserts = Menus::getDesserts($id); 
