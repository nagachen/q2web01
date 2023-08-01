<?php
    include_once "../base.php";
    $posts=$News->all(['type'=>$_GET['type']]);

    foreach($posts as $post){
        echo "<div>";
        //  呼叫外部的javascript function getPost
        echo "<a href='Javascript:getPost({$post['id']})'>";
        echo $post['title'];
        echo "</a>";
        echo "</div>";
    }
?>