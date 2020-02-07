<?php

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Modification d'un plat du menu */

$idMenu = str_secur($_GET['id_menu']);
$idPlat = str_secur($_GET['id_plat']);

$menu = Menus::getMenu($idMenu);
$dish = Menus::getDish($idPlat);

if(isset($_POST['modifier'])){
    if(empty($_POST['plat_name'])){
        $plat_nameError = "Vous devez saisir un nom pour le plat";
    }else{
        $name = str_secur($_POST['plat_name']);
    }

    if(empty($_POST['translation'])){
        $translationError = 'Vous devez saisir une traduction pour le plat';
    }else{
        $translation = str_secur($_POST['translation']);
    }

    if(empty($_POST['plat_type'])){
        $plat_typeError = 'Vous devez selectionner un type de plat';
    }else{
        $type = str_secur($_POST['plat_type']);
    }

    if(isset($name, $translation, $type)){
        Admin::updatePlatToMenu($name, $translation, $type, $idPlat);
        header('location:index.php?page=admin_menu_update&id='.$idMenu);
    } else {
        echo 'Erreur';
    }
}