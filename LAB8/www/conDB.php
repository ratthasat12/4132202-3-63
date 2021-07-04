<?php
$host = "db";
$user = "root";
$pass = "test";
$db = "class_room";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET NAMES utf8");
}
catch(Exeption $e){
    echo $e->getMessage();
}
?>