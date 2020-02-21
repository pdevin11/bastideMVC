<?php

class Carte{

    /**
     * Recupère tous les plats disponnibles à la carte
     * @return array
     */
    static function getAllCartePlats(){
        global $db;

        $reqAllDishes = $db->query('SELECT * FROM menu_of_dishes');
        return $reqAllDishes->fetchAll();
    }

    /**
     * Recupère un plat à la carte en fonction de son id
     * @param $id
     * @return array
     */
    static function getDish($id){
        global $db;

        $reqDish = $db->prepare('SELECT * FROM menu_of_dishes WHERE id = ?');
        $reqDish->execute(array($id));
        return $reqDish->fetch();
    }

    /**
     * Recupère les plats à la carte en fonction du type de plat
     * @param $type
     * @return array
     */
    static function getCarteDish(string $type){
        global $db;

        $reqCD = $db->prepare('SELECT * FROM menu_of_dishes WHERE isOnline = "true" AND plat_type = ?');
        $reqCD->execute(array($type));
        return $reqCD->fetchAll();
    }
}