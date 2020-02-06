<?php

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Ajout d'un menu */

if(isset($_POST['ajouter'])){
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
        Admin::addMenu($name, $price);
        header('location:index.php?page=admin_menu');
        // /* Faire une redirection sur la page d'edition du menu pour ajouter les plats */
    }
}


