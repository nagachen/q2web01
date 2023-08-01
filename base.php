<?php
session_start();

include_once __DIR__ ."/controller/Viewer.php";
include_once __DIR__ ."/controller/User.php";
include_once __DIR__ ."/controller/News.php";
include_once __DIR__ ."/controller/Que.php";
include_once __DIR__ ."/controller/Log.php";



function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to ($url){
    header('location:'.$url);
}
$Viewer=new Viewer;
$User=new User;
$News=new News;
$Que=new Que;
$Log=new Log;



?>