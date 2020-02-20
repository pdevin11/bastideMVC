<?php session_start(); 

if(!isset($_SESSION['identifiant'])){
    header('location:index.php?page=admin_connexion');
}

include_once '_classes/Timetable.php';

$openings = Timetable::getOpenings();

/* Lundi */

if(isset($_POST['monLunchOpen'])){
    $monLunch = 1;
    Timetable::setLunchOpening($monLunch, 'Monday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['monLunchClosed'])){
    $monLunch = 0;
    Timetable::setLunchOpening($monLunch, 'Monday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['monDinerOpen'])){
    $monDiner = 1;
    Timetable::setDinerOpening($monDiner, 'Monday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['monDinerClosed'])){
    $monDiner = 0;
    Timetable::setDinerOpening($monDiner, 'Monday');
    header('location:index.php?page=admin_infos#table');
}

/* Mardi */

if(isset($_POST['tueLunchOpen'])){
    $tueLunch = 1;
    Timetable::setLunchOpening($tueLunch, 'Tuesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['tueLunchClosed'])){
    $tueLunch = 0;
    Timetable::setLunchOpening($tueLunch, 'Tuesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['tueDinerOpen'])){
    $tueDiner = 1;
    Timetable::setDinerOpening($tueDiner, 'Tuesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['tueDinerClosed'])){
    $tueDiner = 0;
    Timetable::setDinerOpening($tueDiner, 'Tuesday');
    header('location:index.php?page=admin_infos#table');
}

/* Mercredi */

if(isset($_POST['wedLunchOpen'])){
    $wedLunch = 1;
    Timetable::setLunchOpening($wedLunch, 'Wednesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['wedLunchClosed'])){
    $wedLunch = 0;
    Timetable::setLunchOpening($wedLunch, 'Wednesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['wedDinerOpen'])){
    $wedDiner = 1;
    Timetable::setDinerOpening($wedDiner, 'Wednesday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['wedDinerClosed'])){
    $wedDiner = 0;
    Timetable::setDinerOpening($wedDiner, 'Wednesday');
    header('location:index.php?page=admin_infos#table');
}

/* Jeudi */

if(isset($_POST['thurLunchOpen'])){
    $thurLunch = 1;
    Timetable::setLunchOpening($thurLunch, 'Thursday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['thurLunchClosed'])){
    $thurLunch = 0;
    Timetable::setLunchOpening($thurLunch, 'Thursday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['thurDinerOpen'])){
    $thurDiner = 1;
    Timetable::setDinerOpening($thurDiner, 'Thursday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['thurDinerClosed'])){
    $thurDiner = 0;
    Timetable::setDinerOpening($thurDiner, 'Thursday');
    header('location:index.php?page=admin_infos#table');
}

/* Vendredi */

if(isset($_POST['friLunchOpen'])){
    $friLunch = 1;
    Timetable::setLunchOpening($friLunch, 'Friday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['friLunchClosed'])){
    $friLunch = 0;
    Timetable::setLunchOpening($friLunch, 'Friday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['friDinerOpen'])){
    $friDiner = 1;
    Timetable::setDinerOpening($friDiner, 'Friday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['friDinerClosed'])){
    $friDiner = 0;
    Timetable::setDinerOpening($friDiner, 'Friday');
    header('location:index.php?page=admin_infos#table');
}

/* Samedi */

if(isset($_POST['satLunchOpen'])){
    $satLunch = 1;
    Timetable::setLunchOpening($satLunch, 'Saturday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['satLunchClosed'])){
    $satLunch = 0;
    Timetable::setLunchOpening($satLunch, 'Saturday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['satDinerOpen'])){
    $satDiner = 1;
    Timetable::setDinerOpening($satDiner, 'Saturday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['satDinerClosed'])){
    $satDiner = 0;
    Timetable::setDinerOpening($satDiner, 'Saturday');
    header('location:index.php?page=admin_infos#table');
}

/* Dimanche */

if(isset($_POST['sunLunchOpen'])){
    $sunLunch = 1;
    Timetable::setLunchOpening($sunLunch, 'Sunday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['sunLunchClosed'])){
    $sunLunch = 0;
    Timetable::setLunchOpening($sunLunch, 'Sunday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['sunDinerOpen'])){
    $sunDiner = 1;
    Timetable::setDinerOpening($sunDiner, 'Sunday');
    header('location:index.php?page=admin_infos#table');
}
if(isset($_POST['sunDinerClosed'])){
    $sunDiner = 0;
    Timetable::setDinerOpening($sunDiner, 'Sunday');
    header('location:index.php?page=admin_infos#table');
}