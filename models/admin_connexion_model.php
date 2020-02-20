<?php

class Users{

    static function getPassword($identifiant){
        global $db;

        $reqPassword = $db->prepare('SELECT passwordHash FROM users WHERE identifiant = ?');
        $reqPassword->execute(array($identifiant));
        return $reqPassword->fetchAll();
    }
}