<?php

class Users{

    /**
     * Récupère le mot de passe hashé stocké en base de donnée en fonction de l'identifiant
     * @param $identifiant
     * @return array
     */
    static function getPassword($identifiant){
        global $db;

        $reqPassword = $db->prepare('SELECT passwordHash FROM users WHERE identifiant = ?');
        $reqPassword->execute(array($identifiant));
        return $reqPassword->fetchAll();
    }
}