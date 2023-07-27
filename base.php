<?php
session_start();

include_once __DIR__ ."/controller/viewer.php";
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$Viewer=new Viewer;

?>