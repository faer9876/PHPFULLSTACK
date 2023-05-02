<?php
    $post=$_POST;

    foreach($post as $key=>$values){
        echo $key." ".$values."\n";
    }

    // $post=implode("",$_POST);
    // echo $post;
?>