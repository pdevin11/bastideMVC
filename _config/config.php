<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Restaurant la Bastide");
define("WEBSITE_NAME", "Restaurant la Bastide");
define("WEBSITE_URL", "https://restaurant-labastide.fr");
define("WEBSITE_DESCRIPTION", "Le restaurant La Bastide de Monpazier vous accueille dans un cadre typique du Perigord.");
define("WEBSITE_AUTHOR", "Pierre Devin");
define("WEBSITE_AUTHOR_MAIL", "pdevin@contact.fr");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "Restaurant la Bastide");
define("WEBSITE_FACEBOOK_DESCRIPTION", "Le restaurant La Bastide de Monpazier vous accueille dans un cadre typique du Perigord.");
define("WEBSITE_FACEBOOK_URL", "https://restaurant-labastide.fr");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "bastideMVC");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

// Language
define("DEFAULT_LANGUAGE", "fr");

