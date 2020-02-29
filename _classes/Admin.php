<?php

class Admin{

    /* Gestion des menus */

    /**
     * Ajoute un nouveau menu en BDD dont id en AI et isOnline initialisé à false par défaut
     * @param $name, $price
     * @return array
     */
    static function addMenu($name, $price){
        global $db;

        $addMenu = $db->prepare('INSERT INTO menus (menu_name, menu_price) VALUES (?, ?)');
        return $addMenu->execute(array($name, $price));
    }

    /**
     * Modifie un menu en Base de donnée pour le passer en ligne
     * @param $id
     * @return array
     */
    static function setMenuOnline($id){
        global $db;

        $setOnline = $db->prepare('UPDATE menus SET isOnline = "true" WHERE id = ?');
        return $setOnline->execute(array($id));
    }

    /**
     * Modifie un menu en base de donnée pour le passer hors ligne
     * @param $id
     * @return array
     */
    static function setMenuOffline($id){
        global $db;

        $setOffline = $db->prepare('UPDATE menus SET isOnline = "false" WHERE id = ?');
        return $setOffline->execute(array($id));
    }

    /**
     * Modifie un menu en fonction de son id
     * @param $name, $price, $id
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

    /* Gestion des plats d'un menu */

    /**
     * Ajoute un plat à un menu en fonction de l'id du menu
     * @param $name, $translation, $type, $menuName, $idMenu
     * @return array
     */
    static function addPlatToMenu($name, $translation, $type, $menuName, $idMenu){
        global $db;

        $addPTM = $db->prepare('INSERT INTO plats_names(plat_name, translation, plat_type, menu_name, id_menu) VALUES (?, ?, ?, ?, ?)');
        return $addPTM->execute(array($name, $translation, $type, $menuName, $idMenu));
    }

    /**
     * Modifie un plat d'un menu en fonction de l'id du plat
     * @param $name, $translation, $type, $id
     * @return array
     */
    static function updatePlatToMenu($name, $translation, $type, $id){
        global $db;

        $updatePTM = $db->prepare('UPDATE plats_names SET plat_name = ?, translation = ?, plat_type = ? WHERE id = ?');
        return $updatePTM->execute(array($name, $translation, $type, $id));
    }

    /**
     * Supprime un plat d'un menu en fonction de l'id du plat
     * @param $id
     * @return array
     */
    static function deletePlatToMenu($id){
        global $db;

        $deletePTM = $db->prepare('DELETE FROM plats_names WHERE id = ?');
        return $deletePTM->execute(array($id));
    }

    /* Gestion de la carte des plats */

    /**
     * Ajoute un nouveau plat avec 'isOnline' défini à false par défaut
     * @param $name, $translation, $type, $price, $bigSize
     * @return $addPlat
     */
    static function addPlat($name, $translation, $type, $price, $bigSize){
        global $db;

        $addPlat = $db->prepare('INSERT INTO menu_of_dishes(plat_name, translation, plat_type, price, bigSize_price) VALUE (?, ?, ?, ?, ?)');
        return $addPlat->execute(array($name, $translation, $type, $price, $bigSize));
    }

    /**
     * Modifie la valeur de isOnline à 'true' pour passer le plat en ligne
     * @param $id
     * @return array
     */
    static function setPlatOnline($id){
        global $db;

        $reqSetOnline = $db->prepare('UPDATE menu_of_dishes SET isOnline = "true" WHERE id = ?');
        return $reqSetOnline->execute(array($id));
    }

    /**
     * Modifie la valeur de isOnline à 'false' pour passer le plat hors ligne
     * @param $id
     * @return array
     */
    static function setPlatOffline($id){
        global $db;

        $reqSetOffline = $db->prepare('UPDATE menu_of_dishes SET isOnline = "false" WHERE id = ?');
        return $reqSetOffline->execute(array($id));
    }

    /**
     * Modifie un plat en fonction de son id
     * @param $name, $translation, $type, $price, $bigSize, $id
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