<?php
    include_once "../base.php";
    $posts=$News->all(['type'=>$_GET['type']]);

    foreach($posts as $post){
        echo "<div>";
        echo "<a href=''>";
        echo $post['title'];
        echo "</a>";
        echo "</div>";
    }
?>