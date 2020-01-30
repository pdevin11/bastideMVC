<?php

class Carte{

    static function getAllCartePlats(){
        global $db;

        $reqAllDishes = $db->query('SELECT * FROM menu_of_dishes');
        return $reqAllDishes->fetchAll();
    }

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