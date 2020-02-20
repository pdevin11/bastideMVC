<?php session_start(); 

if(!isset($_SESSION['identifiant'])){
    header('location:index.php?page=admin_connexion');
}

include_once '_classes/Carte.php';
include_once '_classes/Admin.php';

/* Suppression d'un plat */

$id = str_secur($_GET['id']);

$dish = Carte::getDish($id);

if(isset($_POST['supprimer'])){
    Admin::deletePlat($id);
    header('location:index.php?page=admin_menu');
}