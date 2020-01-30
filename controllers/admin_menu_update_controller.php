<?php

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Modification d'un menu */

$id = str_secur($_GET['id']);

$menu = Menus::getMenu($id);

if(isset($_POST['modifier'])){
    if(empty($_POST['menu_name'])){
        $menu_nameError = 'Vous devez saisir un nom pour le menu';
    }else{
        $name = str_secur($_POST['menu_name']);
    }

    if(empty($_POST['menu_price'])){
        $menu_priceError = 'Vous devez saisir un prix pour le menu';
    }else{
        $price = str_secur($_POST['menu_price']);
    }

    if(isset($name) && isset($price)){
        Admin::updateMenu($name, $price, $id);
        header('location:index.php?page=admin_menu');
    }
}