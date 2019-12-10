<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_functions/functions.php';
include_once '_config/db.php';

// Autoloader
include_once '_classes/Autoloader.php';
Autoloader::registrer();

// Définition de la page courante
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

$_SESSION['lang'] = getUserLanguage();

// Array contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence d'une page
if (in_array($page . '_controller.php', $allPages)) {
    
    $lang = getPageLanguage($_SESSION['lang'], ['header', $page, 'footer']);

    // Inclusion de la page
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';

} else {
    echo "Erreur 404 : Page introuvable.";
}
