<?php
    include_once("../training/122tngFunction.php"); // 함수만 불러오기 나머지는 제외인듯

        $obj_conn=null;
        //db connect
        my_db_conn($obj_conn);

        $sql = " SELECT * FROM employees LIMIT :limit_start";

        $arr_prepare =
        array(
        ":limit_start" => 5
        );
        
        $stmt = $obj_conn->prepare($sql);
        $stmt->execute($arr_prepare);
        $result = $stmt->fetchAll();
        var_dump($result);
        $obj_conn=null; // DB Connection 파기
?>