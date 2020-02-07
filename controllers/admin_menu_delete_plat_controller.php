<?php

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Suppression d'un plat du menu */

$idMenu = str_secur($_GET['id_menu']);
$idPlat = str_secur($_GET['id_plat']);

$menu = Menus::getMenu($idMenu);
$dish = Menus::getDish($idPlat);

if(isset($_POST['supprimer'])){
    Admin::deletePlatToMenu($idPlat);
    header('location:index.php?page=admin_menu_update&id='.$idMenu);
}

