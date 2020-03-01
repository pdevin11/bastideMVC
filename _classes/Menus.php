<?php

class Menus {

    /**
     * Récupère tous les menus actuellement en ligne
     * @return array
     */
    static function getAllMenus(){
        global $db;

        $reqMenus = $db->query('SELECT * FROM menus');
        return $reqMenus->fetchAll();
    }

    /**
     * Récupère tous les menus disponibles en DB en ligne ou non
     * @return array
     */
    static function getMenusOnline(){
        global $db;

        $reqMenusOnline = $db->query('SELECT * FROM menus WHERE isOnline = "true"');
        return $reqMenusOnline->fetchAll();
    }

    /**
     * Récupère un menu en fonction de l'id placé en paramètre
     * @param $id
     * @return array
     */
    static function getMenu($id){
        global $db;

        $reqMenu = $db->prepare('SELECT * FROM menus WHERE id = ?');
        $reqMenu->execute(array($id));
        return $reqMenu->fetch();
    }

    /**
     * Recupère un plat d'un menu en fonction de l'id du plat
     * @param $id
     * @return array
     */
    static function getDish($id){
        global $db;

        $reqDish = $db->prepare('SELECT * FROM plats_names WHERE id = ?');
        $reqDish->execute(array($id));
        return $reqDish->fetch();
    }
    
    /**
     * Récupère les entrées en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getEntrees($id){
        global $db;

        $reqEntrees = $db->prepare("
            SELECT * FROM plats_names 
            WHERE id_menu = '.$id.'
            AND plat_type = 'Entrée'
            AND isOnline = 'true'
            ");
        $reqEntrees->execute(array($id));
        return $reqEntrees->fetchAll();
    }
    
    /**
     * Récupère les plats en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getPlats($id){
        global $db;

        $reqPlats = $db->prepare("
            SELECT * FROM plats_names 
            WHERE id_menu = '.$id.'
            AND plat_type = 'Plat'
            AND isOnline = 'true'
            ");
        $reqPlats->execute(array($id));
        return $reqPlats->fetchAll();
    }

    /**
     * Récupère les désserts en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getDesserts($id){
        global $db;

        $reqDesserts = $db->prepare("
            SELECT * FROM plats_names 
            WHERE id_menu = '.$id.' 
            AND plat_type = 'Dessert'
            AND isOnline = 'true'
            ");
        $reqDesserts->execute(array($id));
        return $reqDesserts->fetchAll();
    }
}