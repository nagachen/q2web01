<?php
 include_once "../base.php";

$type=$_POST['type']; //case 中的type
unset($_POST['type']);
$_POST['user']=$_SESSION['user'];

$news=$News->find($_POST['news']);  //data-id

switch($type){
    case 1:
        $Log->save($_POST);
        $news['goods']++;
    break;
    case 2:
        
        $Log->delMore($_POST);
        $news['goods']--;
    break;



}
$News->save($news);
?>