<?php session_start(); 

if(!isset($_SESSION['identifiant'])){
    header('location:index.php?page=admin_connexion');
}

include_once '_classes/Menus.php';
include_once '_classes/Admin.php';

/* Suppression d'un menu */

$id = str_secur($_GET['id']);

$menu = Menus::getMenu($id);

if(isset($_POST['supprimer'])){
    Admin::deleteMenu($id);
    header('location:index.php?page=admin_menu');
}