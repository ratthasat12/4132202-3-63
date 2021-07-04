<?php
require "../conDB.php";

$id = $_POST['ID'];
$name = $_POST['name'];
$pre_name = $_POST['pre_name'];
$subject_id = $_POST['subject_id'];

try {
    $sql = "INSERT INTO tb_register
            VALUE('$id','$pre_name','$name','$subject_id')";
    $mysqli->query($sql);

    if($result->errno == null)
        header("location:/add.php");
}
catch(Exception $e){
    echo $e->getMessage();
}
?>