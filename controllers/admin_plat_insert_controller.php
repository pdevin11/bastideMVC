<?php session_start(); 

if(!isset($_SESSION['identifiant'])){
    header('location:index.php?page=admin_connexion');
}

include_once '_classes/Carte.php';
include_once '_classes/Admin.php';

/* Ajout d'un plat */

if(isset($_POST['ajouter'])){
    if(empty($_POST['plat_name'])){
        $plat_nameError = 'Vous devez saisir un nom pour le plat';
    }else{
        $name = str_secur($_POST['plat_name']);
    }

    if(empty($_POST['translation'])){
        $translationError = 'Vous devez saisir une traduction pour le nom du plat';
    }else{
        $translation = str_secur($_POST['translation']);
    }

    if(empty($_POST['plat_type'])){
        $plat_typeError = 'Vous devez indiquer le type de plat';
    }else{
        $type = str_secur($_POST['plat_type']);
    }

    if(empty($_POST['plat_price'])){
        $plat_priceError = 'Vous devez indiquer le prix du plat';
    }else{
        $price = str_secur($_POST['plat_price']);
    }

    if(!empty($_POST['bigSize_price'])){
        $bigSize = str_secur($_POST['bigSize_price']);
    }

    if(isset($name, $translation, $type, $price, $bigSize)){
        Admin::addPlat($name, $translation, $type, $price, $bigSize);
        header('location:index.php?page=admin_menu');
    } else if (isset($name, $translation, $type, $price) && empty($bigSize)){
        Admin::addPlat($name, $translation, $type, $price, NULL);
        header('location:index.php?page=admin_menu');
    }
}