<?php session_start(); 

if(!isset($_SESSION['identifiant'])){
    header('location:index.php?page=admin_connexion');
}

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Ajout d'un plat dans un menu */

$idMenu = str_secur($_GET['id_menu']);

$menu = Menus::getMenu($idMenu);

if(isset($_POST['ajouter'])){
    if(empty($_POST['plat_name'])){
        $plat_nameError = 'Vous devez saisir un nom pour le plat';
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
        Admin::addPlatToMenu($name, $translation, $type, $menu['menu_name'], $idMenu);
        header('location:index.php?page=admin_menu_update&id='.$idMenu);
    } else {
        echo 'Erreur';
    }
}