<?php

try{
    $mysqli = new mysqli("localhost","root","test","myDb");
    echo "Connected !!!";
}
catch(Exeption $e){
    echo $e->getMessage();
    echo "Error !!!";
}
?>