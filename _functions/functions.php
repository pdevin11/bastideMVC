<?php

/** 
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return @string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * Return the current language of the user
 * @return string
 */
function getUserLanguage() {
    if (isset($_GET['lang']) && !empty($_GET['lang'])){
        $lang = str_secur(strtolower($_GET['lang']));
        $availableLanguages = ['fr', 'en', 'es'];
        return (in_array($lang, $availableLanguages)) ? $lang : DEFAULT_LANGUAGE;
    } else {
        return (isset($_SESSION['lang']) && !empty($_SESSION['lang'])) ? $_SESSION['lang'] : DEFAULT_LANGUAGE;
    }
}

/**
 * Return the current language of the page
 * @return object
 */
function getPageLanguage($lang, $pages) {
    $dataPage = [];
    foreach ($pages as $p) {
        $jsonString = file_get_contents('_lang/' . $lang . '/' . $p . '.json'); // Contenu du fichier _lang/'la langue'/'la page'.json
        $json = json_decode($jsonString); // on stocke le contenu dans la variable $json
        $dataPage[$p] = $json; // On attribut le contenu du $json dans l'array à l'indice de la page correspondante
    }
    return (object) $dataPage;
}