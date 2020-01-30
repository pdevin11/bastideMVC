<?php

class Admin{
    
    /**
     * Ajoute un nouveau menu dans la base de donnée
     * @param $name, $price
     * @return $addMenu
     */
    static function addMenu($name, $price){
        global $db;

        $addMenu = $db->prepare('INSERT INTO menus (menu_name, menu_price) VALUES (?, ?)');
        return $addMenu->execute(array($name, $price));

    }

    /**
     * Modifie un menu
     * @param $name, $price
     * @return $updateMenu
     */
    static function updateMenu($name, $price, $id){
        global $db;

        $updateMenu = $db->prepare('UPDATE menus SET menu_name = ?, menu_price = ? WHERE id = ?');
        return $updateMenu->execute(array($name, $price, $id));

    }

    /**
     * Supprime un menu
     * @param $id
     * @return $deleteMenu
     */
    static function deleteMenu($id){
        global $db;

        $deleteMenu = $db->prepare('DELETE FROM menus WHERE id = ?');
        return $deleteMenu->execute(array($id));

    }

    /**
     * Ajoute un nouveau plat
     * @param $name, $translation, $type, $price, $bigSize
     * @return $addPlat
     */
    static function addPlat($name, $translation, $type, $price, $bigSize){
        global $db;

        $addPlat = $db->prepare('INSERT INTO menu_of_dishes(plat_name, translation, plat_type, price, bigSize_price VALUE (?, ?, ?, ?, ?)');
        return $addPlat->execute(array($name, $translation, $type, $price, $bigSize));
    }

    /**
     * Modifie un plat
     * @param $name, $translation, $type, $price, $bigSize
     * @return $updatePlat
     */
    static function updatePlat($name, $translation, $type, $price, $bigSize, $id){
        global $db;

        $updatePlat = $db->prepare('UPDATE menu_of_dishes SET plat_name = ?, translation = ?, plat_type = ?, price = ?, bigSize_price = ? WHERE id = ?');
        return $updatePlat->execute(array($name, $translation, $type, $price, $bigSize, $id));

    }

    /**
     * Supprime un plat
     * @param $id
     * @return $deletePlat
     */
    static function deletePlat($id){
        global $db;

        $deletePlat = $db->prepare('DELETE FROM menu_of_dishes WHERE id = ?');
        return $deletePlat->execute(array($id));

    }
}