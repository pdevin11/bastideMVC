<?php

class Menus {

    /**
     * Récupère tous les menus pour le menu de navigation
     * @return array
     */
    static function getAllMenus(){
        global $db;

        $reqMenus = $db->query('SELECT * FROM menus_names');
        return $reqMenus->fetchAll();
    }
    
    /**
     * Récupère les entrées en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getEntrees($id){
        global $db;

        $reqEntrees = $db->query("
            SELECT plat_name, translation, id_menu FROM plats_names 
            WHERE id_menu = '.$id.'
            AND plat_type = 'Entrée'
            ");
        return $reqEntrees->fetchAll();
    }
    
    /**
     * Récupère les plats en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getPlats($id){
        global $db;

        $reqPlats = $db->query("
            SELECT plat_name, translation, id_menu FROM plats_names 
            WHERE id_menu = '.$id.' 
            AND plat_type = 'Plat'
            ");
        return $reqPlats->fetchAll();
    }

    /**
     * Récupère les désserts en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getDesserts($id){
        global $db;

        $reqDesserts = $db->query("
            SELECT plat_name, translation FROM plats_names 
            WHERE id_menu = '.$id.' 
            AND plat_type = 'Dessert'
            ");
        return $reqDesserts->fetchAll();
    }
}

class Carte{

    /**
     * Récupère toutes les entrées disponnibles à la carte
     * @return array
     */
    static function getCarteEntrees(){
        global $db;

        $reqCarteEntrees = $db->query('SELECT * FROM menu_of_dishes WHERE plat_type = "Entrée"');
        return $reqCarteEntrees->fetchAll();
    }

    /**
     * Récupère toutes les salades disponnibles à la carte 
     * @return array
     */
    static function getCarteSalades(){
        global $db;

        $reqCarteSalades = $db->query('SELECT * FROM menu_of_dishes WHERE plat_type = "Salade"');
        return $reqCarteSalades->fetchAll();
    }

    /**
     * Récupère toutes les plats disponnibles à la carte 
     * @return array
     */
    static function getCartePlats(){
        global $db;

        $reqCartePlats = $db->query('SELECT * FROM menu_of_dishes WHERE plat_type = "Plat"');
        return $reqCartePlats->fetchAll();
    }

    /**
     * Récupère toutes les fromages disponnibles à la carte 
     * @return array
     */
    static function getCarteFromages(){
        global $db;

        $reqCarteFromages = $db->query('SELECT * FROM menu_of_dishes WHERE plat_type = "Fromage"');
        return $reqCarteFromages->fetchAll();
    }

    /**
     * Récupère toutes les desserts disponnibles à la carte 
     * @return array
     */
    static function getCarteDesserts(){
        global $db;

        $reqCarteDesserts = $db->query('SELECT * FROM menu_of_dishes WHERE plat_type = "Dessert"');
        return $reqCarteDesserts->fetchAll();
    }
}