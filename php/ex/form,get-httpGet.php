<?php
    var_dump($_GET);
    $post_get = $_GET;
    $post_get["test1"];
    //$_GET은 원본 데이터이므로 값이 수정되지 않게 조심
?>