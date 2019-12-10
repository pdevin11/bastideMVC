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
     * Récupère le nom et le prix du menu en fonction de l'id
     * @return array
     */
    static function getMenuDetails(){
        
        global $db;

        $reqMenu = $db->prepare('
            SELECT * FROM plats_names AS plats 
            INNER JOIN menus_names AS menus 
            ON plats.id_menu = menus.id 
            WHERE plats.id_menu = ?
        ');
        $reqMenu->execute(array($allMenus['id']));
        return $reqMenu->fetch();
    }
    
    /**
     * Récupère les entrées en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getEntrees($id){

        global $db;
        $id = $menu_name['id'];

        $reqEntrees = $db->query("
            SELECT plat_name, translation FROM plats_names 
            WHERE plat_type = 'Entrée' 
            AND id_menu = '.$id.'
            ");
        return $reqEntrees->fetch();
    }
    
    /**
     * Récupère les plats en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getPlats($id){
        // Récupération des plats en fonction de l'id du menu
        global $db;
        $id = $menu_name['id'];

        $reqPlats = $db->query("
            SELECT plat_name, translation FROM plats_names 
            WHERE plat_type = 'Plat' 
            AND id_menu = '.$id.'
            ");
        return $reqPlats->fetch();
    }

    /**
     * Récupère les désserts en fonction de l'id du menu
     * @param $id
     * @return array
     */
    static function getDesserts($id){
        //Récupération des désserts en fonction de l'id du menu
        global $db;
        $id = $menu_name['id'];

        $reqDesserts = $db->query("
            SELECT plat_name, translation FROM plats_names 
            WHERE plat_type = 'Dessert' 
            AND id_menu = '.$id.'
            ");
        return $reqDesserts->fetch();
    }

}

