<?php
ini_set("display_errors", 1);

    $name = $_POST['name'];
    $image = $_POST['image'];
    $hp = $_POST['hp'];
    $mp = $_POST['mp'];
    $ap = $_POST['ap'];
    $armor_type = $_POST['armor_type'];
    $speed = $_POST['speed'];
    $damage = $_POST['damage'];
    $damage_type = $_POST['damage_type'];
    $skills_id = $_POST['skills_id'];
    $gain_xp = $_POST['gain_xp'];
    $gain_price = $_POST['gain_price'];

require_once('config.php');
$db = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DB);