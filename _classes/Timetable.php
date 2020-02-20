<?php

class Timetable{

    /**
     * Récupère les jours d'ouvertures du restaurant
     * @return array
     */
    static function getOpenings(){
        global $db;

        $reqOpening = $db->query('SELECT * FROM timetable');
        return $reqOpening->fetchAll();
    }

    /**
     * Modifie la valeur de isOpenForLunch en base de donnée
     * @param $lunchOpening, $day
     * @return array
     */
    static function setLunchOpening($lunchOpening, $day){
        global $db;

        $reqLunchOpening = $db->prepare('UPDATE timetable SET isOpenForLunch = ? WHERE jour = ?');
        return $reqLunchOpening->execute(array($lunchOpening, $day));
    }

    /**
     * Modifie la valeur de isOpenForDiner en base de donnée
     * @param $dinerOpening, $day
     * @return array
     */
    static function setDinerOpening($dinerOpening, $day){
        global $db;

        $reqDinerOpening = $db->prepare('UPDATE timetable SET isOpenForDiner = ? WHERE jour = ?');
        return $reqDinerOpening->execute(array($dinerOpening, $day));
    }
}